<?php
// Reads the calling principal and lists three persons.
// Environment: TIMECARD_API_URL (base URL of the facade), GOOGLE_SA_KEY_FILE (path to the service account JSON).
declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use TimecardClient\Api\PersonsApi;
use TimecardClient\Api\SystemApi;
use TimecardClient\ApiException;
use TimecardClient\GoogleServiceAccountToken;
use TimecardClient\ProblemDetails;

$baseUrl = getenv('TIMECARD_API_URL') ?: throw new RuntimeException('set TIMECARD_API_URL to the base URL of the facade');
$auth = new GoogleServiceAccountToken(getenv('GOOGLE_SA_KEY_FILE') ?: 'service-account.json', $baseUrl);

try {
    $me = (new SystemApi(null, $auth->configuration()))->getMe();
    echo 'principal ', $me->getDisplayName(), ' scopes ', implode(',', $me->getScopes()), PHP_EOL;
    $page = (new PersonsApi(null, $auth->configuration()))->listPersons(pageSize: 3);
    foreach ($page->getItems() as $p) {
        echo $p->getId(), ' ', $p->getPersonNo(), ' ', $p->getLastName(), ' ', $p->getFirstName(), PHP_EOL;
    }
} catch (ApiException $e) {
    $problem = ProblemDetails::fromException($e);
    echo 'facade error: ', $problem?->status ?? $e->getCode(), ' ', $problem?->detail ?? $e->getMessage(), PHP_EOL;
}
