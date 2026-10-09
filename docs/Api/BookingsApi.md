# TimecardClient\BookingsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**assignWorkingProfile()**](BookingsApi.md#assignWorkingProfile) | **POST** /v1/working-profile-assignments | Assign an optional working time profile to persons for a period (timeCard user right 250) |
| [**createAbsenceBooking()**](BookingsApi.md#createAbsenceBooking) | **POST** /v1/absence-bookings | Book an absence for a period (one or more persons); timeCard returns no booking id, the day list shows the booking as ABSENCE |
| [**createBooking()**](BookingsApi.md#createBooking) | **POST** /v1/bookings | Create a time or project booking |
| [**deleteBooking()**](BookingsApi.md#deleteBooking) | **DELETE** /v1/bookings/{bookingId} | Delete a booking (for absence bookings timeCard deletes the whole period) |
| [**getAbsenceOverview()**](BookingsApi.md#getAbsenceOverview) | **GET** /v1/absence-overview | Absence overview of all employees for a month |
| [**getBooking()**](BookingsApi.md#getBooking) | **GET** /v1/bookings/{bookingId} | Booking details (recorded bookings only; calculated breaks and system bookings return 404) |
| [**getDailyBalance()**](BookingsApi.md#getDailyBalance) | **GET** /v1/persons/{personId}/daily-balance | Daily balance of a person |
| [**getPersonAbsenceOverview()**](BookingsApi.md#getPersonAbsenceOverview) | **GET** /v1/persons/{personId}/absence-overview | Absence overview of a person per month of a year |
| [**getPersonCalendar()**](BookingsApi.md#getPersonCalendar) | **GET** /v1/persons/{personId}/calendar | Calendar (public holidays, absences, sickness, irregularities) for two months from the given month |
| [**listBookings()**](BookingsApi.md#listBookings) | **GET** /v1/bookings | Bookings (alias of /persons/{id}/bookings) |
| [**listPersonBookings()**](BookingsApi.md#listPersonBookings) | **GET** /v1/persons/{personId}/bookings | Bookings of a person (single day or range, max. 31 days) |
| [**removeWorkingProfileAssignment()**](BookingsApi.md#removeWorkingProfileAssignment) | **DELETE** /v1/working-profile-assignments | Remove the optional working time profile of a person for a period (timeCard user right 250) |
| [**updateBooking()**](BookingsApi.md#updateBooking) | **PATCH** /v1/bookings/{bookingId} | Update a booking (timestamp, absence type, project, work operation, comment) |


## `assignWorkingProfile()`

```php
assignWorkingProfile($assignWorkingProfileRequest): \TimecardClient\Model\AssignWorkingProfile201Response
```

Assign an optional working time profile to persons for a period (timeCard user right 250)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$assignWorkingProfileRequest = new \TimecardClient\Model\AssignWorkingProfileRequest(); // \TimecardClient\Model\AssignWorkingProfileRequest

try {
    $result = $apiInstance->assignWorkingProfile($assignWorkingProfileRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->assignWorkingProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **assignWorkingProfileRequest** | [**\TimecardClient\Model\AssignWorkingProfileRequest**](../Model/AssignWorkingProfileRequest.md)|  | |

### Return type

[**\TimecardClient\Model\AssignWorkingProfile201Response**](../Model/AssignWorkingProfile201Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAbsenceBooking()`

```php
createAbsenceBooking($createAbsenceBookingRequest, $calculate): \TimecardClient\Model\CreateAbsenceBooking201Response
```

Book an absence for a period (one or more persons); timeCard returns no booking id, the day list shows the booking as ABSENCE

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createAbsenceBookingRequest = new \TimecardClient\Model\CreateAbsenceBookingRequest(); // \TimecardClient\Model\CreateAbsenceBookingRequest
$calculate = 'calculate_example'; // string | false: variant without immediate recalculation (bulk import); balances are temporarily stale afterwards

try {
    $result = $apiInstance->createAbsenceBooking($createAbsenceBookingRequest, $calculate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->createAbsenceBooking: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createAbsenceBookingRequest** | [**\TimecardClient\Model\CreateAbsenceBookingRequest**](../Model/CreateAbsenceBookingRequest.md)|  | |
| **calculate** | **string**| false: variant without immediate recalculation (bulk import); balances are temporarily stale afterwards | [optional] |

### Return type

[**\TimecardClient\Model\CreateAbsenceBooking201Response**](../Model/CreateAbsenceBooking201Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBooking()`

```php
createBooking($createBookingRequest, $calculate): \TimecardClient\Model\CreateBooking201Response
```

Create a time or project booking

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createBookingRequest = new \TimecardClient\Model\CreateBookingRequest(); // \TimecardClient\Model\CreateBookingRequest
$calculate = 'calculate_example'; // string | false: variant without immediate recalculation (bulk import); balances are temporarily stale afterwards

try {
    $result = $apiInstance->createBooking($createBookingRequest, $calculate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->createBooking: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createBookingRequest** | [**\TimecardClient\Model\CreateBookingRequest**](../Model/CreateBookingRequest.md)|  | |
| **calculate** | **string**| false: variant without immediate recalculation (bulk import); balances are temporarily stale afterwards | [optional] |

### Return type

[**\TimecardClient\Model\CreateBooking201Response**](../Model/CreateBooking201Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBooking()`

```php
deleteBooking($personId, $bookingId, $calculate)
```

Delete a booking (for absence bookings timeCard deletes the whole period)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$personId = 56; // int
$bookingId = 56; // int
$calculate = 'calculate_example'; // string | false: variant without immediate recalculation (bulk import); balances are temporarily stale afterwards

try {
    $apiInstance->deleteBooking($personId, $bookingId, $calculate);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->deleteBooking: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **personId** | **int**|  | |
| **bookingId** | **int**|  | |
| **calculate** | **string**| false: variant without immediate recalculation (bulk import); balances are temporarily stale afterwards | [optional] |

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

## `getAbsenceOverview()`

```php
getAbsenceOverview($month): \TimecardClient\Model\GetPersonAbsenceOverview200Response
```

Absence overview of all employees for a month

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$month = 'month_example'; // string

try {
    $result = $apiInstance->getAbsenceOverview($month);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->getAbsenceOverview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **month** | **string**|  | |

### Return type

[**\TimecardClient\Model\GetPersonAbsenceOverview200Response**](../Model/GetPersonAbsenceOverview200Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBooking()`

```php
getBooking($bookingId): \TimecardClient\Model\GetBooking200Response
```

Booking details (recorded bookings only; calculated breaks and system bookings return 404)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bookingId = 56; // int

try {
    $result = $apiInstance->getBooking($bookingId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->getBooking: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bookingId** | **int**|  | |

### Return type

[**\TimecardClient\Model\GetBooking200Response**](../Model/GetBooking200Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDailyBalance()`

```php
getDailyBalance($date, $personId, $monthOverview): \TimecardClient\Model\GetDailyBalance200Response
```

Daily balance of a person

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date = 'date_example'; // string
$personId = 56; // int
$monthOverview = 'monthOverview_example'; // string

try {
    $result = $apiInstance->getDailyBalance($date, $personId, $monthOverview);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->getDailyBalance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **date** | **string**|  | |
| **personId** | **int**|  | |
| **monthOverview** | **string**|  | [optional] |

### Return type

[**\TimecardClient\Model\GetDailyBalance200Response**](../Model/GetDailyBalance200Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPersonAbsenceOverview()`

```php
getPersonAbsenceOverview($year, $personId): \TimecardClient\Model\GetPersonAbsenceOverview200Response
```

Absence overview of a person per month of a year

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$year = 56; // int
$personId = 56; // int

try {
    $result = $apiInstance->getPersonAbsenceOverview($year, $personId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->getPersonAbsenceOverview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **year** | **int**|  | |
| **personId** | **int**|  | |

### Return type

[**\TimecardClient\Model\GetPersonAbsenceOverview200Response**](../Model/GetPersonAbsenceOverview200Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPersonCalendar()`

```php
getPersonCalendar($month, $personId, $publicHolidaysOnly): \TimecardClient\Model\GetPersonCalendar200Response
```

Calendar (public holidays, absences, sickness, irregularities) for two months from the given month

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$month = 'month_example'; // string
$personId = 56; // int
$publicHolidaysOnly = 'publicHolidaysOnly_example'; // string

try {
    $result = $apiInstance->getPersonCalendar($month, $personId, $publicHolidaysOnly);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->getPersonCalendar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **month** | **string**|  | |
| **personId** | **int**|  | |
| **publicHolidaysOnly** | **string**|  | [optional] |

### Return type

[**\TimecardClient\Model\GetPersonCalendar200Response**](../Model/GetPersonCalendar200Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBookings()`

```php
listBookings($personId, $date, $from, $to): \TimecardClient\Model\ListPersonBookings200Response
```

Bookings (alias of /persons/{id}/bookings)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$personId = 56; // int
$date = 'date_example'; // string
$from = 'from_example'; // string
$to = 'to_example'; // string

try {
    $result = $apiInstance->listBookings($personId, $date, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->listBookings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **personId** | **int**|  | |
| **date** | **string**|  | [optional] |
| **from** | **string**|  | [optional] |
| **to** | **string**|  | [optional] |

### Return type

[**\TimecardClient\Model\ListPersonBookings200Response**](../Model/ListPersonBookings200Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPersonBookings()`

```php
listPersonBookings($personId, $date, $from, $to): \TimecardClient\Model\ListPersonBookings200Response
```

Bookings of a person (single day or range, max. 31 days)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$personId = 56; // int
$date = 'date_example'; // string
$from = 'from_example'; // string
$to = 'to_example'; // string

try {
    $result = $apiInstance->listPersonBookings($personId, $date, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->listPersonBookings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **personId** | **int**|  | |
| **date** | **string**|  | [optional] |
| **from** | **string**|  | [optional] |
| **to** | **string**|  | [optional] |

### Return type

[**\TimecardClient\Model\ListPersonBookings200Response**](../Model/ListPersonBookings200Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeWorkingProfileAssignment()`

```php
removeWorkingProfileAssignment($personId, $from, $to)
```

Remove the optional working time profile of a person for a period (timeCard user right 250)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$personId = 56; // int
$from = 'from_example'; // string
$to = 'to_example'; // string

try {
    $apiInstance->removeWorkingProfileAssignment($personId, $from, $to);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->removeWorkingProfileAssignment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **personId** | **int**|  | |
| **from** | **string**|  | |
| **to** | **string**|  | |

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

## `updateBooking()`

```php
updateBooking($personId, $bookingId, $updateBookingRequest): \TimecardClient\Model\GetBooking200Response
```

Update a booking (timestamp, absence type, project, work operation, comment)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerJwt
$config = TimecardClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TimecardClient\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$personId = 56; // int | person the booking belongs to
$bookingId = 56; // int
$updateBookingRequest = new \TimecardClient\Model\UpdateBookingRequest(); // \TimecardClient\Model\UpdateBookingRequest

try {
    $result = $apiInstance->updateBooking($personId, $bookingId, $updateBookingRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->updateBooking: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **personId** | **int**| person the booking belongs to | |
| **bookingId** | **int**|  | |
| **updateBookingRequest** | [**\TimecardClient\Model\UpdateBookingRequest**](../Model/UpdateBookingRequest.md)|  | |

### Return type

[**\TimecardClient\Model\GetBooking200Response**](../Model/GetBooking200Response.md)

### Authorization

[bearerJwt](../../README.md#bearerJwt)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
