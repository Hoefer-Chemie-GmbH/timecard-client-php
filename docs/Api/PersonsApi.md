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
createCarryOver($person_id, $calculation_id, $create_carry_over_request): \TimecardClient\Model\ListCarryOvers200ResponseItemsInner
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
$person_id = 56; // int
$calculation_id = 56; // int
$create_carry_over_request = new \TimecardClient\Model\CreateCarryOverRequest(); // \TimecardClient\Model\CreateCarryOverRequest

try {
    $result = $apiInstance->createCarryOver($person_id, $calculation_id, $create_carry_over_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonsApi->createCarryOver: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**|  | |
| **calculation_id** | **int**|  | |
| **create_carry_over_request** | [**\TimecardClient\Model\CreateCarryOverRequest**](../Model/CreateCarryOverRequest.md)|  | |

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
createPerson($create_person_request): \TimecardClient\Model\CreatePerson201Response
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
$create_person_request = new \TimecardClient\Model\CreatePersonRequest(); // \TimecardClient\Model\CreatePersonRequest

try {
    $result = $apiInstance->createPerson($create_person_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonsApi->createPerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_person_request** | [**\TimecardClient\Model\CreatePersonRequest**](../Model/CreatePersonRequest.md)|  | |

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
deleteCarryOver($person_id, $calculation_id, $balance_id, $month)
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
$person_id = 56; // int
$calculation_id = 56; // int
$balance_id = 56; // int
$month = 'month_example'; // string | month of the carry-over; when given, the state before deletion is recorded in the audit

try {
    $apiInstance->deleteCarryOver($person_id, $calculation_id, $balance_id, $month);
} catch (Exception $e) {
    echo 'Exception when calling PersonsApi->deleteCarryOver: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**|  | |
| **calculation_id** | **int**|  | |
| **balance_id** | **int**|  | |
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
getPerson($person_id): \TimecardClient\Model\GetPerson200Response
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
$person_id = 56; // int

try {
    $result = $apiInstance->getPerson($person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonsApi->getPerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**|  | |

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
getPersonByPersonNo($person_no): \TimecardClient\Model\GetPerson200Response
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
$person_no = 'person_no_example'; // string

try {
    $result = $apiInstance->getPersonByPersonNo($person_no);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonsApi->getPersonByPersonNo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_no** | **string**|  | |

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
getPersonPhoto($person_id)
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
$person_id = 56; // int

try {
    $apiInstance->getPersonPhoto($person_id);
} catch (Exception $e) {
    echo 'Exception when calling PersonsApi->getPersonPhoto: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**|  | |

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
listCalculationAccounts($person_id, $date): \TimecardClient\Model\ListCalculationAccounts200Response
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
$person_id = 56; // int
$date = 'date_example'; // string | reference date; defaults to today

try {
    $result = $apiInstance->listCalculationAccounts($person_id, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonsApi->listCalculationAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**|  | |
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
listCarryOvers($month, $person_id, $calculation_id): \TimecardClient\Model\ListCarryOvers200Response
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
$person_id = 56; // int
$calculation_id = 56; // int

try {
    $result = $apiInstance->listCarryOvers($month, $person_id, $calculation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonsApi->listCarryOvers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **month** | **string**|  | |
| **person_id** | **int**|  | |
| **calculation_id** | **int**|  | |

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
listPersons($state, $department, $person_no, $search, $include_admin, $page, $page_size): \TimecardClient\Model\ListPersons200Response
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
$person_no = 'person_no_example'; // string
$search = 'search_example'; // string
$include_admin = 'include_admin_example'; // string
$page = 1; // int
$page_size = 100; // int

try {
    $result = $apiInstance->listPersons($state, $department, $person_no, $search, $include_admin, $page, $page_size);
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
| **person_no** | **string**|  | [optional] |
| **search** | **string**|  | [optional] |
| **include_admin** | **string**|  | [optional] |
| **page** | **int**|  | [optional] [default to 1] |
| **page_size** | **int**|  | [optional] [default to 100] |

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
putPersonPhoto($person_id, $body)
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
$person_id = 56; // int
$body = '/path/to/file.txt'; // \SplFileObject | raw body of type image/jpeg

try {
    $apiInstance->putPersonPhoto($person_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling PersonsApi->putPersonPhoto: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**|  | |
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
replaceCarryOver($person_id, $calculation_id, $balance_id, $create_carry_over_request): \TimecardClient\Model\ListCarryOvers200ResponseItemsInner
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
$person_id = 56; // int
$calculation_id = 56; // int
$balance_id = 56; // int
$create_carry_over_request = new \TimecardClient\Model\CreateCarryOverRequest(); // \TimecardClient\Model\CreateCarryOverRequest

try {
    $result = $apiInstance->replaceCarryOver($person_id, $calculation_id, $balance_id, $create_carry_over_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonsApi->replaceCarryOver: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**|  | |
| **calculation_id** | **int**|  | |
| **balance_id** | **int**|  | |
| **create_carry_over_request** | [**\TimecardClient\Model\CreateCarryOverRequest**](../Model/CreateCarryOverRequest.md)|  | |

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
updatePerson($person_id, $update_person_request): \TimecardClient\Model\GetPerson200Response
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
$person_id = 56; // int
$update_person_request = new \TimecardClient\Model\UpdatePersonRequest(); // \TimecardClient\Model\UpdatePersonRequest

try {
    $result = $apiInstance->updatePerson($person_id, $update_person_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonsApi->updatePerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**|  | |
| **update_person_request** | [**\TimecardClient\Model\UpdatePersonRequest**](../Model/UpdatePersonRequest.md)|  | |

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
upsertPersonByPersonNo($person_no, $upsert_person_by_person_no_request): \TimecardClient\Model\GetPerson200Response
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
$person_no = 'person_no_example'; // string
$upsert_person_by_person_no_request = new \TimecardClient\Model\UpsertPersonByPersonNoRequest(); // \TimecardClient\Model\UpsertPersonByPersonNoRequest

try {
    $result = $apiInstance->upsertPersonByPersonNo($person_no, $upsert_person_by_person_no_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonsApi->upsertPersonByPersonNo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_no** | **string**|  | |
| **upsert_person_by_person_no_request** | [**\TimecardClient\Model\UpsertPersonByPersonNoRequest**](../Model/UpsertPersonByPersonNoRequest.md)|  | |

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
