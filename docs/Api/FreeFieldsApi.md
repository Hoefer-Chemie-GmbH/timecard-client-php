# TimecardClient\FreeFieldsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getFreeField()**](FreeFieldsApi.md#getFreeField) | **GET** /v1/free-fields/{freeFieldId} | Free field details |
| [**listFreeFields()**](FreeFieldsApi.md#listFreeFields) | **GET** /v1/free-fields | Free field definitions |


## `getFreeField()`

```php
getFreeField($freeFieldId): \TimecardClient\Model\GetFreeField200Response
```

Free field details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\FreeFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$freeFieldId = 56; // int

try {
    $result = $apiInstance->getFreeField($freeFieldId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FreeFieldsApi->getFreeField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **freeFieldId** | **int**|  | |

### Return type

[**\TimecardClient\Model\GetFreeField200Response**](../Model/GetFreeField200Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listFreeFields()`

```php
listFreeFields(): \TimecardClient\Model\ListFreeFields200Response
```

Free field definitions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\FreeFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listFreeFields();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FreeFieldsApi->listFreeFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\TimecardClient\Model\ListFreeFields200Response**](../Model/ListFreeFields200Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
