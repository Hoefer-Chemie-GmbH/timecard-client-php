# TimecardClient\CalculationTemplatesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listCalculationTemplates()**](CalculationTemplatesApi.md#listCalculationTemplates) | **GET** /v1/calculation-templates | Calculation templates |


## `listCalculationTemplates()`

```php
listCalculationTemplates($activeOnly): \TimecardClient\Model\ListCalculationTemplates200Response
```

Calculation templates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\CalculationTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$activeOnly = 'activeOnly_example'; // string

try {
    $result = $apiInstance->listCalculationTemplates($activeOnly);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalculationTemplatesApi->listCalculationTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **activeOnly** | **string**|  | [optional] |

### Return type

[**\TimecardClient\Model\ListCalculationTemplates200Response**](../Model/ListCalculationTemplates200Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
