<?php
/**
 * CheckoutFormPaymentType
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
 * CheckoutFormPaymentType Class Doc Comment
 *
 * @category Class
 * @description Payment type
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CheckoutFormPaymentType
{
    /**
     * Possible values of this enum
     */
    public const CASH_ON_DELIVERY = 'CASH_ON_DELIVERY';

    public const WIRE_TRANSFER = 'WIRE_TRANSFER';

    public const ONLINE = 'ONLINE';

    public const SPLIT_PAYMENT = 'SPLIT_PAYMENT';

    public const EXTENDED_TERM = 'EXTENDED_TERM';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CASH_ON_DELIVERY,
            self::WIRE_TRANSFER,
            self::ONLINE,
            self::SPLIT_PAYMENT,
            self::EXTENDED_TERM
        ];
    }
}

