# # ShipmentCreateRequestDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**delivery_method_id** | **string** | Id of delivery method, chosen by buyer in order. |
**credentials_id** | **string** | ID of merchant agreement, registered in WZA. Value should be read from /shipment-management/delivery-services. For Allegro Standard methods, this field should be null. | [optional]
**sender** | [**\OpenAPI\Client\Model\SenderAddressDto**](SenderAddressDto.md) |  |
**receiver** | [**\OpenAPI\Client\Model\ReceiverAddressDto**](ReceiverAddressDto.md) |  |
**pickup** | [**\OpenAPI\Client\Model\PickupAddressDto**](PickupAddressDto.md) |  | [optional]
**reference_number** | **string** | Shipment identifier in own system. Example: &#x60;Ordering number&#x60;. | [optional]
**description** | **string** | Shipment description. It is recommended to use the &#x60;textOnLabel&#x60; field instead. | [optional]
**packages** | [**\OpenAPI\Client\Model\PackageRequestDto[]**](PackageRequestDto.md) |  |
**insurance** | [**\OpenAPI\Client\Model\InsuranceDto**](InsuranceDto.md) |  | [optional]
**cash_on_delivery** | [**\OpenAPI\Client\Model\CashOnDeliveryDto**](CashOnDeliveryDto.md) |  | [optional]
**label_format** | **string** | Label file format. | [optional]
**additional_services** | **string[]** | List of additional services. | [optional]
**additional_properties** | **array<string,string>** | Key-Value map defining non-standard, carrier specific features. List of the supported properties is located as sub-resource in /shipment-management/delivery-services. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
