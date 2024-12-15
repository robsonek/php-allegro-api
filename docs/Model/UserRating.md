# # UserRating

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**answer** | [**\robsonek\phpAllegroApi\Model\Answer**](Answer.md) |  | [optional]
**buyer** | [**\robsonek\phpAllegroApi\Model\User**](User.md) |  |
**comment** | **string** | Buyer&#39;s text comment | [optional]
**created_at** | **string** | Creation datetime in ISO 8601 format |
**edited_at** | **string** | Edition datetime in ISO 8601 format | [optional]
**excluded_from_average_rates** | **bool** | If true this rating was not included in calculating average user rates | [optional]
**excluded_from_average_rates_reason** | **string** | The reason why the rating was excluded from calculating average user rates. The message is translated based on the value of the \&quot;Accept-Language\&quot; header and exists only when the rating was excluded. | [optional]
**id** | **string** | Rating id |
**last_changed_at** | **string** | Last change (creation or latest edition) datetime in ISO 8601 format | [optional]
**order** | [**\robsonek\phpAllegroApi\Model\Order**](Order.md) |  | [optional]
**rates** | [**\robsonek\phpAllegroApi\Model\Rates**](Rates.md) |  | [optional]
**recommended** | **bool** | Whether buyer recommends the order |
**removal** | [**\robsonek\phpAllegroApi\Model\Removal**](Removal.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
