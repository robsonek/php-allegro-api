<?php
/**
 * CheckoutFormFulfillmentStatus
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Allegro REST API
 *
 * https://developer.allegro.pl/about  Documentation is generated from [this OpenAPI 3.0 specification file](https://developer.allegro.pl/swagger.yaml). To start working with our API, you can also check our [official Allegro REST API public collection](https://www.postman.com/allegro-rest-api/allegro-rest-api/collection/4puh6ls/allegro-rest-api) in Postman.
 *
 * The version of the OpenAPI document: latest
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.10.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * CheckoutFormFulfillmentStatus Class Doc Comment
 *
 * @category Class
 * @description Order seller status.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CheckoutFormFulfillmentStatus
{
    /**
     * Possible values of this enum
     */
    public const _NEW = 'NEW';

    public const PROCESSING = 'PROCESSING';

    public const READY_FOR_SHIPMENT = 'READY_FOR_SHIPMENT';

    public const READY_FOR_PICKUP = 'READY_FOR_PICKUP';

    public const SENT = 'SENT';

    public const PICKED_UP = 'PICKED_UP';

    public const CANCELLED = 'CANCELLED';

    public const SUSPENDED = 'SUSPENDED';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_NEW,
            self::PROCESSING,
            self::READY_FOR_SHIPMENT,
            self::READY_FOR_PICKUP,
            self::SENT,
            self::PICKED_UP,
            self::CANCELLED,
            self::SUSPENDED
        ];
    }
}

