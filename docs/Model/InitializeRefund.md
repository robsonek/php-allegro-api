# # InitializeRefund

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment** | [**\robsonek\phpAllegroApi\Model\RefundPayment**](RefundPayment.md) |  |
**reason** | **string** | Reason for a payment refund. |
**line_items** | [**\robsonek\phpAllegroApi\Model\RefundLineItem[]**](RefundLineItem.md) | List of order&#39;s line items which can be refunded. | [optional]
**delivery** | [**\robsonek\phpAllegroApi\Model\InitializeRefundDelivery**](InitializeRefundDelivery.md) |  | [optional]
**overpaid** | [**\robsonek\phpAllegroApi\Model\InitializeRefundOverpaid**](InitializeRefundOverpaid.md) |  | [optional]
**surcharges** | [**\robsonek\phpAllegroApi\Model\PaymentsSurcharge[]**](PaymentsSurcharge.md) | List of surcharges for payment which can be refunded. | [optional]
**additional_services** | [**\robsonek\phpAllegroApi\Model\InitializeRefundAdditionalServices**](InitializeRefundAdditionalServices.md) |  | [optional]
**seller_comment** | **string** | Sellers optional justification for refund. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
