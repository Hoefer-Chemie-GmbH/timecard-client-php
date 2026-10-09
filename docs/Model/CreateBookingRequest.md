# # CreateBookingRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**person_id** | **int** |  |
**type** | **string** |  |
**timestamp** | **\DateTime** | RFC 3339 with offset; without it timeCard books the server time | [optional]
**absence_type_id** | **int** | only for CLOCK_OUT_WITH_REASON and CLOCK_IN_WITH_REASON | [optional]
**project_id** | **int** | only for PROJECT_START | [optional]
**work_operation_id** | **int** | only for PROJECT_START | [optional]
**comment** | **string** |  | [optional]
**location** | [**\TimecardClient\Model\CreateBookingRequestLocation**](CreateBookingRequestLocation.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
