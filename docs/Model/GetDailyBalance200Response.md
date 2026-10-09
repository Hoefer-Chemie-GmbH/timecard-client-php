# # GetDailyBalance200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**personId** | **int** |  |
**date** | **string** |  |
**available** | **bool** |  |
**isToday** | **bool** |  |
**isBeforeRecordingBegin** | **bool** |  |
**isMonthClosed** | **bool** |  |
**bookingTimeRange** | [**\TimecardClient\Model\GetDailyBalance200ResponseBookingTimeRange**](GetDailyBalance200ResponseBookingTimeRange.md) |  |
**firstClockIn** | **string** |  |
**lastClockOut** | **string** |  |
**targetTimeSeconds** | **int** |  |
**workingTimeSeconds** | **int** |  |
**presenceTimeSeconds** | **int** |  |
**breakTimeSeconds** | **int** |  |
**interruptionSeconds** | **int** |  |
**inconsistent** | **bool** |  |
**inconsistentReason** | **string** |  |
**coreTimeViolation** | **bool** |  |
**missingBookings** | **bool** |  |
**permittedTimeViolation** | **bool** |  |
**autoBreaksIgnored** | **bool** |  |
**evaluationChanged** | [**\TimecardClient\Model\GetDailyBalance200ResponseEvaluationChanged**](GetDailyBalance200ResponseEvaluationChanged.md) |  |
**holidayBan** | **bool** |  |
**hasOpenCorrectionRequest** | **bool** |  |
**workingProfile** | [**\TimecardClient\Model\GetDailyBalance200ResponseWorkingProfile**](GetDailyBalance200ResponseWorkingProfile.md) |  |
**notifications** | **string[]** |  |
**absences** | [**\TimecardClient\Model\GetDailyBalance200ResponseAbsencesInner[]**](GetDailyBalance200ResponseAbsencesInner.md) |  |
**projects** | [**\TimecardClient\Model\GetDailyBalance200ResponseProjectsInner[]**](GetDailyBalance200ResponseProjectsInner.md) |  |
**carryOvers** | [**\TimecardClient\Model\GetDailyBalance200ResponseCarryOversInner[]**](GetDailyBalance200ResponseCarryOversInner.md) |  |
**calculations** | [**\TimecardClient\Model\GetDailyBalance200ResponseCalculationsInner[]**](GetDailyBalance200ResponseCalculationsInner.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
