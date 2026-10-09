# # CreateAbsenceBookingRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**person_ids** | **int[]** |  |
**absence_type_id** | **int** |  |
**from** | **string** |  |
**to** | **string** |  |
**weekdays** | **string[]** |  | [optional] [default to [["MONDAY","TUESDAY","WEDNESDAY","THURSDAY","FRIDAY"]]]
**include_free_days** | **bool** | also book on days off according to the working time profile | [optional] [default to false]
**half_day** | **bool** |  | [optional] [default to false]
**percent** | **int** | share of the day in percent; mutually exclusive with halfDay | [optional]
**start_time** | **string** |  | [optional]
**comment** | **string** |  | [optional] [default to '']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
