<?php
/**
 * CheckoutFormLineItem
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
 * CheckoutFormLineItem Class Doc Comment
 *
 * @category Class
 * @description Order item
 * @package  robsonek\phpAllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CheckoutFormLineItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CheckoutFormLineItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'offer' => '\robsonek\phpAllegroApi\Model\OfferReference',
        'quantity' => 'float',
        'original_price' => '\robsonek\phpAllegroApi\Model\Price',
        'price' => '\robsonek\phpAllegroApi\Model\Price',
        'reconciliation' => '\robsonek\phpAllegroApi\Model\LineItemReconciliation',
        'selected_additional_services' => '\robsonek\phpAllegroApi\Model\CheckoutFormAdditionalService[]',
        'vouchers' => '\robsonek\phpAllegroApi\Model\LineItemVoucher[]',
        'tax' => '\robsonek\phpAllegroApi\Model\CheckoutFormLineItemTax',
        'bought_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'offer' => null,
        'quantity' => 'integer',
        'original_price' => null,
        'price' => null,
        'reconciliation' => null,
        'selected_additional_services' => null,
        'vouchers' => null,
        'tax' => null,
        'bought_at' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'offer' => false,
        'quantity' => false,
        'original_price' => false,
        'price' => false,
        'reconciliation' => false,
        'selected_additional_services' => false,
        'vouchers' => false,
        'tax' => false,
        'bought_at' => false
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
        'id' => 'id',
        'offer' => 'offer',
        'quantity' => 'quantity',
        'original_price' => 'originalPrice',
        'price' => 'price',
        'reconciliation' => 'reconciliation',
        'selected_additional_services' => 'selectedAdditionalServices',
        'vouchers' => 'vouchers',
        'tax' => 'tax',
        'bought_at' => 'boughtAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'offer' => 'setOffer',
        'quantity' => 'setQuantity',
        'original_price' => 'setOriginalPrice',
        'price' => 'setPrice',
        'reconciliation' => 'setReconciliation',
        'selected_additional_services' => 'setSelectedAdditionalServices',
        'vouchers' => 'setVouchers',
        'tax' => 'setTax',
        'bought_at' => 'setBoughtAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'offer' => 'getOffer',
        'quantity' => 'getQuantity',
        'original_price' => 'getOriginalPrice',
        'price' => 'getPrice',
        'reconciliation' => 'getReconciliation',
        'selected_additional_services' => 'getSelectedAdditionalServices',
        'vouchers' => 'getVouchers',
        'tax' => 'getTax',
        'bought_at' => 'getBoughtAt'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('offer', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('original_price', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('reconciliation', $data ?? [], null);
        $this->setIfExists('selected_additional_services', $data ?? [], null);
        $this->setIfExists('vouchers', $data ?? [], null);
        $this->setIfExists('tax', $data ?? [], null);
        $this->setIfExists('bought_at', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['offer'] === null) {
            $invalidProperties[] = "'offer' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if (($this->container['quantity'] < 1)) {
            $invalidProperties[] = "invalid value for 'quantity', must be bigger than or equal to 1.";
        }

        if ($this->container['original_price'] === null) {
            $invalidProperties[] = "'original_price' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Line item identifier
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets offer
     *
     * @return \robsonek\phpAllegroApi\Model\OfferReference
     */
    public function getOffer()
    {
        return $this->container['offer'];
    }

    /**
     * Sets offer
     *
     * @param \robsonek\phpAllegroApi\Model\OfferReference $offer offer
     *
     * @return self
     */
    public function setOffer($offer)
    {
        if (is_null($offer)) {
            throw new \InvalidArgumentException('non-nullable offer cannot be null');
        }
        $this->container['offer'] = $offer;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param float $quantity quantity
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }

        if (($quantity < 1)) {
            throw new \InvalidArgumentException('invalid value for $quantity when calling CheckoutFormLineItem., must be bigger than or equal to 1.');
        }

        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets original_price
     *
     * @return \robsonek\phpAllegroApi\Model\Price
     */
    public function getOriginalPrice()
    {
        return $this->container['original_price'];
    }

    /**
     * Sets original_price
     *
     * @param \robsonek\phpAllegroApi\Model\Price $original_price original_price
     *
     * @return self
     */
    public function setOriginalPrice($original_price)
    {
        if (is_null($original_price)) {
            throw new \InvalidArgumentException('non-nullable original_price cannot be null');
        }
        $this->container['original_price'] = $original_price;

        return $this;
    }

    /**
     * Gets price
     *
     * @return \robsonek\phpAllegroApi\Model\Price
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param \robsonek\phpAllegroApi\Model\Price $price price
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
     * Gets reconciliation
     *
     * @return \robsonek\phpAllegroApi\Model\LineItemReconciliation|null
     */
    public function getReconciliation()
    {
        return $this->container['reconciliation'];
    }

    /**
     * Sets reconciliation
     *
     * @param \robsonek\phpAllegroApi\Model\LineItemReconciliation|null $reconciliation reconciliation
     *
     * @return self
     */
    public function setReconciliation($reconciliation)
    {
        if (is_null($reconciliation)) {
            throw new \InvalidArgumentException('non-nullable reconciliation cannot be null');
        }
        $this->container['reconciliation'] = $reconciliation;

        return $this;
    }

    /**
     * Gets selected_additional_services
     *
     * @return \robsonek\phpAllegroApi\Model\CheckoutFormAdditionalService[]|null
     */
    public function getSelectedAdditionalServices()
    {
        return $this->container['selected_additional_services'];
    }

    /**
     * Sets selected_additional_services
     *
     * @param \robsonek\phpAllegroApi\Model\CheckoutFormAdditionalService[]|null $selected_additional_services selected_additional_services
     *
     * @return self
     */
    public function setSelectedAdditionalServices($selected_additional_services)
    {
        if (is_null($selected_additional_services)) {
            throw new \InvalidArgumentException('non-nullable selected_additional_services cannot be null');
        }
        $this->container['selected_additional_services'] = $selected_additional_services;

        return $this;
    }

    /**
     * Gets vouchers
     *
     * @return \robsonek\phpAllegroApi\Model\LineItemVoucher[]|null
     */
    public function getVouchers()
    {
        return $this->container['vouchers'];
    }

    /**
     * Sets vouchers
     *
     * @param \robsonek\phpAllegroApi\Model\LineItemVoucher[]|null $vouchers vouchers
     *
     * @return self
     */
    public function setVouchers($vouchers)
    {
        if (is_null($vouchers)) {
            throw new \InvalidArgumentException('non-nullable vouchers cannot be null');
        }
        $this->container['vouchers'] = $vouchers;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return \robsonek\phpAllegroApi\Model\CheckoutFormLineItemTax|null
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param \robsonek\phpAllegroApi\Model\CheckoutFormLineItemTax|null $tax tax
     *
     * @return self
     */
    public function setTax($tax)
    {
        if (is_null($tax)) {
            throw new \InvalidArgumentException('non-nullable tax cannot be null');
        }
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets bought_at
     *
     * @return \DateTime|null
     */
    public function getBoughtAt()
    {
        return $this->container['bought_at'];
    }

    /**
     * Sets bought_at
     *
     * @param \DateTime|null $bought_at ISO date when offer was bought
     *
     * @return self
     */
    public function setBoughtAt($bought_at)
    {
        if (is_null($bought_at)) {
            throw new \InvalidArgumentException('non-nullable bought_at cannot be null');
        }
        $this->container['bought_at'] = $bought_at;

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


