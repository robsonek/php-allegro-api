<?php
/**
 * ReturnPolicyOptions
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
 * ReturnPolicyOptions Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ReturnPolicyOptions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReturnPolicyOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cash_on_delivery_not_allowed' => 'bool',
        'free_accessories_return_required' => 'bool',
        'refund_lowered_by_received_discount' => 'bool',
        'business_return_allowed' => 'bool',
        'collect_by_seller_only' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cash_on_delivery_not_allowed' => null,
        'free_accessories_return_required' => null,
        'refund_lowered_by_received_discount' => null,
        'business_return_allowed' => null,
        'collect_by_seller_only' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cash_on_delivery_not_allowed' => false,
        'free_accessories_return_required' => false,
        'refund_lowered_by_received_discount' => false,
        'business_return_allowed' => false,
        'collect_by_seller_only' => false
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
        'cash_on_delivery_not_allowed' => 'cashOnDeliveryNotAllowed',
        'free_accessories_return_required' => 'freeAccessoriesReturnRequired',
        'refund_lowered_by_received_discount' => 'refundLoweredByReceivedDiscount',
        'business_return_allowed' => 'businessReturnAllowed',
        'collect_by_seller_only' => 'collectBySellerOnly'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cash_on_delivery_not_allowed' => 'setCashOnDeliveryNotAllowed',
        'free_accessories_return_required' => 'setFreeAccessoriesReturnRequired',
        'refund_lowered_by_received_discount' => 'setRefundLoweredByReceivedDiscount',
        'business_return_allowed' => 'setBusinessReturnAllowed',
        'collect_by_seller_only' => 'setCollectBySellerOnly'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cash_on_delivery_not_allowed' => 'getCashOnDeliveryNotAllowed',
        'free_accessories_return_required' => 'getFreeAccessoriesReturnRequired',
        'refund_lowered_by_received_discount' => 'getRefundLoweredByReceivedDiscount',
        'business_return_allowed' => 'getBusinessReturnAllowed',
        'collect_by_seller_only' => 'getCollectBySellerOnly'
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
        $this->setIfExists('cash_on_delivery_not_allowed', $data ?? [], null);
        $this->setIfExists('free_accessories_return_required', $data ?? [], null);
        $this->setIfExists('refund_lowered_by_received_discount', $data ?? [], null);
        $this->setIfExists('business_return_allowed', $data ?? [], null);
        $this->setIfExists('collect_by_seller_only', $data ?? [], null);
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

        if ($this->container['cash_on_delivery_not_allowed'] === null) {
            $invalidProperties[] = "'cash_on_delivery_not_allowed' can't be null";
        }
        if ($this->container['free_accessories_return_required'] === null) {
            $invalidProperties[] = "'free_accessories_return_required' can't be null";
        }
        if ($this->container['refund_lowered_by_received_discount'] === null) {
            $invalidProperties[] = "'refund_lowered_by_received_discount' can't be null";
        }
        if ($this->container['business_return_allowed'] === null) {
            $invalidProperties[] = "'business_return_allowed' can't be null";
        }
        if ($this->container['collect_by_seller_only'] === null) {
            $invalidProperties[] = "'collect_by_seller_only' can't be null";
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
     * Gets cash_on_delivery_not_allowed
     *
     * @return bool
     */
    public function getCashOnDeliveryNotAllowed()
    {
        return $this->container['cash_on_delivery_not_allowed'];
    }

    /**
     * Sets cash_on_delivery_not_allowed
     *
     * @param bool $cash_on_delivery_not_allowed Order sent back with cash on pickup is not allowed
     *
     * @return self
     */
    public function setCashOnDeliveryNotAllowed($cash_on_delivery_not_allowed)
    {
        if (is_null($cash_on_delivery_not_allowed)) {
            throw new \InvalidArgumentException('non-nullable cash_on_delivery_not_allowed cannot be null');
        }
        $this->container['cash_on_delivery_not_allowed'] = $cash_on_delivery_not_allowed;

        return $this;
    }

    /**
     * Gets free_accessories_return_required
     *
     * @return bool
     */
    public function getFreeAccessoriesReturnRequired()
    {
        return $this->container['free_accessories_return_required'];
    }

    /**
     * Sets free_accessories_return_required
     *
     * @param bool $free_accessories_return_required If free accessories were added to the order, the client needs to send them back
     *
     * @return self
     */
    public function setFreeAccessoriesReturnRequired($free_accessories_return_required)
    {
        if (is_null($free_accessories_return_required)) {
            throw new \InvalidArgumentException('non-nullable free_accessories_return_required cannot be null');
        }
        $this->container['free_accessories_return_required'] = $free_accessories_return_required;

        return $this;
    }

    /**
     * Gets refund_lowered_by_received_discount
     *
     * @return bool
     */
    public function getRefundLoweredByReceivedDiscount()
    {
        return $this->container['refund_lowered_by_received_discount'];
    }

    /**
     * Sets refund_lowered_by_received_discount
     *
     * @param bool $refund_lowered_by_received_discount If there was a discount granted after the order, the return is lowered by the received discount
     *
     * @return self
     */
    public function setRefundLoweredByReceivedDiscount($refund_lowered_by_received_discount)
    {
        if (is_null($refund_lowered_by_received_discount)) {
            throw new \InvalidArgumentException('non-nullable refund_lowered_by_received_discount cannot be null');
        }
        $this->container['refund_lowered_by_received_discount'] = $refund_lowered_by_received_discount;

        return $this;
    }

    /**
     * Gets business_return_allowed
     *
     * @return bool
     */
    public function getBusinessReturnAllowed()
    {
        return $this->container['business_return_allowed'];
    }

    /**
     * Sets business_return_allowed
     *
     * @param bool $business_return_allowed Returns for B2B purchases allowed
     *
     * @return self
     */
    public function setBusinessReturnAllowed($business_return_allowed)
    {
        if (is_null($business_return_allowed)) {
            throw new \InvalidArgumentException('non-nullable business_return_allowed cannot be null');
        }
        $this->container['business_return_allowed'] = $business_return_allowed;

        return $this;
    }

    /**
     * Gets collect_by_seller_only
     *
     * @return bool
     */
    public function getCollectBySellerOnly()
    {
        return $this->container['collect_by_seller_only'];
    }

    /**
     * Sets collect_by_seller_only
     *
     * @param bool $collect_by_seller_only Return items are picked up by the seller
     *
     * @return self
     */
    public function setCollectBySellerOnly($collect_by_seller_only)
    {
        if (is_null($collect_by_seller_only)) {
            throw new \InvalidArgumentException('non-nullable collect_by_seller_only cannot be null');
        }
        $this->container['collect_by_seller_only'] = $collect_by_seller_only;

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


