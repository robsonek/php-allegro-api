<?php
/**
 * OfferSellingMode
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

use \ArrayAccess;
use \robsonek\phpAllegroApi\ObjectSerializer;

/**
 * OfferSellingMode Class Doc Comment
 *
 * @category Class
 * @description This section describes the selling format and prices.
 * @package  robsonek\phpAllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OfferSellingMode implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OfferSellingMode';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'format' => '\robsonek\phpAllegroApi\Model\SellingModeFormat',
        'price' => '\robsonek\phpAllegroApi\Model\OfferPrice',
        'fixed_price' => '\robsonek\phpAllegroApi\Model\OfferFixedPrice',
        'popularity' => 'int',
        'popularity_range' => 'string',
        'bid_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'format' => null,
        'price' => null,
        'fixed_price' => null,
        'popularity' => null,
        'popularity_range' => null,
        'bid_count' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'format' => false,
        'price' => false,
        'fixed_price' => false,
        'popularity' => false,
        'popularity_range' => false,
        'bid_count' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'format' => 'format',
        'price' => 'price',
        'fixed_price' => 'fixedPrice',
        'popularity' => 'popularity',
        'popularity_range' => 'popularityRange',
        'bid_count' => 'bidCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'format' => 'setFormat',
        'price' => 'setPrice',
        'fixed_price' => 'setFixedPrice',
        'popularity' => 'setPopularity',
        'popularity_range' => 'setPopularityRange',
        'bid_count' => 'setBidCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'format' => 'getFormat',
        'price' => 'getPrice',
        'fixed_price' => 'getFixedPrice',
        'popularity' => 'getPopularity',
        'popularity_range' => 'getPopularityRange',
        'bid_count' => 'getBidCount'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('format', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('fixed_price', $data ?? [], null);
        $this->setIfExists('popularity', $data ?? [], null);
        $this->setIfExists('popularity_range', $data ?? [], null);
        $this->setIfExists('bid_count', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['popularity']) && ($this->container['popularity'] < 0)) {
            $invalidProperties[] = "invalid value for 'popularity', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['bid_count']) && ($this->container['bid_count'] < 0)) {
            $invalidProperties[] = "invalid value for 'bid_count', must be bigger than or equal to 0.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets format
     *
     * @return \robsonek\phpAllegroApi\Model\SellingModeFormat|null
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param \robsonek\phpAllegroApi\Model\SellingModeFormat|null $format format
     *
     * @return self
     */
    public function setFormat($format)
    {
        if (is_null($format)) {
            throw new \InvalidArgumentException('non-nullable format cannot be null');
        }
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets price
     *
     * @return \robsonek\phpAllegroApi\Model\OfferPrice|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param \robsonek\phpAllegroApi\Model\OfferPrice|null $price price
     *
     * @return self
     */
    public function setPrice($price)
    {
        if (is_null($price)) {
            throw new \InvalidArgumentException('non-nullable price cannot be null');
        }
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets fixed_price
     *
     * @return \robsonek\phpAllegroApi\Model\OfferFixedPrice|null
     */
    public function getFixedPrice()
    {
        return $this->container['fixed_price'];
    }

    /**
     * Sets fixed_price
     *
     * @param \robsonek\phpAllegroApi\Model\OfferFixedPrice|null $fixed_price fixed_price
     *
     * @return self
     */
    public function setFixedPrice($fixed_price)
    {
        if (is_null($fixed_price)) {
            throw new \InvalidArgumentException('non-nullable fixed_price cannot be null');
        }
        $this->container['fixed_price'] = $fixed_price;

        return $this;
    }

    /**
     * Gets popularity
     *
     * @return int|null
     */
    public function getPopularity()
    {
        return $this->container['popularity'];
    }

    /**
     * Sets popularity
     *
     * @param int|null $popularity Lower bound of popularity range of the offer for *BUY_NOW* selling format.
     *
     * @return self
     */
    public function setPopularity($popularity)
    {
        if (is_null($popularity)) {
            throw new \InvalidArgumentException('non-nullable popularity cannot be null');
        }

        if (($popularity < 0)) {
            throw new \InvalidArgumentException('invalid value for $popularity when calling OfferSellingMode., must be bigger than or equal to 0.');
        }

        $this->container['popularity'] = $popularity;

        return $this;
    }

    /**
     * Gets popularity_range
     *
     * @return string|null
     */
    public function getPopularityRange()
    {
        return $this->container['popularity_range'];
    }

    /**
     * Sets popularity_range
     *
     * @param string|null $popularity_range Popularity ranges of the offer for *BUY_NOW* selling format. Possible values: 0, [1-5], [6-10], [11-20], [21-50], [51-100] and [101+]
     *
     * @return self
     */
    public function setPopularityRange($popularity_range)
    {
        if (is_null($popularity_range)) {
            throw new \InvalidArgumentException('non-nullable popularity_range cannot be null');
        }
        $this->container['popularity_range'] = $popularity_range;

        return $this;
    }

    /**
     * Gets bid_count
     *
     * @return int|null
     */
    public function getBidCount()
    {
        return $this->container['bid_count'];
    }

    /**
     * Sets bid_count
     *
     * @param int|null $bid_count Number of bidders for *AUCTION* selling format.
     *
     * @return self
     */
    public function setBidCount($bid_count)
    {
        if (is_null($bid_count)) {
            throw new \InvalidArgumentException('non-nullable bid_count cannot be null');
        }

        if (($bid_count < 0)) {
            throw new \InvalidArgumentException('invalid value for $bid_count when calling OfferSellingMode., must be bigger than or equal to 0.');
        }

        $this->container['bid_count'] = $bid_count;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


