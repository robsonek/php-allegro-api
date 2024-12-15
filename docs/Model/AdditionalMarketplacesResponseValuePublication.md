# # AdditionalMarketplacesResponseValuePublication

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**state** | **string** | Possible values:&lt;/br&gt; - &#x60;APPROVED&#x60; - the offer is visible in the given additional marketplace if it is active.&lt;/br&gt; - &#x60;REFUSED&#x60; - the offer or the seller does not meet the conditions required to display the offer in the given additional marketplace.&lt;/br&gt; - &#x60;IN_PROGRESS&#x60; - the process of qualifying the offer visibility in a given additional service is in progress.&lt;/br&gt; - &#x60;NOT_REQUESTED&#x60; - the seller has not indicated the intention of visibility in the given additional service.&lt;/br&gt; - &#x60;PENDING&#x60; - the seller has indicated the intention of visibility on a given additional marketplace, but the qualification process has not started, for example, due to offer status (only active offers are subject to the qualification process). | [optional]
**refusal_reasons** | [**\OpenAPI\Client\Model\AdditionalMarketplacesRefusalReasonResponse[]**](AdditionalMarketplacesRefusalReasonResponse.md) | Reasons for marketplace publication refusal. Empty list for not refused marketplaces. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
