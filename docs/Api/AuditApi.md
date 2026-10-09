# TimecardClient\AuditApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAuditEvent()**](AuditApi.md#getAuditEvent) | **GET** /v1/audit-events/{eventId} | Read one audit event |
| [**listAuditEvents()**](AuditApi.md#listAuditEvents) | **GET** /v1/audit-events | Query audit events (JSON or CSV) |


## `getAuditEvent()`

```php
getAuditEvent($event_id): \TimecardClient\Model\ListAuditEvents200ResponseItemsInner
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
$event_id = 'event_id_example'; // string

try {
    $result = $apiInstance->getAuditEvent($event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditApi->getAuditEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |

### Return type

[**\TimecardClient\Model\ListAuditEvents200ResponseItemsInner**](../Model/ListAuditEvents200ResponseItemsInner.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAuditEvents()`

```php
listAuditEvents($from, $to, $subject, $issuer_name, $action, $outcome, $resource_type, $resource_id, $person_id, $request_id, $page, $page_size, $format): \TimecardClient\Model\ListAuditEvents200Response
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
$issuer_name = 'issuer_name_example'; // string
$action = 'action_example'; // string
$outcome = 'outcome_example'; // string
$resource_type = 'resource_type_example'; // string
$resource_id = 'resource_id_example'; // string
$person_id = 56; // int
$request_id = 'request_id_example'; // string
$page = 1; // int
$page_size = 100; // int
$format = 'json'; // string | csv returns text/csv with one line per event

try {
    $result = $apiInstance->listAuditEvents($from, $to, $subject, $issuer_name, $action, $outcome, $resource_type, $resource_id, $person_id, $request_id, $page, $page_size, $format);
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
| **issuer_name** | **string**|  | [optional] |
| **action** | **string**|  | [optional] |
| **outcome** | **string**|  | [optional] |
| **resource_type** | **string**|  | [optional] |
| **resource_id** | **string**|  | [optional] |
| **person_id** | **int**|  | [optional] |
| **request_id** | **string**|  | [optional] |
| **page** | **int**|  | [optional] [default to 1] |
| **page_size** | **int**|  | [optional] [default to 100] |
| **format** | **string**| csv returns text/csv with one line per event | [optional] [default to &#39;json&#39;] |

### Return type

[**\TimecardClient\Model\ListAuditEvents200Response**](../Model/ListAuditEvents200Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
