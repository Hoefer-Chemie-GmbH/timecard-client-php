# TimecardClient\AuditApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAuditEvent()**](AuditApi.md#getAuditEvent) | **GET** /v1/audit-events/{eventId} | Read one audit event |
| [**listAuditEvents()**](AuditApi.md#listAuditEvents) | **GET** /v1/audit-events | Query audit events (JSON or CSV) |


## `getAuditEvent()`

```php
getAuditEvent($eventId): \TimecardClient\Model\GetAuditEvent200Response
```

Read one audit event

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\AuditApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$eventId = 'eventId_example'; // string

try {
    $result = $apiInstance->getAuditEvent($eventId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditApi->getAuditEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **eventId** | **string**|  | |

### Return type

[**\TimecardClient\Model\GetAuditEvent200Response**](../Model/GetAuditEvent200Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAuditEvents()`

```php
listAuditEvents($from, $to, $subject, $issuerName, $action, $outcome, $resourceType, $resourceId, $personId, $requestId, $page, $pageSize, $format): \TimecardClient\Model\ListAuditEvents200Response
```

Query audit events (JSON or CSV)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\AuditApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = NULL; // mixed | start of the period (RFC 3339); defaults to 7 days before `to`
$to = NULL; // mixed | end of the period (RFC 3339); defaults to now
$subject = 'subject_example'; // string
$issuerName = 'issuerName_example'; // string
$action = 'action_example'; // string
$outcome = 'outcome_example'; // string
$resourceType = 'resourceType_example'; // string
$resourceId = 'resourceId_example'; // string
$personId = 56; // int
$requestId = 'requestId_example'; // string
$page = 1; // int
$pageSize = 100; // int
$format = 'json'; // string | csv returns text/csv with one line per event

try {
    $result = $apiInstance->listAuditEvents($from, $to, $subject, $issuerName, $action, $outcome, $resourceType, $resourceId, $personId, $requestId, $page, $pageSize, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditApi->listAuditEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from** | [**mixed**](../Model/.md)| start of the period (RFC 3339); defaults to 7 days before &#x60;to&#x60; | [optional] |
| **to** | [**mixed**](../Model/.md)| end of the period (RFC 3339); defaults to now | [optional] |
| **subject** | **string**|  | [optional] |
| **issuerName** | **string**|  | [optional] |
| **action** | **string**|  | [optional] |
| **outcome** | **string**|  | [optional] |
| **resourceType** | **string**|  | [optional] |
| **resourceId** | **string**|  | [optional] |
| **personId** | **int**|  | [optional] |
| **requestId** | **string**|  | [optional] |
| **page** | **int**|  | [optional] [default to 1] |
| **pageSize** | **int**|  | [optional] [default to 100] |
| **format** | **string**| csv returns text/csv with one line per event | [optional] [default to &#39;json&#39;] |

### Return type

[**\TimecardClient\Model\ListAuditEvents200Response**](../Model/ListAuditEvents200Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
