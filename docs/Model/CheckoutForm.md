# # CheckoutForm

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Checkout form id |
**message_to_seller** | **string** | Message from buyer to seller | [optional]
**buyer** | [**\robsonek\phpAllegroApi\Model\CheckoutFormBuyerReference**](CheckoutFormBuyerReference.md) |  |
**payment** | [**\robsonek\phpAllegroApi\Model\CheckoutFormPaymentReference**](CheckoutFormPaymentReference.md) |  | [optional]
**status** | [**\robsonek\phpAllegroApi\Model\CheckoutFormStatus**](CheckoutFormStatus.md) |  |
**fulfillment** | [**\robsonek\phpAllegroApi\Model\CheckoutFormFulfillment**](CheckoutFormFulfillment.md) |  | [optional]
**delivery** | [**\robsonek\phpAllegroApi\Model\CheckoutFormDeliveryReference**](CheckoutFormDeliveryReference.md) |  | [optional]
**invoice** | [**\robsonek\phpAllegroApi\Model\CheckoutFormInvoiceInfo**](CheckoutFormInvoiceInfo.md) |  | [optional]
**line_items** | [**\robsonek\phpAllegroApi\Model\CheckoutFormLineItem[]**](CheckoutFormLineItem.md) |  |
**surcharges** | [**\robsonek\phpAllegroApi\Model\CheckoutFormPaymentReference[]**](CheckoutFormPaymentReference.md) |  |
**discounts** | [**\robsonek\phpAllegroApi\Model\CheckoutFormDiscount[]**](CheckoutFormDiscount.md) |  |
**note** | [**\robsonek\phpAllegroApi\Model\CheckoutFormNoteReference**](CheckoutFormNoteReference.md) |  | [optional]
**marketplace** | [**\robsonek\phpAllegroApi\Model\CheckoutFormMarketplace**](CheckoutFormMarketplace.md) |  | [optional]
**summary** | [**\robsonek\phpAllegroApi\Model\CheckoutFormSummary**](CheckoutFormSummary.md) |  |
**updated_at** | **string** | Provided in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601). | [optional]
**revision** | **string** | Checkout form revision | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
