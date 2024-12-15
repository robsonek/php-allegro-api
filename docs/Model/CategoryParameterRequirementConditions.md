# # CategoryParameterRequirementConditions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parameters_with_value** | [**\OpenAPI\Client\Model\CategoryParameterWithValue[]**](CategoryParameterWithValue.md) | Condition type which requires this parameter only if each of the given other parameters has filled in one of the respective given value ids in an offer or product. Empty if no condition of this type is present. |
**parameters_without_value** | [**\OpenAPI\Client\Model\CategoryParameterWithoutValue[]**](CategoryParameterWithoutValue.md) | Condition type which requires this parameter only if each of the given other parameters has filled neither a value nor a value id in an offer or product. Empty if no condition of this type is present. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
