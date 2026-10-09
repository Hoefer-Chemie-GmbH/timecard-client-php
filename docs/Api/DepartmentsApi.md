# TimecardClient\DepartmentsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDepartment()**](DepartmentsApi.md#getDepartment) | **GET** /v1/departments/{departmentId} | Department details |
| [**listDepartmentMembers()**](DepartmentsApi.md#listDepartmentMembers) | **GET** /v1/departments/{departmentId}/members | Members as of today (without the leader unless the leader is a member) |
| [**listDepartments()**](DepartmentsApi.md#listDepartments) | **GET** /v1/departments | Departments |


## `getDepartment()`

```php
getDepartment($department_id): \TimecardClient\Model\GetDepartment200Response
```

Department details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\DepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$department_id = 56; // int

try {
    $result = $apiInstance->getDepartment($department_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DepartmentsApi->getDepartment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **department_id** | **int**|  | |

### Return type

[**\TimecardClient\Model\GetDepartment200Response**](../Model/GetDepartment200Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDepartmentMembers()`

```php
listDepartmentMembers($department_id): \TimecardClient\Model\ListDepartmentMembers200Response
```

Members as of today (without the leader unless the leader is a member)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\DepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$department_id = 56; // int

try {
    $result = $apiInstance->listDepartmentMembers($department_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DepartmentsApi->listDepartmentMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **department_id** | **int**|  | |

### Return type

[**\TimecardClient\Model\ListDepartmentMembers200Response**](../Model/ListDepartmentMembers200Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDepartments()`

```php
listDepartments(): \TimecardClient\Model\ListDepartments200Response
```

Departments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\DepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listDepartments();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DepartmentsApi->listDepartments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\TimecardClient\Model\ListDepartments200Response**](../Model/ListDepartments200Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
