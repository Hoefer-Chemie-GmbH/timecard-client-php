# TimecardClient\AvailabilityApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listAvailability()**](AvailabilityApi.md#listAvailability) | **GET** /v1/availability | Availability of all employees per day (at most 92 days): AVAILABLE, PARTIALLY_AVAILABLE, UNAVAILABLE or UNKNOWN, without names, reasons or times |


## `listAvailability()`

```php
listAvailability($from, $to, $department): \TimecardClient\Model\ListAvailability200Response
```

Availability of all employees per day (at most 92 days): AVAILABLE, PARTIALLY_AVAILABLE, UNAVAILABLE or UNKNOWN, without names, reasons or times

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\AvailabilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = 'from_example'; // string
$to = 'to_example'; // string
$department = array('department_example'); // string[] | department name as in timeCard (see GET /v1/departments), repeatable; only persons of these departments

try {
    $result = $apiInstance->listAvailability($from, $to, $department);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilityApi->listAvailability: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from** | **string**|  | |
| **to** | **string**|  | |
| **department** | [**string[]**](../Model/string.md)| department name as in timeCard (see GET /v1/departments), repeatable; only persons of these departments | [optional] |

### Return type

[**\TimecardClient\Model\ListAvailability200Response**](../Model/ListAvailability200Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
