# # SaleProductOfferResponseV1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name (title) of an offer. Length cannot be more than 75 characters. Read more: &lt;a href&#x3D;\&quot;../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#tytul-oferty\&quot; target&#x3D;\&quot;_blank\&quot;&gt;PL&lt;/a&gt;  / &lt;a href&#x3D;\&quot;../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#offer-title\&quot; target&#x3D;\&quot;_blank\&quot;&gt;EN&lt;/a&gt; . | [optional]
**payments** | [**\OpenAPI\Client\Model\Payments**](Payments.md) |  | [optional]
**selling_mode** | [**\OpenAPI\Client\Model\SellingMode**](SellingMode.md) |  | [optional]
**location** | [**\OpenAPI\Client\Model\Location**](Location.md) |  | [optional]
**images** | **string[]** |  | [optional]
**description** | [**\OpenAPI\Client\Model\StandardizedDescription**](StandardizedDescription.md) |  | [optional]
**external** | [**\OpenAPI\Client\Model\ExternalId**](ExternalId.md) |  | [optional]
**size_table** | [**\OpenAPI\Client\Model\SizeTable**](SizeTable.md) |  | [optional]
**tax_settings** | [**\OpenAPI\Client\Model\OfferTaxSettings**](OfferTaxSettings.md) |  | [optional]
**message_to_seller_settings** | [**\OpenAPI\Client\Model\MessageToSellerSettings**](MessageToSellerSettings.md) |  | [optional]
**id** | **string** |  | [optional]
**product_set** | [**\OpenAPI\Client\Model\SaleProductOfferResponseV1AllOfProductSet[]**](SaleProductOfferResponseV1AllOfProductSet.md) |  | [optional]
**category** | [**\OpenAPI\Client\Model\Category**](Category.md) | The category to which the offer is listed for sale. | [optional]
**attachments** | [**\OpenAPI\Client\Model\ProductOfferAttachmentInner[]**](ProductOfferAttachmentInner.md) | An array of offer attachments. | [optional]
**fundraising_campaign** | [**\OpenAPI\Client\Model\ProductOfferFundraisingCampaignResponse**](ProductOfferFundraisingCampaignResponse.md) |  | [optional]
**additional_services** | [**\OpenAPI\Client\Model\ProductOfferAdditionalServicesResponse**](ProductOfferAdditionalServicesResponse.md) |  | [optional]
**delivery** | [**\OpenAPI\Client\Model\DeliveryProductOfferResponse**](DeliveryProductOfferResponse.md) |  | [optional]
**publication** | [**\OpenAPI\Client\Model\SaleProductOfferPublicationResponse**](SaleProductOfferPublicationResponse.md) |  | [optional]
**additional_marketplaces** | [**array<string,\OpenAPI\Client\Model\AdditionalMarketplacesResponseValue>**](AdditionalMarketplacesResponseValue.md) | Selected information about the offer in each additional service. This field does not contain information about the base marketplace of the offer. You will find all available marketplaces here. Even if the seller does not want the offer to be visible in the additional service, we will return it in response. | [optional]
**b2b** | [**\OpenAPI\Client\Model\B2b**](B2b.md) |  | [optional]
**compatibility_list** | [**\OpenAPI\Client\Model\CompatibilityListProductOfferResponse**](CompatibilityListProductOfferResponse.md) |  | [optional]
**language** | **string** | Declared base language of the offer. | [optional]
**validation** | [**\OpenAPI\Client\Model\Validation**](Validation.md) |  | [optional]
**warnings** | [**\OpenAPI\Client\Model\SaleProductOfferResponseV1AllOfWarnings**](SaleProductOfferResponseV1AllOfWarnings.md) |  | [optional]
**after_sales_services** | [**\OpenAPI\Client\Model\AfterSalesServices**](AfterSalesServices.md) |  | [optional]
**discounts** | [**\OpenAPI\Client\Model\DiscountsProductOfferResponse**](DiscountsProductOfferResponse.md) |  | [optional]
**stock** | [**\OpenAPI\Client\Model\Stock**](Stock.md) |  | [optional]
**parameters** | [**\OpenAPI\Client\Model\ParameterProductOfferResponse[]**](ParameterProductOfferResponse.md) | List of offer parameters. | [optional]
**contact** | [**\OpenAPI\Client\Model\Contact**](Contact.md) | Identifier of contact data for sales format ADVERTISEMENT (classified ad); retrieve it via GET /sale/offer-contacts. | [optional]
**created_at** | **\DateTime** | Creation date: Format (ISO 8601) - yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ. Cannot be modified. | [optional]
**updated_at** | **\DateTime** | Last update date: Format (ISO 8601) - yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ. Cannot be modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
