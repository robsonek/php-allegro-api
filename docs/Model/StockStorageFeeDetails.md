# # StockStorageFeeDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fee_payable_at** | **string** | Predicted date when the fee will be charged based on quantity and average sales. Only present in case of PREDICTION status, null otherwise. | [optional]
**charged_items_quantity** | **float** | Number of items, for which storage fee was charged. For example seller might have 20 items in total, but only 3 of them are stored longer than free storage period, so the fee is applied only for them. | [optional]
**amount_gross** | **float** | Total gross amount of the charged fee. | [optional]
**currency** | **string** | Currency in which the fee was charged. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
