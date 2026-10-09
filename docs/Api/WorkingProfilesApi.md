# TimecardClient\WorkingProfilesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getWorkingProfile()**](WorkingProfilesApi.md#getWorkingProfile) | **GET** /v1/working-profiles/{workingProfileId} | Working time profile details |
| [**listWorkingProfiles()**](WorkingProfilesApi.md#listWorkingProfiles) | **GET** /v1/working-profiles | Working time profiles |


## `getWorkingProfile()`

```php
getWorkingProfile($workingProfileId): \TimecardClient\Model\GetWorkingProfile200Response
```

Working time profile details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\WorkingProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workingProfileId = 56; // int

try {
    $result = $apiInstance->getWorkingProfile($workingProfileId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkingProfilesApi->getWorkingProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workingProfileId** | **int**|  | |

### Return type

[**\TimecardClient\Model\GetWorkingProfile200Response**](../Model/GetWorkingProfile200Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWorkingProfiles()`

```php
listWorkingProfiles($activeOnly, $correctionOnly): \TimecardClient\Model\ListWorkingProfiles200Response
```

Working time profiles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\WorkingProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$activeOnly = 'activeOnly_example'; // string
$correctionOnly = 'correctionOnly_example'; // string

try {
    $result = $apiInstance->listWorkingProfiles($activeOnly, $correctionOnly);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkingProfilesApi->listWorkingProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **activeOnly** | **string**|  | [optional] |
| **correctionOnly** | **string**|  | [optional] |

### Return type

[**\TimecardClient\Model\ListWorkingProfiles200Response**](../Model/ListWorkingProfiles200Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
