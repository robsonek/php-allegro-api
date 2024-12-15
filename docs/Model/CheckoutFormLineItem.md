# # CheckoutFormLineItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Line item identifier |
**offer** | [**\robsonek\phpAllegroApi\Model\OfferReference**](OfferReference.md) |  |
**quantity** | **float** | quantity |
**original_price** | [**\robsonek\phpAllegroApi\Model\Price**](Price.md) |  |
**price** | [**\robsonek\phpAllegroApi\Model\Price**](Price.md) |  |
**reconciliation** | [**\robsonek\phpAllegroApi\Model\LineItemReconciliation**](LineItemReconciliation.md) |  | [optional]
**selected_additional_services** | [**\robsonek\phpAllegroApi\Model\CheckoutFormAdditionalService[]**](CheckoutFormAdditionalService.md) |  | [optional]
**vouchers** | [**\robsonek\phpAllegroApi\Model\LineItemVoucher[]**](LineItemVoucher.md) |  | [optional]
**tax** | [**\robsonek\phpAllegroApi\Model\CheckoutFormLineItemTax**](CheckoutFormLineItemTax.md) |  | [optional]
**bought_at** | **\DateTime** | ISO date when offer was bought | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
