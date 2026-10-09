# # Problem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | problem type; its last path segment names it, e.g. &#x60;validation&#x60;, &#x60;unauthorized&#x60;, &#x60;rate-limited&#x60;, &#x60;upstream&#x60; |
**title** | **string** | short summary of the problem type |
**status** | **int** | HTTP status code |
**detail** | **string** | explanation of this occurrence | [optional]
**instance** | **string** | &#x60;urn:request:&lt;id&gt;&#x60;; the id is also sent as the response header &#x60;X-Request-Id&#x60; |
**errors** | [**\TimecardClient\Model\ProblemErrorsInner[]**](ProblemErrorsInner.md) | schema violations (type &#x60;validation&#x60;) | [optional]
**upstream** | **object** | the call to the time recording system that failed, with its status, code and message | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
