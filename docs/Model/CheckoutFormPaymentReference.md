# # CheckoutFormPaymentReference

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Payment id |
**type** | [**\OpenAPI\Client\Model\CheckoutFormPaymentType**](CheckoutFormPaymentType.md) |  |
**provider** | [**\OpenAPI\Client\Model\CheckoutFormPaymentProvider**](CheckoutFormPaymentProvider.md) |  | [optional]
**finished_at** | **\DateTime** | Date when the event occurred | [optional]
**paid_amount** | [**\OpenAPI\Client\Model\Price**](Price.md) |  | [optional]
**reconciliation** | [**\OpenAPI\Client\Model\Price**](Price.md) |  | [optional]
**features** | **string[]** | Payment additional features:  - &#x60;ALLEGRO_PAY&#x60; - The payment was made using Allegro Pay. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
