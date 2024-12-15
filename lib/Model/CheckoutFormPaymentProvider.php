<?php
/**
 * CheckoutFormPaymentProvider
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  robsonek\phpAllegroApi
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

namespace robsonek\phpAllegroApi\Model;
use \robsonek\phpAllegroApi\ObjectSerializer;

/**
 * CheckoutFormPaymentProvider Class Doc Comment
 *
 * @category Class
 * @description Payment provider
 * @package  robsonek\phpAllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CheckoutFormPaymentProvider
{
    /**
     * Possible values of this enum
     */
    public const P24 = 'P24';

    public const PAYU = 'PAYU';

    public const OFFLINE = 'OFFLINE';

    public const EPT = 'EPT';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::P24,
            self::PAYU,
            self::OFFLINE,
            self::EPT
        ];
    }
}


