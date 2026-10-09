# TimecardClient\BreakRulesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getBreakRule()**](BreakRulesApi.md#getBreakRule) | **GET** /v1/break-rules/{breakRuleId} | Break rule details |
| [**listBreakRules()**](BreakRulesApi.md#listBreakRules) | **GET** /v1/break-rules | Break rules |


## `getBreakRule()`

```php
getBreakRule($breakRuleId): \TimecardClient\Model\GetBreakRule200Response
```

Break rule details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\BreakRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$breakRuleId = 56; // int

try {
    $result = $apiInstance->getBreakRule($breakRuleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BreakRulesApi->getBreakRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **breakRuleId** | **int**|  | |

### Return type

[**\TimecardClient\Model\GetBreakRule200Response**](../Model/GetBreakRule200Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBreakRules()`

```php
listBreakRules($activeOnly): \TimecardClient\Model\ListBreakRules200Response
```

Break rules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\BreakRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$activeOnly = 'activeOnly_example'; // string

try {
    $result = $apiInstance->listBreakRules($activeOnly);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BreakRulesApi->listBreakRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **activeOnly** | **string**|  | [optional] |

### Return type

[**\TimecardClient\Model\ListBreakRules200Response**](../Model/ListBreakRules200Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
