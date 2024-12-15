# # ShipmentDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**delivery_method_id** | **string** | Id of delivery method, chosen by buyer in order. | [optional]
**credentials_id** | **string** | ID of merchant agreement, registered in WZA. For Allegro methods, this field is null. | [optional]
**sender** | [**\OpenAPI\Client\Model\SenderAddressDto**](SenderAddressDto.md) |  | [optional]
**receiver** | [**\OpenAPI\Client\Model\ReceiverAddressDto**](ReceiverAddressDto.md) |  | [optional]
**pickup** | [**\OpenAPI\Client\Model\PickupAddressDto**](PickupAddressDto.md) |  | [optional]
**reference_number** | **string** | Shipment identifier in own system. Example: &#x60;Ordering number&#x60;. | [optional]
**description** | **string** | Shipment description. It is recommended to use the &#x60;textOnLabel&#x60; field instead. | [optional]
**packages** | [**\OpenAPI\Client\Model\PackageDto[]**](PackageDto.md) |  | [optional]
**insurance** | [**\OpenAPI\Client\Model\InsuranceDto**](InsuranceDto.md) |  | [optional]
**cash_on_delivery** | [**\OpenAPI\Client\Model\CashOnDeliveryDto**](CashOnDeliveryDto.md) |  | [optional]
**created_date** | **string** | Shipment creation date | [optional]
**canceled_date** | **string** | Shipment cancellation date. Only for canceled shipments, in all other cases is null. | [optional]
**carrier** | **string** | ID of carrier which carries out a shipment | [optional]
**label_format** | **string** | Label file format. | [optional]
**additional_services** | **string[]** | List of additional services. | [optional]
**additional_properties** | **array<string,string>** | Key-Value map defining non-standard, carrier specific features. List of the supported properties is located as sub-resource in /shipment-management/delivery-services. | [optional]
**transport** | **string[]** | List with identifiers of the carriers that take part in the transport of this shipment. Often it is a single value list, when only one carrier is involved. There are shipments where multiple carriers are used to deliver the package, mainly in a case of international shipments, then there will be two or more values. | [optional]
**pickup_available** | **bool** | Information about pickup order option availability for this shipment. True if it is possible to order a pickup for given shipment. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
