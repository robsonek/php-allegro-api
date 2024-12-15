# # CheckoutForm

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Checkout form id |
**message_to_seller** | **string** | Message from buyer to seller | [optional]
**buyer** | [**\OpenAPI\Client\Model\CheckoutFormBuyerReference**](CheckoutFormBuyerReference.md) |  |
**payment** | [**\OpenAPI\Client\Model\CheckoutFormPaymentReference**](CheckoutFormPaymentReference.md) |  | [optional]
**status** | [**\OpenAPI\Client\Model\CheckoutFormStatus**](CheckoutFormStatus.md) |  |
**fulfillment** | [**\OpenAPI\Client\Model\CheckoutFormFulfillment**](CheckoutFormFulfillment.md) |  | [optional]
**delivery** | [**\OpenAPI\Client\Model\CheckoutFormDeliveryReference**](CheckoutFormDeliveryReference.md) |  | [optional]
**invoice** | [**\OpenAPI\Client\Model\CheckoutFormInvoiceInfo**](CheckoutFormInvoiceInfo.md) |  | [optional]
**line_items** | [**\OpenAPI\Client\Model\CheckoutFormLineItem[]**](CheckoutFormLineItem.md) |  |
**surcharges** | [**\OpenAPI\Client\Model\CheckoutFormPaymentReference[]**](CheckoutFormPaymentReference.md) |  |
**discounts** | [**\OpenAPI\Client\Model\CheckoutFormDiscount[]**](CheckoutFormDiscount.md) |  |
**note** | [**\OpenAPI\Client\Model\CheckoutFormNoteReference**](CheckoutFormNoteReference.md) |  | [optional]
**marketplace** | [**\OpenAPI\Client\Model\CheckoutFormMarketplace**](CheckoutFormMarketplace.md) |  | [optional]
**summary** | [**\OpenAPI\Client\Model\CheckoutFormSummary**](CheckoutFormSummary.md) |  |
**updated_at** | **string** | Provided in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601). | [optional]
**revision** | **string** | Checkout form revision | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
