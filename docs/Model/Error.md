# # Error

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | The error code. You can use this code when contacting us about any problems with our systems. | [optional]
**details** | **string** | For some cases, this field provides more details regarding the error. This field can be empty. | [optional]
**message** | **string** | A message directed to the developer of the program. This message will always be in English and give you some more technical details on what exactly has happened. | [optional]
**path** | **string** | This field will point to a specific field in object if the error is connected to a problem with such specific field. This field can be empty | [optional]
**user_message** | **string** | The message that can be presented directly to your user. It will not contain any technical information. This message is translated based on the value of the \&quot;Accept-Language\&quot; header. By default message in English is returned. | [optional]
**metadata** | **array<string,string>** | Additional technical properties of this error. Set of possible keys depends on the specific error. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
