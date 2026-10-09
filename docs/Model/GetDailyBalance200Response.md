# # GetDailyBalance200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**person_id** | **int** |  |
**date** | **string** |  |
**available** | **bool** |  |
**is_today** | **bool** |  |
**is_before_recording_begin** | **bool** |  |
**is_month_closed** | **bool** |  |
**booking_time_range** | [**\TimecardClient\Model\GetDailyBalance200ResponseBookingTimeRange**](GetDailyBalance200ResponseBookingTimeRange.md) |  |
**first_clock_in** | **string** |  |
**last_clock_out** | **string** |  |
**target_time_seconds** | **int** |  |
**working_time_seconds** | **int** |  |
**presence_time_seconds** | **int** |  |
**break_time_seconds** | **int** |  |
**interruption_seconds** | **int** |  |
**inconsistent** | **bool** |  |
**inconsistent_reason** | **string** |  |
**core_time_violation** | **bool** |  |
**missing_bookings** | **bool** |  |
**permitted_time_violation** | **bool** |  |
**auto_breaks_ignored** | **bool** |  |
**evaluation_changed** | [**\TimecardClient\Model\GetDailyBalance200ResponseEvaluationChanged**](GetDailyBalance200ResponseEvaluationChanged.md) |  |
**holiday_ban** | **bool** |  |
**has_open_correction_request** | **bool** |  |
**working_profile** | [**\TimecardClient\Model\GetDailyBalance200ResponseWorkingProfile**](GetDailyBalance200ResponseWorkingProfile.md) |  |
**notifications** | **string[]** |  |
**absences** | [**\TimecardClient\Model\GetDailyBalance200ResponseAbsencesInner[]**](GetDailyBalance200ResponseAbsencesInner.md) |  |
**projects** | [**\TimecardClient\Model\GetDailyBalance200ResponseProjectsInner[]**](GetDailyBalance200ResponseProjectsInner.md) |  |
**carry_overs** | [**\TimecardClient\Model\GetDailyBalance200ResponseCarryOversInner[]**](GetDailyBalance200ResponseCarryOversInner.md) |  |
**calculations** | [**\TimecardClient\Model\GetDailyBalance200ResponseCalculationsInner[]**](GetDailyBalance200ResponseCalculationsInner.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
