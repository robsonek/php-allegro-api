# # ProductChangeProposalRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Proposed product name. |
**note** | **string** | Note about product changes proposal. | [optional]
**category** | [**\robsonek\phpAllegroApi\Model\Category**](Category.md) | Product category |
**images** | [**\robsonek\phpAllegroApi\Model\ImageUrl[]**](ImageUrl.md) | List of product images. At least one image is required. |
**parameters** | [**\robsonek\phpAllegroApi\Model\ProductParameter[]**](ProductParameter.md) | List of product parameters. |
**notify_via_email_after_verification** | **bool** | Receive an email notification after product changes proposal resolution. | [optional]
**language** | **string** | Language of provided proposal data. | [default to 'pl-PL']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
