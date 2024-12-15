# # CategoryParameter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the parameter. | [optional]
**name** | **string** | The name of the parameter in Polish. | [optional]
**type** | **string** | The type of the parameter. Other fields in this structure may appear based on the type of the parameter. |
**required** | **bool** | Indicates whether the value of this parameter must be set in an offer. Offers without required parameters set cannot be published. See also &#x60;requiredIf&#x60;. | [optional]
**required_for_product** | **bool** | Indicates whether the value of this parameter must be set in a product. Product without required parameters set cannot be created. | [optional]
**required_if** | [**\robsonek\phpAllegroApi\Model\CategoryParameterRequirementConditions**](CategoryParameterRequirementConditions.md) |  | [optional]
**displayed_if** | [**\robsonek\phpAllegroApi\Model\CategoryParameterDisplayConditions**](CategoryParameterDisplayConditions.md) |  | [optional]
**unit** | **string** | The unit in which values of the parameter are used. May be &#x60;null&#x60;. | [optional]
**options** | [**\robsonek\phpAllegroApi\Model\CategoryParameterOptions**](CategoryParameterOptions.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
