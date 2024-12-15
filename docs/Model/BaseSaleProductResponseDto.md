# # BaseSaleProductResponseDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**name** | **string** | Name of the product. |
**description** | [**\OpenAPI\Client\Model\StandardizedDescription**](StandardizedDescription.md) |  | [optional]
**category** | [**\OpenAPI\Client\Model\ProductCategoryWithPath**](ProductCategoryWithPath.md) |  |
**images** | [**\OpenAPI\Client\Model\ImageUrl[]**](ImageUrl.md) |  | [optional]
**parameters** | [**\OpenAPI\Client\Model\ProductParameterDto[]**](ProductParameterDto.md) |  | [optional]
**is_draft** | **bool** | Flag that informs if product is waiting for resolution of basic parameters change proposal. | [optional]
**ai_co_created_content** | [**\OpenAPI\Client\Model\AiCoCreatedContent**](AiCoCreatedContent.md) |  | [optional]
**has_protected_brand** | **bool** | Flag that informs if product is a part of a protected brand&#39;s assortment and its use may be restricted. | [optional]
**product_safety** | [**\OpenAPI\Client\Model\ProductSafetyDto**](ProductSafetyDto.md) |  | [optional]
**publication** | [**\OpenAPI\Client\Model\SaleProductDtoPublication**](SaleProductDtoPublication.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
