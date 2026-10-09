# TimecardClient\PersonsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCarryOver()**](PersonsApi.md#createCarryOver) | **POST** /v1/persons/{personId}/calculation-accounts/{calculationId}/balances | Create a manual carry-over (timeCard user right 223 create) |
| [**createPerson()**](PersonsApi.md#createPerson) | **POST** /v1/persons | Create a person (with isEmployee consumes an employee licence) |
| [**deleteCarryOver()**](PersonsApi.md#deleteCarryOver) | **DELETE** /v1/persons/{personId}/calculation-accounts/{calculationId}/balances/{balanceId} | Delete a manual carry-over (timeCard user right 223 delete) |
| [**getPerson()**](PersonsApi.md#getPerson) | **GET** /v1/persons/{personId} | Read a person |
| [**getPersonByPersonNo()**](PersonsApi.md#getPersonByPersonNo) | **GET** /v1/persons/by-person-no/{personNo} | Read a person by personnel number |
| [**getPersonPhoto()**](PersonsApi.md#getPersonPhoto) | **GET** /v1/persons/{personId}/photo | Photo of the person (JPEG); 404 if no photo is stored |
| [**listCalculationAccounts()**](PersonsApi.md#listCalculationAccounts) | **GET** /v1/persons/{personId}/calculation-accounts | Calculation accounts of the person at a date |
| [**listCarryOvers()**](PersonsApi.md#listCarryOvers) | **GET** /v1/persons/{personId}/calculation-accounts/{calculationId}/balances | Manual carry-overs of a month |
| [**listPersons()**](PersonsApi.md#listPersons) | **GET** /v1/persons | List persons |
| [**putPersonPhoto()**](PersonsApi.md#putPersonPhoto) | **PUT** /v1/persons/{personId}/photo | Store or replace the photo of the person (body: image/jpeg, at most 2 MB) |
| [**replaceCarryOver()**](PersonsApi.md#replaceCarryOver) | **PUT** /v1/persons/{personId}/calculation-accounts/{calculationId}/balances/{balanceId} | Replace a manual carry-over (the carry-over must exist in the month of balanceDate) |
| [**updatePerson()**](PersonsApi.md#updatePerson) | **PATCH** /v1/persons/{personId} | Partially update a person (JSON merge patch on the writable fields) |
| [**upsertPersonByPersonNo()**](PersonsApi.md#upsertPersonByPersonNo) | **PUT** /v1/persons/by-person-no/{personNo} | Create or update a person by personnel number (upsert for HR synchronisation) |


## `createCarryOver()`

```php
createCarryOver($personId, $calculationId, $createCarryOverRequest): \TimecardClient\Model\ListCarryOvers200ResponseItemsInner
```

Create a manual carry-over (timeCard user right 223 create)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\PersonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$personId = 56; // int
$calculationId = 56; // int
$createCarryOverRequest = new \TimecardClient\Model\CreateCarryOverRequest(); // \TimecardClient\Model\CreateCarryOverRequest

try {
    $result = $apiInstance->createCarryOver($personId, $calculationId, $createCarryOverRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonsApi->createCarryOver: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **personId** | **int**|  | |
| **calculationId** | **int**|  | |
| **createCarryOverRequest** | [**\TimecardClient\Model\CreateCarryOverRequest**](../Model/CreateCarryOverRequest.md)|  | |

### Return type

[**\TimecardClient\Model\ListCarryOvers200ResponseItemsInner**](../Model/ListCarryOvers200ResponseItemsInner.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPerson()`

```php
createPerson($createPersonRequest): \TimecardClient\Model\CreatePerson201Response
```

Create a person (with isEmployee consumes an employee licence)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\PersonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createPersonRequest = new \TimecardClient\Model\CreatePersonRequest(); // \TimecardClient\Model\CreatePersonRequest

try {
    $result = $apiInstance->createPerson($createPersonRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonsApi->createPerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createPersonRequest** | [**\TimecardClient\Model\CreatePersonRequest**](../Model/CreatePersonRequest.md)|  | |

### Return type

[**\TimecardClient\Model\CreatePerson201Response**](../Model/CreatePerson201Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCarryOver()`

```php
deleteCarryOver($personId, $calculationId, $balanceId, $month)
```

Delete a manual carry-over (timeCard user right 223 delete)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\PersonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$personId = 56; // int
$calculationId = 56; // int
$balanceId = 56; // int
$month = 'month_example'; // string | month of the carry-over; when given, the state before deletion is recorded in the audit

try {
    $apiInstance->deleteCarryOver($personId, $calculationId, $balanceId, $month);
} catch (Exception $e) {
    echo 'Exception when calling PersonsApi->deleteCarryOver: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **personId** | **int**|  | |
| **calculationId** | **int**|  | |
| **balanceId** | **int**|  | |
| **month** | **string**| month of the carry-over; when given, the state before deletion is recorded in the audit | [optional] |

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

## `getPerson()`

```php
getPerson($personId): \TimecardClient\Model\GetPerson200Response
```

Read a person

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\PersonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$personId = 56; // int

try {
    $result = $apiInstance->getPerson($personId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonsApi->getPerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **personId** | **int**|  | |

### Return type

[**\TimecardClient\Model\GetPerson200Response**](../Model/GetPerson200Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPersonByPersonNo()`

```php
getPersonByPersonNo($personNo): \TimecardClient\Model\GetPerson200Response
```

Read a person by personnel number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\PersonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$personNo = 'personNo_example'; // string

try {
    $result = $apiInstance->getPersonByPersonNo($personNo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonsApi->getPersonByPersonNo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **personNo** | **string**|  | |

### Return type

[**\TimecardClient\Model\GetPerson200Response**](../Model/GetPerson200Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPersonPhoto()`

```php
getPersonPhoto($personId)
```

Photo of the person (JPEG); 404 if no photo is stored

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\PersonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$personId = 56; // int

try {
    $apiInstance->getPersonPhoto($personId);
} catch (Exception $e) {
    echo 'Exception when calling PersonsApi->getPersonPhoto: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **personId** | **int**|  | |

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

## `listCalculationAccounts()`

```php
listCalculationAccounts($personId, $date): \TimecardClient\Model\ListCalculationAccounts200Response
```

Calculation accounts of the person at a date

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\PersonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$personId = 56; // int
$date = 'date_example'; // string | reference date; defaults to today

try {
    $result = $apiInstance->listCalculationAccounts($personId, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonsApi->listCalculationAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **personId** | **int**|  | |
| **date** | **string**| reference date; defaults to today | [optional] |

### Return type

[**\TimecardClient\Model\ListCalculationAccounts200Response**](../Model/ListCalculationAccounts200Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCarryOvers()`

```php
listCarryOvers($month, $personId, $calculationId): \TimecardClient\Model\ListCarryOvers200Response
```

Manual carry-overs of a month

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\PersonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$month = 'month_example'; // string
$personId = 56; // int
$calculationId = 56; // int

try {
    $result = $apiInstance->listCarryOvers($month, $personId, $calculationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonsApi->listCarryOvers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **month** | **string**|  | |
| **personId** | **int**|  | |
| **calculationId** | **int**|  | |

### Return type

[**\TimecardClient\Model\ListCarryOvers200Response**](../Model/ListCarryOvers200Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPersons()`

```php
listPersons($state, $department, $personNo, $search, $includeAdmin, $page, $pageSize): \TimecardClient\Model\ListPersons200Response
```

List persons

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\PersonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$state = 'state_example'; // string
$department = 'department_example'; // string
$personNo = 'personNo_example'; // string
$search = 'search_example'; // string
$includeAdmin = 'includeAdmin_example'; // string
$page = 1; // int
$pageSize = 100; // int

try {
    $result = $apiInstance->listPersons($state, $department, $personNo, $search, $includeAdmin, $page, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonsApi->listPersons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **state** | **string**|  | [optional] |
| **department** | **string**|  | [optional] |
| **personNo** | **string**|  | [optional] |
| **search** | **string**|  | [optional] |
| **includeAdmin** | **string**|  | [optional] |
| **page** | **int**|  | [optional] [default to 1] |
| **pageSize** | **int**|  | [optional] [default to 100] |

### Return type

[**\TimecardClient\Model\ListPersons200Response**](../Model/ListPersons200Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putPersonPhoto()`

```php
putPersonPhoto($personId, $body)
```

Store or replace the photo of the person (body: image/jpeg, at most 2 MB)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\PersonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$personId = 56; // int
$body = '/path/to/file.txt'; // \SplFileObject | raw body of type image/jpeg

try {
    $apiInstance->putPersonPhoto($personId, $body);
} catch (Exception $e) {
    echo 'Exception when calling PersonsApi->putPersonPhoto: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **personId** | **int**|  | |
| **body** | **\SplFileObject****\SplFileObject**| raw body of type image/jpeg | |

### Return type

void (empty response body)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: `image/jpeg`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `replaceCarryOver()`

```php
replaceCarryOver($personId, $calculationId, $balanceId, $createCarryOverRequest): \TimecardClient\Model\ListCarryOvers200ResponseItemsInner
```

Replace a manual carry-over (the carry-over must exist in the month of balanceDate)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\PersonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$personId = 56; // int
$calculationId = 56; // int
$balanceId = 56; // int
$createCarryOverRequest = new \TimecardClient\Model\CreateCarryOverRequest(); // \TimecardClient\Model\CreateCarryOverRequest

try {
    $result = $apiInstance->replaceCarryOver($personId, $calculationId, $balanceId, $createCarryOverRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonsApi->replaceCarryOver: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **personId** | **int**|  | |
| **calculationId** | **int**|  | |
| **balanceId** | **int**|  | |
| **createCarryOverRequest** | [**\TimecardClient\Model\CreateCarryOverRequest**](../Model/CreateCarryOverRequest.md)|  | |

### Return type

[**\TimecardClient\Model\ListCarryOvers200ResponseItemsInner**](../Model/ListCarryOvers200ResponseItemsInner.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePerson()`

```php
updatePerson($personId, $updatePersonRequest): \TimecardClient\Model\GetPerson200Response
```

Partially update a person (JSON merge patch on the writable fields)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\PersonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$personId = 56; // int
$updatePersonRequest = new \TimecardClient\Model\UpdatePersonRequest(); // \TimecardClient\Model\UpdatePersonRequest

try {
    $result = $apiInstance->updatePerson($personId, $updatePersonRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonsApi->updatePerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **personId** | **int**|  | |
| **updatePersonRequest** | [**\TimecardClient\Model\UpdatePersonRequest**](../Model/UpdatePersonRequest.md)|  | |

### Return type

[**\TimecardClient\Model\GetPerson200Response**](../Model/GetPerson200Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `upsertPersonByPersonNo()`

```php
upsertPersonByPersonNo($personNo, $upsertPersonByPersonNoRequest): \TimecardClient\Model\GetPerson200Response
```

Create or update a person by personnel number (upsert for HR synchronisation)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\PersonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$personNo = 'personNo_example'; // string
$upsertPersonByPersonNoRequest = new \TimecardClient\Model\UpsertPersonByPersonNoRequest(); // \TimecardClient\Model\UpsertPersonByPersonNoRequest

try {
    $result = $apiInstance->upsertPersonByPersonNo($personNo, $upsertPersonByPersonNoRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonsApi->upsertPersonByPersonNo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **personNo** | **string**|  | |
| **upsertPersonByPersonNoRequest** | [**\TimecardClient\Model\UpsertPersonByPersonNoRequest**](../Model/UpsertPersonByPersonNoRequest.md)|  | |

### Return type

[**\TimecardClient\Model\GetPerson200Response**](../Model/GetPerson200Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
