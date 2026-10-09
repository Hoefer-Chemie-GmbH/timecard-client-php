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
assignWorkingProfile($assign_working_profile_request): \TimecardClient\Model\AssignWorkingProfile201Response
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
$assign_working_profile_request = new \TimecardClient\Model\AssignWorkingProfileRequest(); // \TimecardClient\Model\AssignWorkingProfileRequest

try {
    $result = $apiInstance->assignWorkingProfile($assign_working_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->assignWorkingProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **assign_working_profile_request** | [**\TimecardClient\Model\AssignWorkingProfileRequest**](../Model/AssignWorkingProfileRequest.md)|  | |

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
createAbsenceBooking($create_absence_booking_request, $calculate): \TimecardClient\Model\CreateAbsenceBooking201Response
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
$create_absence_booking_request = new \TimecardClient\Model\CreateAbsenceBookingRequest(); // \TimecardClient\Model\CreateAbsenceBookingRequest
$calculate = 'calculate_example'; // string | false: variant without immediate recalculation (bulk import); balances are temporarily stale afterwards

try {
    $result = $apiInstance->createAbsenceBooking($create_absence_booking_request, $calculate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->createAbsenceBooking: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_absence_booking_request** | [**\TimecardClient\Model\CreateAbsenceBookingRequest**](../Model/CreateAbsenceBookingRequest.md)|  | |
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
createBooking($create_booking_request, $calculate): \TimecardClient\Model\CreateBooking201Response
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
$create_booking_request = new \TimecardClient\Model\CreateBookingRequest(); // \TimecardClient\Model\CreateBookingRequest
$calculate = 'calculate_example'; // string | false: variant without immediate recalculation (bulk import); balances are temporarily stale afterwards

try {
    $result = $apiInstance->createBooking($create_booking_request, $calculate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->createBooking: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_booking_request** | [**\TimecardClient\Model\CreateBookingRequest**](../Model/CreateBookingRequest.md)|  | |
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
deleteBooking($person_id, $booking_id, $calculate)
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
$person_id = 56; // int
$booking_id = 56; // int
$calculate = 'calculate_example'; // string | false: variant without immediate recalculation (bulk import); balances are temporarily stale afterwards

try {
    $apiInstance->deleteBooking($person_id, $booking_id, $calculate);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->deleteBooking: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**|  | |
| **booking_id** | **int**|  | |
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
getBooking($booking_id): \TimecardClient\Model\GetBooking200Response
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
$booking_id = 56; // int

try {
    $result = $apiInstance->getBooking($booking_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->getBooking: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **booking_id** | **int**|  | |

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
getDailyBalance($date, $person_id, $month_overview): \TimecardClient\Model\GetDailyBalance200Response
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
$person_id = 56; // int
$month_overview = 'month_overview_example'; // string

try {
    $result = $apiInstance->getDailyBalance($date, $person_id, $month_overview);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->getDailyBalance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **date** | **string**|  | |
| **person_id** | **int**|  | |
| **month_overview** | **string**|  | [optional] |

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
getPersonAbsenceOverview($year, $person_id): \TimecardClient\Model\GetPersonAbsenceOverview200Response
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
$person_id = 56; // int

try {
    $result = $apiInstance->getPersonAbsenceOverview($year, $person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->getPersonAbsenceOverview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **year** | **int**|  | |
| **person_id** | **int**|  | |

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
getPersonCalendar($month, $person_id, $public_holidays_only): \TimecardClient\Model\GetPersonCalendar200Response
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
$person_id = 56; // int
$public_holidays_only = 'public_holidays_only_example'; // string

try {
    $result = $apiInstance->getPersonCalendar($month, $person_id, $public_holidays_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->getPersonCalendar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **month** | **string**|  | |
| **person_id** | **int**|  | |
| **public_holidays_only** | **string**|  | [optional] |

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
listBookings($person_id, $date, $from, $to): \TimecardClient\Model\ListPersonBookings200Response
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
$person_id = 56; // int
$date = 'date_example'; // string
$from = 'from_example'; // string
$to = 'to_example'; // string

try {
    $result = $apiInstance->listBookings($person_id, $date, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->listBookings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**|  | |
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
listPersonBookings($person_id, $date, $from, $to): \TimecardClient\Model\ListPersonBookings200Response
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
$person_id = 56; // int
$date = 'date_example'; // string
$from = 'from_example'; // string
$to = 'to_example'; // string

try {
    $result = $apiInstance->listPersonBookings($person_id, $date, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->listPersonBookings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**|  | |
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
removeWorkingProfileAssignment($person_id, $from, $to)
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
$person_id = 56; // int
$from = 'from_example'; // string
$to = 'to_example'; // string

try {
    $apiInstance->removeWorkingProfileAssignment($person_id, $from, $to);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->removeWorkingProfileAssignment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**|  | |
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
updateBooking($person_id, $booking_id, $update_booking_request): \TimecardClient\Model\GetBooking200Response
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
$person_id = 56; // int | person the booking belongs to
$booking_id = 56; // int
$update_booking_request = new \TimecardClient\Model\UpdateBookingRequest(); // \TimecardClient\Model\UpdateBookingRequest

try {
    $result = $apiInstance->updateBooking($person_id, $booking_id, $update_booking_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->updateBooking: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| person the booking belongs to | |
| **booking_id** | **int**|  | |
| **update_booking_request** | [**\TimecardClient\Model\UpdateBookingRequest**](../Model/UpdateBookingRequest.md)|  | |

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
