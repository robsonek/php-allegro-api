# # CheckoutFormLineItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Line item identifier |
**offer** | [**\OpenAPI\Client\Model\OfferReference**](OfferReference.md) |  |
**quantity** | **float** | quantity |
**original_price** | [**\OpenAPI\Client\Model\Price**](Price.md) |  |
**price** | [**\OpenAPI\Client\Model\Price**](Price.md) |  |
**reconciliation** | [**\OpenAPI\Client\Model\LineItemReconciliation**](LineItemReconciliation.md) |  | [optional]
**selected_additional_services** | [**\OpenAPI\Client\Model\CheckoutFormAdditionalService[]**](CheckoutFormAdditionalService.md) |  | [optional]
**vouchers** | [**\OpenAPI\Client\Model\LineItemVoucher[]**](LineItemVoucher.md) |  | [optional]
**tax** | [**\OpenAPI\Client\Model\CheckoutFormLineItemTax**](CheckoutFormLineItemTax.md) |  | [optional]
**bought_at** | **\DateTime** | ISO date when offer was bought | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
