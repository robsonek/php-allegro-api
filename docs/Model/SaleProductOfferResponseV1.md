# # SaleProductOfferResponseV1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name (title) of an offer. Length cannot be more than 75 characters. Read more: &lt;a href&#x3D;\&quot;../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#tytul-oferty\&quot; target&#x3D;\&quot;_blank\&quot;&gt;PL&lt;/a&gt;  / &lt;a href&#x3D;\&quot;../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#offer-title\&quot; target&#x3D;\&quot;_blank\&quot;&gt;EN&lt;/a&gt; . | [optional]
**payments** | [**\robsonek\phpAllegroApi\Model\Payments**](Payments.md) |  | [optional]
**selling_mode** | [**\robsonek\phpAllegroApi\Model\SellingMode**](SellingMode.md) |  | [optional]
**location** | [**\robsonek\phpAllegroApi\Model\Location**](Location.md) |  | [optional]
**images** | **string[]** |  | [optional]
**description** | [**\robsonek\phpAllegroApi\Model\StandardizedDescription**](StandardizedDescription.md) |  | [optional]
**external** | [**\robsonek\phpAllegroApi\Model\ExternalId**](ExternalId.md) |  | [optional]
**size_table** | [**\robsonek\phpAllegroApi\Model\SizeTable**](SizeTable.md) |  | [optional]
**tax_settings** | [**\robsonek\phpAllegroApi\Model\OfferTaxSettings**](OfferTaxSettings.md) |  | [optional]
**message_to_seller_settings** | [**\robsonek\phpAllegroApi\Model\MessageToSellerSettings**](MessageToSellerSettings.md) |  | [optional]
**id** | **string** |  | [optional]
**product_set** | [**\robsonek\phpAllegroApi\Model\SaleProductOfferResponseV1AllOfProductSet[]**](SaleProductOfferResponseV1AllOfProductSet.md) |  | [optional]
**category** | [**\robsonek\phpAllegroApi\Model\Category**](Category.md) | The category to which the offer is listed for sale. | [optional]
**attachments** | [**\robsonek\phpAllegroApi\Model\ProductOfferAttachmentInner[]**](ProductOfferAttachmentInner.md) | An array of offer attachments. | [optional]
**fundraising_campaign** | [**\robsonek\phpAllegroApi\Model\ProductOfferFundraisingCampaignResponse**](ProductOfferFundraisingCampaignResponse.md) |  | [optional]
**additional_services** | [**\robsonek\phpAllegroApi\Model\ProductOfferAdditionalServicesResponse**](ProductOfferAdditionalServicesResponse.md) |  | [optional]
**delivery** | [**\robsonek\phpAllegroApi\Model\DeliveryProductOfferResponse**](DeliveryProductOfferResponse.md) |  | [optional]
**publication** | [**\robsonek\phpAllegroApi\Model\SaleProductOfferPublicationResponse**](SaleProductOfferPublicationResponse.md) |  | [optional]
**additional_marketplaces** | [**array<string,\robsonek\phpAllegroApi\Model\AdditionalMarketplacesResponseValue>**](AdditionalMarketplacesResponseValue.md) | Selected information about the offer in each additional service. This field does not contain information about the base marketplace of the offer. You will find all available marketplaces here. Even if the seller does not want the offer to be visible in the additional service, we will return it in response. | [optional]
**b2b** | [**\robsonek\phpAllegroApi\Model\B2b**](B2b.md) |  | [optional]
**compatibility_list** | [**\robsonek\phpAllegroApi\Model\CompatibilityListProductOfferResponse**](CompatibilityListProductOfferResponse.md) |  | [optional]
**language** | **string** | Declared base language of the offer. | [optional]
**validation** | [**\robsonek\phpAllegroApi\Model\Validation**](Validation.md) |  | [optional]
**warnings** | [**\robsonek\phpAllegroApi\Model\SaleProductOfferResponseV1AllOfWarnings**](SaleProductOfferResponseV1AllOfWarnings.md) |  | [optional]
**after_sales_services** | [**\robsonek\phpAllegroApi\Model\AfterSalesServices**](AfterSalesServices.md) |  | [optional]
**discounts** | [**\robsonek\phpAllegroApi\Model\DiscountsProductOfferResponse**](DiscountsProductOfferResponse.md) |  | [optional]
**stock** | [**\robsonek\phpAllegroApi\Model\Stock**](Stock.md) |  | [optional]
**parameters** | [**\robsonek\phpAllegroApi\Model\ParameterProductOfferResponse[]**](ParameterProductOfferResponse.md) | List of offer parameters. | [optional]
**contact** | [**\robsonek\phpAllegroApi\Model\Contact**](Contact.md) | Identifier of contact data for sales format ADVERTISEMENT (classified ad); retrieve it via GET /sale/offer-contacts. | [optional]
**created_at** | **\DateTime** | Creation date: Format (ISO 8601) - yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ. Cannot be modified. | [optional]
**updated_at** | **\DateTime** | Last update date: Format (ISO 8601) - yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ. Cannot be modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
