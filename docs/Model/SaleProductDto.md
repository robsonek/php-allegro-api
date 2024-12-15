# # SaleProductDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Product id. |
**name** | **string** | Product name. |
**category** | [**\robsonek\phpAllegroApi\Model\ProductCategoryWithPath**](ProductCategoryWithPath.md) |  |
**images** | [**\robsonek\phpAllegroApi\Model\ImageUrl[]**](ImageUrl.md) | List of product images. | [optional]
**parameters** | [**\robsonek\phpAllegroApi\Model\ProductParameterDto[]**](ProductParameterDto.md) | List of product parameters. | [optional]
**offer_requirements** | [**\robsonek\phpAllegroApi\Model\OfferRequirements**](OfferRequirements.md) |  | [optional]
**compatibility_list** | [**\robsonek\phpAllegroApi\Model\SaleProductCompatibilityList**](SaleProductCompatibilityList.md) |  | [optional]
**tecdoc_specification** | [**\robsonek\phpAllegroApi\Model\TecdocSpecification**](TecdocSpecification.md) |  | [optional]
**description** | [**\robsonek\phpAllegroApi\Model\StandardizedDescription**](StandardizedDescription.md) |  | [optional]
**is_draft** | **bool** | Flag that informs if product is waiting for resolution of basic parameters change proposal. | [optional]
**ai_co_created_content** | [**\robsonek\phpAllegroApi\Model\AiCoCreatedContent**](AiCoCreatedContent.md) |  | [optional]
**has_protected_brand** | **bool** | Flag that informs if product is a part of a protected brand&#39;s assortment and its use may be restricted. | [optional]
**publication** | [**\robsonek\phpAllegroApi\Model\SaleProductDtoPublication**](SaleProductDtoPublication.md) |  | [optional]
**product_safety** | [**\robsonek\phpAllegroApi\Model\ProductSafetyDto**](ProductSafetyDto.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
