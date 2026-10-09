# # CreatePersonRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**person_no** | **string** |  | [optional]
**first_name** | **string** |  |
**last_name** | **string** |  |
**sex** | **string** |  | [optional]
**title** | **string** |  | [optional]
**name_prefix** | **string** |  | [optional]
**name_affix** | **string** |  | [optional]
**birthday** | **string** |  | [optional]
**email** | **string** |  | [optional]
**department_id** | **int** |  | [optional]
**group_ids** | **int[]** |  | [optional]
**date_of_entry** | **string** |  | [optional]
**date_of_termination** | **string** |  | [optional]
**recording_begin** | **string** |  | [optional]
**is_employee** | **bool** | time recording; together with useLicence consumes an employee licence | [optional]
**use_licence** | **bool** |  | [optional]
**is_access_control_person** | **bool** |  | [optional]
**access_key** | **string** |  | [optional]
**region_id** | **int** |  | [optional]
**free_fields** | [**\TimecardClient\Model\CreatePersonRequestFreeFieldsInner[]**](CreatePersonRequestFreeFieldsInner.md) |  | [optional]
**time_recording** | [**\TimecardClient\Model\CreatePersonRequestTimeRecording**](CreatePersonRequestTimeRecording.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
