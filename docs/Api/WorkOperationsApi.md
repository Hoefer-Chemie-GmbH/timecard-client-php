# TimecardClient\WorkOperationsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWorkOperation()**](WorkOperationsApi.md#createWorkOperation) | **POST** /v1/work-operations | Create a work operation (timeCard user right 213 create) |
| [**deleteWorkOperation()**](WorkOperationsApi.md#deleteWorkOperation) | **DELETE** /v1/work-operations/{workOperationId} | Delete a work operation (timeCard user right 213 delete; a used work operation is rejected by timeCard) |
| [**getWorkOperation()**](WorkOperationsApi.md#getWorkOperation) | **GET** /v1/work-operations/{workOperationId} | Work operation details |
| [**listProjectWorkOperations()**](WorkOperationsApi.md#listProjectWorkOperations) | **GET** /v1/projects/{projectId}/work-operations | Work operations allowed for a project |
| [**listWorkOperations()**](WorkOperationsApi.md#listWorkOperations) | **GET** /v1/work-operations | All work operations |
| [**updateWorkOperation()**](WorkOperationsApi.md#updateWorkOperation) | **PATCH** /v1/work-operations/{workOperationId} | Change a work operation (read-modify-write, timeCard user right 213 update) |


## `createWorkOperation()`

```php
createWorkOperation($createWorkOperationRequest): \TimecardClient\Model\CreateWorkOperation201Response
```

Create a work operation (timeCard user right 213 create)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\WorkOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createWorkOperationRequest = new \TimecardClient\Model\CreateWorkOperationRequest(); // \TimecardClient\Model\CreateWorkOperationRequest

try {
    $result = $apiInstance->createWorkOperation($createWorkOperationRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkOperationsApi->createWorkOperation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createWorkOperationRequest** | [**\TimecardClient\Model\CreateWorkOperationRequest**](../Model/CreateWorkOperationRequest.md)|  | |

### Return type

[**\TimecardClient\Model\CreateWorkOperation201Response**](../Model/CreateWorkOperation201Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWorkOperation()`

```php
deleteWorkOperation($workOperationId)
```

Delete a work operation (timeCard user right 213 delete; a used work operation is rejected by timeCard)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\WorkOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workOperationId = 56; // int

try {
    $apiInstance->deleteWorkOperation($workOperationId);
} catch (Exception $e) {
    echo 'Exception when calling WorkOperationsApi->deleteWorkOperation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workOperationId** | **int**|  | |

### Return type

void (empty response body)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWorkOperation()`

```php
getWorkOperation($workOperationId): \TimecardClient\Model\CreateWorkOperation201Response
```

Work operation details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\WorkOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workOperationId = 56; // int

try {
    $result = $apiInstance->getWorkOperation($workOperationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkOperationsApi->getWorkOperation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workOperationId** | **int**|  | |

### Return type

[**\TimecardClient\Model\CreateWorkOperation201Response**](../Model/CreateWorkOperation201Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProjectWorkOperations()`

```php
listProjectWorkOperations($projectId): \TimecardClient\Model\ListProjectWorkOperations200Response
```

Work operations allowed for a project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\WorkOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int

try {
    $result = $apiInstance->listProjectWorkOperations($projectId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkOperationsApi->listProjectWorkOperations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**|  | |

### Return type

[**\TimecardClient\Model\ListProjectWorkOperations200Response**](../Model/ListProjectWorkOperations200Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWorkOperations()`

```php
listWorkOperations(): \TimecardClient\Model\ListProjectWorkOperations200Response
```

All work operations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\WorkOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorkOperations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkOperationsApi->listWorkOperations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\TimecardClient\Model\ListProjectWorkOperations200Response**](../Model/ListProjectWorkOperations200Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWorkOperation()`

```php
updateWorkOperation($workOperationId, $updateWorkOperationRequest): \TimecardClient\Model\CreateWorkOperation201Response
```

Change a work operation (read-modify-write, timeCard user right 213 update)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\WorkOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workOperationId = 56; // int
$updateWorkOperationRequest = new \TimecardClient\Model\UpdateWorkOperationRequest(); // \TimecardClient\Model\UpdateWorkOperationRequest

try {
    $result = $apiInstance->updateWorkOperation($workOperationId, $updateWorkOperationRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkOperationsApi->updateWorkOperation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workOperationId** | **int**|  | |
| **updateWorkOperationRequest** | [**\TimecardClient\Model\UpdateWorkOperationRequest**](../Model/UpdateWorkOperationRequest.md)|  | |

### Return type

[**\TimecardClient\Model\CreateWorkOperation201Response**](../Model/CreateWorkOperation201Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
