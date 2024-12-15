# # ProductChangeProposalDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Product change proposal id | [optional]
**name** | [**\robsonek\phpAllegroApi\Model\ProductNameProposal**](ProductNameProposal.md) |  | [optional]
**category** | [**\robsonek\phpAllegroApi\Model\ProductCategoryProposal**](ProductCategoryProposal.md) |  | [optional]
**note** | **string** | Note about product changes proposal. | [optional]
**images** | [**\robsonek\phpAllegroApi\Model\ProductImageProposal[]**](ProductImageProposal.md) | List of proposed image change statuses. | [optional]
**parameters** | [**\robsonek\phpAllegroApi\Model\ProductParameterProposal[]**](ProductParameterProposal.md) | List of proposed product parameter change statuses. | [optional]
**notify_via_email_after_verification** | **bool** | Receive an email notification after product changes proposal resolution. | [optional]
**language** | **string** | Language of provided suggestion data. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
