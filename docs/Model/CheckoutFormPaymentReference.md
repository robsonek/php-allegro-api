# # CheckoutFormPaymentReference

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Payment id |
**type** | [**\robsonek\phpAllegroApi\Model\CheckoutFormPaymentType**](CheckoutFormPaymentType.md) |  |
**provider** | [**\robsonek\phpAllegroApi\Model\CheckoutFormPaymentProvider**](CheckoutFormPaymentProvider.md) |  | [optional]
**finished_at** | **\DateTime** | Date when the event occurred | [optional]
**paid_amount** | [**\robsonek\phpAllegroApi\Model\Price**](Price.md) |  | [optional]
**reconciliation** | [**\robsonek\phpAllegroApi\Model\Price**](Price.md) |  | [optional]
**features** | **string[]** | Payment additional features:  - &#x60;ALLEGRO_PAY&#x60; - The payment was made using Allegro Pay. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
