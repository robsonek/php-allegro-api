# # Dispute

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Identifier of the dispute |
**subject** | [**\robsonek\phpAllegroApi\Model\Subject**](Subject.md) |  |
**status** | **string** |  |
**messages_status** | **string** |  |
**buyer** | [**\robsonek\phpAllegroApi\Model\DisputeUser**](DisputeUser.md) |  |
**checkout_form** | [**\robsonek\phpAllegroApi\Model\DisputeCheckoutForm**](DisputeCheckoutForm.md) |  |
**message** | [**\robsonek\phpAllegroApi\Model\DisputeFirstMessage**](DisputeFirstMessage.md) |  |
**messages_count** | **int** |  |
**opened_date** | **\DateTime** | Recent date when the dispute has been opened or reopened | [optional]
**last_message_creation_date** | **\DateTime** |  |
**claim** | [**\robsonek\phpAllegroApi\Model\DisputeClaim**](DisputeClaim.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
