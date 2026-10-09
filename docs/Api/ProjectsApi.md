# TimecardClient\ProjectsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createProject()**](ProjectsApi.md#createProject) | **POST** /v1/projects | Create a project (timeCard user right 213 create) |
| [**deleteProject()**](ProjectsApi.md#deleteProject) | **DELETE** /v1/projects/{projectId} | Delete a project (timeCard user right 213 delete; a project in use is rejected by timeCard) |
| [**getProject()**](ProjectsApi.md#getProject) | **GET** /v1/projects/{projectId} | Project details |
| [**listAllowedProjects()**](ProjectsApi.md#listAllowedProjects) | **GET** /v1/persons/{personId}/allowed-projects | Projects this person may book on a given day |
| [**listProjects()**](ProjectsApi.md#listProjects) | **GET** /v1/projects | Projects |
| [**updateProject()**](ProjectsApi.md#updateProject) | **PATCH** /v1/projects/{projectId} | Change a project (read-modify-write, timeCard user right 213 update) |


## `createProject()`

```php
createProject($createProjectRequest, $idempotencyKey): \TimecardClient\Model\CreateProject201Response
```

Create a project (timeCard user right 213 create)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createProjectRequest = new \TimecardClient\Model\CreateProjectRequest(); // \TimecardClient\Model\CreateProjectRequest
$idempotencyKey = 'idempotencyKey_example'; // string | Repeating the request with the same key within 24 hours returns the stored response (header `Idempotent-Replayed: true`) instead of executing it again

try {
    $result = $apiInstance->createProject($createProjectRequest, $idempotencyKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->createProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createProjectRequest** | [**\TimecardClient\Model\CreateProjectRequest**](../Model/CreateProjectRequest.md)|  | |
| **idempotencyKey** | **string**| Repeating the request with the same key within 24 hours returns the stored response (header &#x60;Idempotent-Replayed: true&#x60;) instead of executing it again | [optional] |

### Return type

[**\TimecardClient\Model\CreateProject201Response**](../Model/CreateProject201Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProject()`

```php
deleteProject($projectId)
```

Delete a project (timeCard user right 213 delete; a project in use is rejected by timeCard)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int

try {
    $apiInstance->deleteProject($projectId);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->deleteProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**|  | |

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

## `getProject()`

```php
getProject($projectId): \TimecardClient\Model\CreateProject201Response
```

Project details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int

try {
    $result = $apiInstance->getProject($projectId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->getProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**|  | |

### Return type

[**\TimecardClient\Model\CreateProject201Response**](../Model/CreateProject201Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAllowedProjects()`

```php
listAllowedProjects($personId, $date): \TimecardClient\Model\ListProjects200Response
```

Projects this person may book on a given day

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$personId = 56; // int
$date = 'date_example'; // string

try {
    $result = $apiInstance->listAllowedProjects($personId, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->listAllowedProjects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **personId** | **int**|  | |
| **date** | **string**|  | [optional] |

### Return type

[**\TimecardClient\Model\ListProjects200Response**](../Model/ListProjects200Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProjects()`

```php
listProjects($includeInactive): \TimecardClient\Model\ListProjects200Response
```

Projects

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$includeInactive = 'includeInactive_example'; // string

try {
    $result = $apiInstance->listProjects($includeInactive);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->listProjects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **includeInactive** | **string**|  | [optional] |

### Return type

[**\TimecardClient\Model\ListProjects200Response**](../Model/ListProjects200Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProject()`

```php
updateProject($projectId, $updateProjectRequest): \TimecardClient\Model\CreateProject201Response
```

Change a project (read-modify-write, timeCard user right 213 update)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 56; // int
$updateProjectRequest = new \TimecardClient\Model\UpdateProjectRequest(); // \TimecardClient\Model\UpdateProjectRequest

try {
    $result = $apiInstance->updateProject($projectId, $updateProjectRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->updateProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **int**|  | |
| **updateProjectRequest** | [**\TimecardClient\Model\UpdateProjectRequest**](../Model/UpdateProjectRequest.md)|  | |

### Return type

[**\TimecardClient\Model\CreateProject201Response**](../Model/CreateProject201Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
