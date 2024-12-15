# # CommandTask

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**field** | **string** | Modified field as JSON path. | [optional]
**message** | **string** | General fail reason. You should check the errors structure to get more detailed information of the encountered errors. | [optional]
**offer** | [**\OpenAPI\Client\Model\OfferId**](OfferId.md) |  | [optional]
**status** | **string** | Available statuses: NEW, SUCCESS, FAIL | [optional]
**errors** | [**\OpenAPI\Client\Model\Error[]**](Error.md) | The list of error objects explaining the problems with command processing for the given offer. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
