<?php
/**
 * DeliverySettingsResponse
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

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * DeliverySettingsResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DeliverySettingsResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DeliverySettingsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'marketplace' => '\OpenAPI\Client\Model\DeliverySettingsResponseMarketplace',
        'free_delivery' => '\OpenAPI\Client\Model\DeliverySettingsResponseFreeDelivery',
        'abroad_free_delivery' => '\OpenAPI\Client\Model\DeliverySettingsResponseAbroadFreeDelivery',
        'join_policy' => '\OpenAPI\Client\Model\DeliverySettingsResponseJoinPolicy',
        'custom_cost' => '\OpenAPI\Client\Model\DeliverySettingsResponseCustomCost',
        'updated_at' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'marketplace' => null,
        'free_delivery' => null,
        'abroad_free_delivery' => null,
        'join_policy' => null,
        'custom_cost' => null,
        'updated_at' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'marketplace' => false,
        'free_delivery' => false,
        'abroad_free_delivery' => false,
        'join_policy' => false,
        'custom_cost' => false,
        'updated_at' => false
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
        'marketplace' => 'marketplace',
        'free_delivery' => 'freeDelivery',
        'abroad_free_delivery' => 'abroadFreeDelivery',
        'join_policy' => 'joinPolicy',
        'custom_cost' => 'customCost',
        'updated_at' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplace' => 'setMarketplace',
        'free_delivery' => 'setFreeDelivery',
        'abroad_free_delivery' => 'setAbroadFreeDelivery',
        'join_policy' => 'setJoinPolicy',
        'custom_cost' => 'setCustomCost',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplace' => 'getMarketplace',
        'free_delivery' => 'getFreeDelivery',
        'abroad_free_delivery' => 'getAbroadFreeDelivery',
        'join_policy' => 'getJoinPolicy',
        'custom_cost' => 'getCustomCost',
        'updated_at' => 'getUpdatedAt'
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
        $this->setIfExists('marketplace', $data ?? [], null);
        $this->setIfExists('free_delivery', $data ?? [], null);
        $this->setIfExists('abroad_free_delivery', $data ?? [], null);
        $this->setIfExists('join_policy', $data ?? [], null);
        $this->setIfExists('custom_cost', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
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

        if ($this->container['marketplace'] === null) {
            $invalidProperties[] = "'marketplace' can't be null";
        }
        if ($this->container['join_policy'] === null) {
            $invalidProperties[] = "'join_policy' can't be null";
        }
        if ($this->container['custom_cost'] === null) {
            $invalidProperties[] = "'custom_cost' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
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
     * Gets marketplace
     *
     * @return \OpenAPI\Client\Model\DeliverySettingsResponseMarketplace
     */
    public function getMarketplace()
    {
        return $this->container['marketplace'];
    }

    /**
     * Sets marketplace
     *
     * @param \OpenAPI\Client\Model\DeliverySettingsResponseMarketplace $marketplace marketplace
     *
     * @return self
     */
    public function setMarketplace($marketplace)
    {
        if (is_null($marketplace)) {
            throw new \InvalidArgumentException('non-nullable marketplace cannot be null');
        }
        $this->container['marketplace'] = $marketplace;

        return $this;
    }

    /**
     * Gets free_delivery
     *
     * @return \OpenAPI\Client\Model\DeliverySettingsResponseFreeDelivery|null
     */
    public function getFreeDelivery()
    {
        return $this->container['free_delivery'];
    }

    /**
     * Sets free_delivery
     *
     * @param \OpenAPI\Client\Model\DeliverySettingsResponseFreeDelivery|null $free_delivery free_delivery
     *
     * @return self
     */
    public function setFreeDelivery($free_delivery)
    {
        if (is_null($free_delivery)) {
            throw new \InvalidArgumentException('non-nullable free_delivery cannot be null');
        }
        $this->container['free_delivery'] = $free_delivery;

        return $this;
    }

    /**
     * Gets abroad_free_delivery
     *
     * @return \OpenAPI\Client\Model\DeliverySettingsResponseAbroadFreeDelivery|null
     */
    public function getAbroadFreeDelivery()
    {
        return $this->container['abroad_free_delivery'];
    }

    /**
     * Sets abroad_free_delivery
     *
     * @param \OpenAPI\Client\Model\DeliverySettingsResponseAbroadFreeDelivery|null $abroad_free_delivery abroad_free_delivery
     *
     * @return self
     */
    public function setAbroadFreeDelivery($abroad_free_delivery)
    {
        if (is_null($abroad_free_delivery)) {
            throw new \InvalidArgumentException('non-nullable abroad_free_delivery cannot be null');
        }
        $this->container['abroad_free_delivery'] = $abroad_free_delivery;

        return $this;
    }

    /**
     * Gets join_policy
     *
     * @return \OpenAPI\Client\Model\DeliverySettingsResponseJoinPolicy
     */
    public function getJoinPolicy()
    {
        return $this->container['join_policy'];
    }

    /**
     * Sets join_policy
     *
     * @param \OpenAPI\Client\Model\DeliverySettingsResponseJoinPolicy $join_policy join_policy
     *
     * @return self
     */
    public function setJoinPolicy($join_policy)
    {
        if (is_null($join_policy)) {
            throw new \InvalidArgumentException('non-nullable join_policy cannot be null');
        }
        $this->container['join_policy'] = $join_policy;

        return $this;
    }

    /**
     * Gets custom_cost
     *
     * @return \OpenAPI\Client\Model\DeliverySettingsResponseCustomCost
     */
    public function getCustomCost()
    {
        return $this->container['custom_cost'];
    }

    /**
     * Sets custom_cost
     *
     * @param \OpenAPI\Client\Model\DeliverySettingsResponseCustomCost $custom_cost custom_cost
     *
     * @return self
     */
    public function setCustomCost($custom_cost)
    {
        if (is_null($custom_cost)) {
            throw new \InvalidArgumentException('non-nullable custom_cost cannot be null');
        }
        $this->container['custom_cost'] = $custom_cost;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string $updated_at Date and time of the last modification of the set in UTC ISO 8601 format.
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }
        $this->container['updated_at'] = $updated_at;

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


