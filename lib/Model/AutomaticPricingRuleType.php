<?php
/**
 * AutomaticPricingRuleType
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
 * AutomaticPricingRuleType Class Doc Comment
 *
 * @category Class
 * @description The rule type.  * &#x60;EXCHANGE_RATE&#x60; - Calculates prices on additional marketplaces using the latest exchange rates and price from the offer base marketplace.                     &lt;br /&gt;Is not available on base marketplace and business marketplaces.                     &lt;br /&gt;&lt;a href&#x3D;\&quot;https://help.allegro.com/sell/en/a/how-the-pricing-rules-based-on-the-price-converter-work-k1wRoYkBEuK?marketplaceId&#x3D;allegro-pl\&quot;&gt;More information about EXCHANGE_RATE type&lt;/a&gt;.  * &#x60;FOLLOW_BY_ALLEGRO_MIN_PRICE&#x60; - Calculates prices by following the lowest product price on Allegro for a given marketplace.                     &lt;br /&gt;Is not available on business marketplaces.                     &lt;br /&gt;&lt;a href&#x3D;\&quot;https://help.allegro.com/sell/en/a/how-to-automatically-manage-prices-with-pricing-rules-rjw6ZGv8ZCy?marketplaceId&#x3D;allegro-cz#how-the-pricing-rules-based-on-lowest-price-on-allegro-work\&quot;&gt;More information about FOLLOW_BY_ALLEGRO_MIN_PRICE type&lt;/a&gt;. * &#x60;FOLLOW_BY_MARKET_MIN_PRICE&#x60; - Calculates prices by following the lowest product price on market for a given marketplace.                     &lt;br /&gt;Is not available on business marketplaces.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AutomaticPricingRuleType
{
    /**
     * Possible values of this enum
     */
    public const EXCHANGE_RATE = 'EXCHANGE_RATE';

    public const FOLLOW_BY_ALLEGRO_MIN_PRICE = 'FOLLOW_BY_ALLEGRO_MIN_PRICE';

    public const FOLLOW_BY_MARKET_MIN_PRICE = 'FOLLOW_BY_MARKET_MIN_PRICE';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::EXCHANGE_RATE,
            self::FOLLOW_BY_ALLEGRO_MIN_PRICE,
            self::FOLLOW_BY_MARKET_MIN_PRICE
        ];
    }
}


