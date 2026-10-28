# TimecardClient\PresenceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listPresence()**](PresenceApi.md#listPresence) | **GET** /v1/presence | Presence status of all employees (presence display) |
| [**listPresenceStatus()**](PresenceApi.md#listPresenceStatus) | **GET** /v1/presence/status | Presence status of all employees: person id and PRESENT or ABSENT only (an absence with a reason is ABSENT; no names, no reasons) |


## `listPresence()`

```php
listPresence(): \TimecardClient\Model\ListPresence200Response
```

Presence status of all employees (presence display)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\PresenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listPresence();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PresenceApi->listPresence: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\TimecardClient\Model\ListPresence200Response**](../Model/ListPresence200Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPresenceStatus()`

```php
listPresenceStatus($department): \TimecardClient\Model\ListPresenceStatus200Response
```

Presence status of all employees: person id and PRESENT or ABSENT only (an absence with a reason is ABSENT; no names, no reasons)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\PresenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$department = array('department_example'); // string[] | department name as in timeCard (see GET /v1/departments), repeatable; only persons of these departments

try {
    $result = $apiInstance->listPresenceStatus($department);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PresenceApi->listPresenceStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **department** | [**string[]**](../Model/string.md)| department name as in timeCard (see GET /v1/departments), repeatable; only persons of these departments | [optional] |

### Return type

[**\TimecardClient\Model\ListPresenceStatus200Response**](../Model/ListPresenceStatus200Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
