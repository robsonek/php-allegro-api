<?php
/**
 * ClassifiedStatEventType
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
 * ClassifiedStatEventType Class Doc Comment
 *
 * @category Class
 * @description Classified statistical event type.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ClassifiedStatEventType
{
    /**
     * Possible values of this enum
     */
    public const SHOWED_PHONE_NUMBER = 'SHOWED_PHONE_NUMBER';

    public const ASKED_QUESTION = 'ASKED_QUESTION';

    public const CLICKED_ASK_QUESTION = 'CLICKED_ASK_QUESTION';

    public const ADDED_TO_FAVOURITES = 'ADDED_TO_FAVOURITES';

    public const REMOVED_FROM_FAVOURITES = 'REMOVED_FROM_FAVOURITES';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SHOWED_PHONE_NUMBER,
            self::ASKED_QUESTION,
            self::CLICKED_ASK_QUESTION,
            self::ADDED_TO_FAVOURITES,
            self::REMOVED_FROM_FAVOURITES
        ];
    }
}


