# timecard-client-php

PHP client for a REST facade in front of the time recording system REINER SCT timeCard, generated with [openapi-generator](https://openapi-generator.tech/) (`php-nextgen`). The facade offers persons, bookings, balances, absences and master data as a documented JSON API with OAuth authentication, scopes and an audit log.

This project is not affiliated with, endorsed or sponsored by REINER SCT. REINER SCT and timeCard are trademarks of their respective owner.

- API version `0.2.2`, namespace `TimecardClient`.
- Generated: `src/Api/*Api.php` (one class per tag), `src/Model/*`, `Configuration.php`, `ApiException.php`, `ObjectSerializer.php`, `docs/`.
- Hand-written: `src/GoogleServiceAccountToken.php` (Google ID tokens), `src/ProblemDetails.php` (Problem Details).

## Installation

Composer, with this repository as VCS source:

```json
{
  "repositories": [{ "type": "vcs", "url": "https://github.com/Hoefer-Chemie-GmbH/timecard-client-php" }],
  "require": { "timecard/client": "^0.2.2" }
}
```

Composer reads the repository through the GitHub API; anonymous access is rate-limited, so on build servers with many installations configure any GitHub token (`composer config --global github-oauth.github.com <token>` or `COMPOSER_AUTH`).

PHP 8.1 or newer with curl, json and mbstring. Dependencies: `guzzlehttp/guzzle`, `google/auth`.

## Getting access

Access is granted per system by the operator of the facade; there is no self-service registration. Ask the operator for access with:

| Information | Example |
|---|---|
| System name | `hr-sync` (one service account per system and environment) |
| Responsible person | name and e-mail address |
| Purpose | "synchronises employees every 15 minutes" |
| Scopes | `persons:read`, `bookings:read` (see [Scopes](#scopes)) |
| Write access | which operations, if any |
| Runtime | Google Cloud, another cloud, on premises, developer machine |
| Expected volume | calls per hour, peaks |
| Validity | open-ended, or an end date for development and tests |
| Source addresses | fixed addresses, if access should be restricted to them |

The operator returns the base URL of the facade and a Google service account registered with the granted scopes, either as a JSON key or as the permission to obtain tokens for it without a key (see [Without a key file](#without-a-key-file)). The first call after the setup is `GET /v1/me`: it needs no scope and returns the registered name and scopes.

| Answer of `GET /v1/me` | Cause |
|---|---|
| `200` | access works; compare the scopes with the request |
| `401` | no token, token expired, or an audience other than the base URL |
| `403` | service account not registered, disabled or expired, or the source address is not allowed |

## Authentication

The facade accepts Google ID tokens of service accounts. Each service account is registered by the operator of the facade together with the scopes it may use; the operator provides the service account and the base URL of the facade (see [Getting access](#getting-access)). The base URL is also the audience of the token. Keep the service account's JSON key outside the repository and load it from a secret store or a file outside the checkout.

```php
use TimecardClient\Api\PersonsApi;
use TimecardClient\GoogleServiceAccountToken;

$baseUrl = getenv('TIMECARD_API_URL'); // e.g. https://timecard-api.example.com
$auth = new GoogleServiceAccountToken(getenv('GOOGLE_SA_KEY_FILE'), $baseUrl);
$persons = new PersonsApi(null, $auth->configuration());
$page = $persons->listPersons(pageSize: 50);
foreach ($page->getItems() as $person) {
    echo $person->getId(), ' ', $person->getPersonNo(), ' ', $person->getLastName(), PHP_EOL;
}
```

`configuration()` sets the base URL as host and returns a `Configuration` whose access token is refreshed when it is about to expire; call it when you create an API object, or create the API objects per unit of work. Without it the generated `Configuration` points to `http://localhost`.

### Without a key file

A key file is a long-lived secret. Where the system runs on Google Cloud as the registered service account (Cloud Run, GKE, Compute Engine), the metadata server issues the ID token. Elsewhere the operator can allow the system's own identity to obtain tokens for the service account: IAM Credentials API `generateIdToken` with `includeEmail: true`, or Workload Identity Federation. The token must carry the `email` claim; the metadata server includes it only with `format=full`.

```php
use TimecardClient\Api\PersonsApi;
use TimecardClient\Configuration;

$idToken = file_get_contents(
    'http://metadata.google.internal/computeMetadata/v1/instance/service-accounts/default/identity?format=full&audience=' . urlencode($baseUrl),
    false,
    stream_context_create(['http' => ['header' => "Metadata-Flavor: Google\r\n"]]),
);
$config = Configuration::getDefaultConfiguration()->setHost($baseUrl)->setAccessToken($idToken);
$persons = new PersonsApi(null, $config);
```

The token is valid for one hour; fetch it again per unit of work (the metadata server caches it and renews it itself).

## Scopes

| Scope | Allows |
|---|---|
| `persons:read` | persons, photos, calculation accounts and carry-overs |
| `persons:write` | create and change persons, photos, carry-overs |
| `persons:delete` | delete carry-overs |
| `bookings:read` | bookings, daily balances, calendar, absence overview |
| `bookings:write` | create and change bookings, absence bookings, working time profile assignments |
| `bookings:delete` | delete bookings and working time profile assignments |
| `masterdata:read` | absence types, projects, work operations, departments, groups, calculation templates, working time profiles, break rules, free fields |
| `masterdata:write` | create and change projects and work operations |
| `masterdata:delete` | delete projects and work operations |
| `presence:read` | presence display |
| `audit:read` | the facade's audit log |

A call outside the scopes of the service account answers `403` with a Problem Details body.

## Errors

The facade answers every error with an RFC 9457 Problem Details body. The generated API classes throw `ApiException`; `ProblemDetails::fromException($e)` reads the body (`status`, `title`, `detail`, `errors`, `requestId()`). Quote the request id when reporting a problem to the operator; the audit log of the facade is searchable by it.

| Status | Meaning |
|---|---|
| 400, 422 | invalid request; `errors` lists the fields |
| 401 | token missing, expired or for a different audience |
| 403 | scope missing, or the person is outside the set released for writing |
| 404 | the resource does not exist |
| 409 | the time recording system rejected the change (e.g. month closed, duplicate) |
| 429 | rate limit of the facade; wait and retry |
| 502, 503 | the time recording system is unavailable or answered unexpectedly; retry later |

## Operating rules

- **Data.** The facade reads and changes the data of the connected time recording installation. Ask the operator whether a separate test installation exists; without one, development and tests work on real personal data and fall under the same data protection rules as production.
- **Write access.** The operator can release write access for selected persons only, for example a test person during development; calls for other persons answer `403` without reaching the time recording system.
- **Rate limit.** The facade limits the calls per service account (by default 120 per minute) and answers `429` above it; spread bulk processing over time.
- **Retries.** Retry reads after `502` or `503` with a pause; the facade itself already retries a read once against the time recording system. Do not repeat a failed write blindly: the time recording system has no idempotency keys, so a repeated write can book twice; read the current state first.
- **Audit.** The facade records every call with the service account, route, parameters and status.
- **Versions.** Install a fixed version (Git tag) and update deliberately; before 1.0.0 a minor version may contain incompatible changes.

## Acting user

When calls are made on behalf of a human user, send the header `X-Acting-User` through a Guzzle client with default headers; the facade stores it in the audit log next to the service account.

## Example and tests

- `php examples/read-person.php` (needs `TIMECARD_API_URL` and `GOOGLE_SA_KEY_FILE`).
- `vendor/bin/phpunit` runs the unit tests of the hand-written layer; no network.

## About this repository

The client is generated from the facade's OpenAPI specification; only the authentication helper, the Problem Details helper, the example and the tests are written by hand. The content of this repository is replaced by synchronisation pull requests whenever the specification changes, so changes made here directly would be overwritten. Report problems as issues.

The version equals the API version of the facade. Merging a synchronisation pull request releases the version if it has no tag yet. Breaking changes of the API arrive as a new major version with a new `/v2` base path.
