# timecard-client-php

PHP client for a REST facade in front of the time recording system REINER SCT timeCard, generated with [openapi-generator](https://openapi-generator.tech/) (`php-nextgen`). The facade offers persons, bookings, balances, absences and master data as a documented JSON API with OAuth authentication, scopes and an audit log.

This project is not affiliated with, endorsed or sponsored by REINER SCT. REINER SCT and timeCard are trademarks of their respective owner.

- API version `0.2.1`, namespace `TimecardClient`.
- Generated: `src/Api/*Api.php` (one class per tag), `src/Model/*`, `Configuration.php`, `ApiException.php`, `ObjectSerializer.php`, `docs/`.
- Hand-written: `src/GoogleServiceAccountToken.php` (Google ID tokens), `src/ProblemDetails.php` (Problem Details).

## Installation

Composer, with this repository as VCS source:

```json
{
  "repositories": [{ "type": "vcs", "url": "https://github.com/Hoefer-Chemie-GmbH/timecard-client-php" }],
  "require": { "timecard/client": "^0.2.1" }
}
```

Composer reads the repository through the GitHub API; anonymous access is rate-limited, so on build servers with many installations configure any GitHub token (`composer config --global github-oauth.github.com <token>` or `COMPOSER_AUTH`).

PHP 8.1 or newer with curl, json and mbstring. Dependencies: `guzzlehttp/guzzle`, `google/auth`.

## Authentication

The facade accepts Google ID tokens of service accounts. Each service account is registered by the operator of the facade together with the scopes it may use; ask the operator for the registration and for the base URL of the facade. The base URL is also the audience of the token. Keep the service account's JSON key outside the repository and load it from a secret store or a file outside the checkout.

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
| `masterdata:write` | create and change work operations |
| `masterdata:delete` | delete work operations |
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

## Acting user

When calls are made on behalf of a human user, send the header `X-Acting-User` through a Guzzle client with default headers; the facade stores it in the audit log next to the service account.

## Example and tests

- `php examples/read-person.php` (needs `TIMECARD_API_URL` and `GOOGLE_SA_KEY_FILE`).
- `vendor/bin/phpunit` runs the unit tests of the hand-written layer; no network.

## About this repository

The client is generated from the facade's OpenAPI specification; only the authentication helper, the Problem Details helper, the example and the tests are written by hand. The content of this repository is replaced by synchronisation pull requests whenever the specification changes, so changes made here directly would be overwritten. Report problems as issues.

The version equals the API version of the facade. Merging a synchronisation pull request releases the version if it has no tag yet. Breaking changes of the API arrive as a new major version with a new `/v2` base path.
