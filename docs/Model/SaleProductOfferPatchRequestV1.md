# # SaleProductOfferPatchRequestV1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category** | **object** |  | [optional]
**parameters** | [**\robsonek\phpAllegroApi\Model\ParameterProductOfferRequest[]**](ParameterProductOfferRequest.md) |  | [optional]
**publication** | [**\robsonek\phpAllegroApi\Model\SaleProductOfferPublicationRequest**](SaleProductOfferPublicationRequest.md) |  | [optional]
**delivery** | [**\robsonek\phpAllegroApi\Model\SaleProductOfferPatchRequestV1AllOfDelivery**](SaleProductOfferPatchRequestV1AllOfDelivery.md) |  | [optional]
**after_sales_services** | [**\robsonek\phpAllegroApi\Model\AfterSalesServicesProductOfferRequest**](AfterSalesServicesProductOfferRequest.md) |  | [optional]
**size_table** | [**\robsonek\phpAllegroApi\Model\SizeTable**](SizeTable.md) |  | [optional]
**contact** | [**\robsonek\phpAllegroApi\Model\SaleProductOfferRequestBaseAllOfContact**](SaleProductOfferRequestBaseAllOfContact.md) |  | [optional]
**discounts** | [**\robsonek\phpAllegroApi\Model\DiscountsProductOfferRequest**](DiscountsProductOfferRequest.md) |  | [optional]
**name** | **string** | Name (title) of an offer. Length cannot be more than 75 characters. Read more: &lt;a href&#x3D;\&quot;../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#tytul-oferty\&quot; target&#x3D;\&quot;_blank\&quot;&gt;PL&lt;/a&gt;  / &lt;a href&#x3D;\&quot;../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#offer-title\&quot; target&#x3D;\&quot;_blank\&quot;&gt;EN&lt;/a&gt; . | [optional]
**payments** | [**\robsonek\phpAllegroApi\Model\Payments**](Payments.md) |  | [optional]
**selling_mode** | [**\robsonek\phpAllegroApi\Model\SellingMode**](SellingMode.md) |  | [optional]
**location** | [**\robsonek\phpAllegroApi\Model\Location**](Location.md) |  | [optional]
**images** | **string[]** |  | [optional]
**description** | [**\robsonek\phpAllegroApi\Model\StandardizedDescription**](StandardizedDescription.md) |  | [optional]
**external** | [**\robsonek\phpAllegroApi\Model\ExternalId**](ExternalId.md) |  | [optional]
**tax_settings** | [**\robsonek\phpAllegroApi\Model\OfferTaxSettings**](OfferTaxSettings.md) |  | [optional]
**message_to_seller_settings** | [**\robsonek\phpAllegroApi\Model\MessageToSellerSettings**](MessageToSellerSettings.md) |  | [optional]
**product_set** | [**\robsonek\phpAllegroApi\Model\SaleProductOfferPatchRequestV1AllOfProductSet[]**](SaleProductOfferPatchRequestV1AllOfProductSet.md) |  | [optional]
**b2b** | [**\robsonek\phpAllegroApi\Model\B2b**](B2b.md) |  | [optional]
**attachments** | [**\robsonek\phpAllegroApi\Model\ProductOfferAttachmentInner[]**](ProductOfferAttachmentInner.md) | An array of offer attachments. | [optional]
**fundraising_campaign** | [**\robsonek\phpAllegroApi\Model\ProductOfferFundraisingCampaignRequest**](ProductOfferFundraisingCampaignRequest.md) |  | [optional]
**additional_services** | [**\robsonek\phpAllegroApi\Model\ProductOfferAdditionalServicesRequest**](ProductOfferAdditionalServicesRequest.md) |  | [optional]
**compatibility_list** | [**\robsonek\phpAllegroApi\Model\CompatibilityListManualType**](CompatibilityListManualType.md) | For the &#x60;/sale/product-offers&#x60; resources you can send only definition of the MANUAL compatibility list. If compatibility list is provided for the product assigned to the offer, it will be used automatically. | [optional]
**stock** | [**\robsonek\phpAllegroApi\Model\SaleProductOffersRequestStock**](SaleProductOffersRequestStock.md) |  | [optional]
**additional_marketplaces** | [**array<string,\robsonek\phpAllegroApi\Model\AdditionalMarketplacesRequestValue>**](AdditionalMarketplacesRequestValue.md) | Selected information about the offer in each additional service. This field does not contain information about the base marketplace of the offer.&lt;br/&gt; Possible values of &#x60;marketplaceId&#x60; can be obtained from &#x60;GET /marketplaces&#x60; resource.&lt;/br&gt; See [Allegro foreign marketplaces](https://developer.allegro.pl/tutorials/listing-and-managing-offers-on-foreign-marketplaces-7GndGjeAATn) for more details regarding this field. | [optional]
**language** | **string** | Declared base language of the offer. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
