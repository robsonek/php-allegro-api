# # SaleProductOfferRequestV1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category** | **object** |  | [optional]
**parameters** | [**\OpenAPI\Client\Model\ParameterProductOfferRequest[]**](ParameterProductOfferRequest.md) |  | [optional]
**publication** | [**\OpenAPI\Client\Model\SaleProductOfferPublicationRequest**](SaleProductOfferPublicationRequest.md) |  | [optional]
**delivery** | [**\OpenAPI\Client\Model\SaleProductOfferRequestV1AllOfDelivery**](SaleProductOfferRequestV1AllOfDelivery.md) |  | [optional]
**after_sales_services** | [**\OpenAPI\Client\Model\AfterSalesServicesProductOfferRequest**](AfterSalesServicesProductOfferRequest.md) |  | [optional]
**size_table** | [**\OpenAPI\Client\Model\SizeTable**](SizeTable.md) |  | [optional]
**contact** | [**\OpenAPI\Client\Model\SaleProductOfferRequestBaseAllOfContact**](SaleProductOfferRequestBaseAllOfContact.md) |  | [optional]
**discounts** | [**\OpenAPI\Client\Model\DiscountsProductOfferRequest**](DiscountsProductOfferRequest.md) |  | [optional]
**name** | **string** | Name (title) of an offer. Length cannot be more than 75 characters. Read more: &lt;a href&#x3D;\&quot;../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#tytul-oferty\&quot; target&#x3D;\&quot;_blank\&quot;&gt;PL&lt;/a&gt;  / &lt;a href&#x3D;\&quot;../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#offer-title\&quot; target&#x3D;\&quot;_blank\&quot;&gt;EN&lt;/a&gt; . | [optional]
**payments** | [**\OpenAPI\Client\Model\Payments**](Payments.md) |  | [optional]
**selling_mode** | [**\OpenAPI\Client\Model\SellingMode**](SellingMode.md) |  | [optional]
**location** | [**\OpenAPI\Client\Model\Location**](Location.md) |  | [optional]
**images** | **string[]** |  | [optional]
**description** | [**\OpenAPI\Client\Model\StandardizedDescription**](StandardizedDescription.md) |  | [optional]
**external** | [**\OpenAPI\Client\Model\ExternalId**](ExternalId.md) |  | [optional]
**tax_settings** | [**\OpenAPI\Client\Model\OfferTaxSettings**](OfferTaxSettings.md) |  | [optional]
**message_to_seller_settings** | [**\OpenAPI\Client\Model\MessageToSellerSettings**](MessageToSellerSettings.md) |  | [optional]
**product_set** | [**\OpenAPI\Client\Model\SaleProductOfferRequestV1AllOfProductSet[]**](SaleProductOfferRequestV1AllOfProductSet.md) |  | [optional]
**b2b** | [**\OpenAPI\Client\Model\B2b**](B2b.md) |  | [optional]
**attachments** | [**\OpenAPI\Client\Model\ProductOfferAttachmentInner[]**](ProductOfferAttachmentInner.md) | An array of offer attachments. | [optional]
**fundraising_campaign** | [**\OpenAPI\Client\Model\ProductOfferFundraisingCampaignRequest**](ProductOfferFundraisingCampaignRequest.md) |  | [optional]
**additional_services** | [**\OpenAPI\Client\Model\ProductOfferAdditionalServicesRequest**](ProductOfferAdditionalServicesRequest.md) |  | [optional]
**stock** | [**\OpenAPI\Client\Model\SaleProductOffersRequestStock**](SaleProductOffersRequestStock.md) |  |
**additional_marketplaces** | [**array<string,\OpenAPI\Client\Model\AdditionalMarketplacesRequestValue>**](AdditionalMarketplacesRequestValue.md) | Selected information about the offer in each additional service. This field does not contain information about the base marketplace of the offer.&lt;br/&gt; Possible values of &#x60;marketplaceId&#x60; can be obtained from &#x60;GET /marketplaces&#x60; resource.&lt;/br&gt; See [Allegro foreign marketplaces](https://developer.allegro.pl/tutorials/listing-and-managing-offers-on-foreign-marketplaces-7GndGjeAATn) for more details regarding this field. | [optional]
**compatibility_list** | [**\OpenAPI\Client\Model\CompatibilityListManualType**](CompatibilityListManualType.md) | For the &#x60;/sale/product-offers&#x60; resources you can send only definition of the MANUAL compatibility list. If compatibility list is provided for the product assigned to the offer, it will be used automatically. | [optional]
**language** | **string** | Declared base language of the offer. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
