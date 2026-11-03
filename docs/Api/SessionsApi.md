# TimecardClient\SessionsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**closeTimecardSession()**](SessionsApi.md#closeTimecardSession) | **DELETE** /v1/timecard-sessions/current | End the timeCard session named in the header X-Timecard-Session |
| [**openTimecardSession()**](SessionsApi.md#openTimecardSession) | **POST** /v1/timecard-sessions | Open a pass-through timeCard session with a person&#39;s own login (the password is sent to timeCard once and not kept) |


## `closeTimecardSession()`

```php
closeTimecardSession()
```

End the timeCard session named in the header X-Timecard-Session

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->closeTimecardSession();
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->closeTimecardSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `openTimecardSession()`

```php
openTimecardSession($openTimecardSessionRequest): \TimecardClient\Model\OpenTimecardSession201Response
```

Open a pass-through timeCard session with a person's own login (the password is sent to timeCard once and not kept)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$openTimecardSessionRequest = new \TimecardClient\Model\OpenTimecardSessionRequest(); // \TimecardClient\Model\OpenTimecardSessionRequest

try {
    $result = $apiInstance->openTimecardSession($openTimecardSessionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->openTimecardSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **openTimecardSessionRequest** | [**\TimecardClient\Model\OpenTimecardSessionRequest**](../Model/OpenTimecardSessionRequest.md)|  | |

### Return type

[**\TimecardClient\Model\OpenTimecardSession201Response**](../Model/OpenTimecardSession201Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
