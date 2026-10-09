# TimecardClient\WorkingProfilesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getWorkingProfile()**](WorkingProfilesApi.md#getWorkingProfile) | **GET** /v1/working-profiles/{workingProfileId} | Working time profile details |
| [**listWorkingProfiles()**](WorkingProfilesApi.md#listWorkingProfiles) | **GET** /v1/working-profiles | Working time profiles |


## `getWorkingProfile()`

```php
getWorkingProfile($working_profile_id): \TimecardClient\Model\GetWorkingProfile200Response
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
$working_profile_id = 56; // int

try {
    $result = $apiInstance->getWorkingProfile($working_profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkingProfilesApi->getWorkingProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **working_profile_id** | **int**|  | |

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
listWorkingProfiles($active_only, $correction_only): \TimecardClient\Model\ListWorkingProfiles200Response
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
$active_only = 'active_only_example'; // string
$correction_only = 'correction_only_example'; // string

try {
    $result = $apiInstance->listWorkingProfiles($active_only, $correction_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkingProfilesApi->listWorkingProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **active_only** | **string**|  | [optional] |
| **correction_only** | **string**|  | [optional] |

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
