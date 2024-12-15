# # InitializeRefund

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment** | [**\OpenAPI\Client\Model\RefundPayment**](RefundPayment.md) |  |
**reason** | **string** | Reason for a payment refund. |
**line_items** | [**\OpenAPI\Client\Model\RefundLineItem[]**](RefundLineItem.md) | List of order&#39;s line items which can be refunded. | [optional]
**delivery** | [**\OpenAPI\Client\Model\InitializeRefundDelivery**](InitializeRefundDelivery.md) |  | [optional]
**overpaid** | [**\OpenAPI\Client\Model\InitializeRefundOverpaid**](InitializeRefundOverpaid.md) |  | [optional]
**surcharges** | [**\OpenAPI\Client\Model\PaymentsSurcharge[]**](PaymentsSurcharge.md) | List of surcharges for payment which can be refunded. | [optional]
**additional_services** | [**\OpenAPI\Client\Model\InitializeRefundAdditionalServices**](InitializeRefundAdditionalServices.md) |  | [optional]
**seller_comment** | **string** | Sellers optional justification for refund. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
