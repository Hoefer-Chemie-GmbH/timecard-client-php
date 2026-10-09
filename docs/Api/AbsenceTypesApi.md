# TimecardClient\AbsenceTypesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAbsenceType()**](AbsenceTypesApi.md#getAbsenceType) | **GET** /v1/absence-types/{absenceTypeId} | Absence type details |
| [**listAbsenceTypes()**](AbsenceTypesApi.md#listAbsenceTypes) | **GET** /v1/absence-types | Absence types |


## `getAbsenceType()`

```php
getAbsenceType($absenceTypeId): \TimecardClient\Model\GetAbsenceType200Response
```

Absence type details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\AbsenceTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$absenceTypeId = 56; // int

try {
    $result = $apiInstance->getAbsenceType($absenceTypeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AbsenceTypesApi->getAbsenceType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **absenceTypeId** | **int**|  | |

### Return type

[**\TimecardClient\Model\GetAbsenceType200Response**](../Model/GetAbsenceType200Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAbsenceTypes()`

```php
listAbsenceTypes($usage, $personId, $date): \TimecardClient\Model\ListAbsenceTypes200Response
```

Absence types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\AbsenceTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$usage = 'ALL'; // string
$personId = 56; // int
$date = 'date_example'; // string

try {
    $result = $apiInstance->listAbsenceTypes($usage, $personId, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AbsenceTypesApi->listAbsenceTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **usage** | **string**|  | [optional] [default to &#39;ALL&#39;] |
| **personId** | **int**|  | [optional] |
| **date** | **string**|  | [optional] |

### Return type

[**\TimecardClient\Model\ListAbsenceTypes200Response**](../Model/ListAbsenceTypes200Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
