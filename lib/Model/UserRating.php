<?php
/**
 * UserRating
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
 * UserRating Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UserRating implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UserRating';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'answer' => '\OpenAPI\Client\Model\Answer',
        'buyer' => '\OpenAPI\Client\Model\User',
        'comment' => 'string',
        'created_at' => 'string',
        'edited_at' => 'string',
        'excluded_from_average_rates' => 'bool',
        'excluded_from_average_rates_reason' => 'string',
        'id' => 'string',
        'last_changed_at' => 'string',
        'order' => '\OpenAPI\Client\Model\Order',
        'rates' => '\OpenAPI\Client\Model\Rates',
        'recommended' => 'bool',
        'removal' => '\OpenAPI\Client\Model\Removal'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'answer' => null,
        'buyer' => null,
        'comment' => null,
        'created_at' => null,
        'edited_at' => null,
        'excluded_from_average_rates' => null,
        'excluded_from_average_rates_reason' => null,
        'id' => null,
        'last_changed_at' => null,
        'order' => null,
        'rates' => null,
        'recommended' => null,
        'removal' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'answer' => false,
        'buyer' => false,
        'comment' => false,
        'created_at' => false,
        'edited_at' => false,
        'excluded_from_average_rates' => false,
        'excluded_from_average_rates_reason' => false,
        'id' => false,
        'last_changed_at' => false,
        'order' => false,
        'rates' => false,
        'recommended' => false,
        'removal' => false
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
        'answer' => 'answer',
        'buyer' => 'buyer',
        'comment' => 'comment',
        'created_at' => 'createdAt',
        'edited_at' => 'editedAt',
        'excluded_from_average_rates' => 'excludedFromAverageRates',
        'excluded_from_average_rates_reason' => 'excludedFromAverageRatesReason',
        'id' => 'id',
        'last_changed_at' => 'lastChangedAt',
        'order' => 'order',
        'rates' => 'rates',
        'recommended' => 'recommended',
        'removal' => 'removal'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'answer' => 'setAnswer',
        'buyer' => 'setBuyer',
        'comment' => 'setComment',
        'created_at' => 'setCreatedAt',
        'edited_at' => 'setEditedAt',
        'excluded_from_average_rates' => 'setExcludedFromAverageRates',
        'excluded_from_average_rates_reason' => 'setExcludedFromAverageRatesReason',
        'id' => 'setId',
        'last_changed_at' => 'setLastChangedAt',
        'order' => 'setOrder',
        'rates' => 'setRates',
        'recommended' => 'setRecommended',
        'removal' => 'setRemoval'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'answer' => 'getAnswer',
        'buyer' => 'getBuyer',
        'comment' => 'getComment',
        'created_at' => 'getCreatedAt',
        'edited_at' => 'getEditedAt',
        'excluded_from_average_rates' => 'getExcludedFromAverageRates',
        'excluded_from_average_rates_reason' => 'getExcludedFromAverageRatesReason',
        'id' => 'getId',
        'last_changed_at' => 'getLastChangedAt',
        'order' => 'getOrder',
        'rates' => 'getRates',
        'recommended' => 'getRecommended',
        'removal' => 'getRemoval'
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
        $this->setIfExists('answer', $data ?? [], null);
        $this->setIfExists('buyer', $data ?? [], null);
        $this->setIfExists('comment', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('edited_at', $data ?? [], null);
        $this->setIfExists('excluded_from_average_rates', $data ?? [], null);
        $this->setIfExists('excluded_from_average_rates_reason', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('last_changed_at', $data ?? [], null);
        $this->setIfExists('order', $data ?? [], null);
        $this->setIfExists('rates', $data ?? [], null);
        $this->setIfExists('recommended', $data ?? [], null);
        $this->setIfExists('removal', $data ?? [], null);
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

        if ($this->container['buyer'] === null) {
            $invalidProperties[] = "'buyer' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['recommended'] === null) {
            $invalidProperties[] = "'recommended' can't be null";
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
     * Gets answer
     *
     * @return \OpenAPI\Client\Model\Answer|null
     */
    public function getAnswer()
    {
        return $this->container['answer'];
    }

    /**
     * Sets answer
     *
     * @param \OpenAPI\Client\Model\Answer|null $answer answer
     *
     * @return self
     */
    public function setAnswer($answer)
    {
        if (is_null($answer)) {
            throw new \InvalidArgumentException('non-nullable answer cannot be null');
        }
        $this->container['answer'] = $answer;

        return $this;
    }

    /**
     * Gets buyer
     *
     * @return \OpenAPI\Client\Model\User
     */
    public function getBuyer()
    {
        return $this->container['buyer'];
    }

    /**
     * Sets buyer
     *
     * @param \OpenAPI\Client\Model\User $buyer buyer
     *
     * @return self
     */
    public function setBuyer($buyer)
    {
        if (is_null($buyer)) {
            throw new \InvalidArgumentException('non-nullable buyer cannot be null');
        }
        $this->container['buyer'] = $buyer;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string|null $comment Buyer's text comment
     *
     * @return self
     */
    public function setComment($comment)
    {
        if (is_null($comment)) {
            throw new \InvalidArgumentException('non-nullable comment cannot be null');
        }
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string $created_at Creation datetime in ISO 8601 format
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets edited_at
     *
     * @return string|null
     */
    public function getEditedAt()
    {
        return $this->container['edited_at'];
    }

    /**
     * Sets edited_at
     *
     * @param string|null $edited_at Edition datetime in ISO 8601 format
     *
     * @return self
     */
    public function setEditedAt($edited_at)
    {
        if (is_null($edited_at)) {
            throw new \InvalidArgumentException('non-nullable edited_at cannot be null');
        }
        $this->container['edited_at'] = $edited_at;

        return $this;
    }

    /**
     * Gets excluded_from_average_rates
     *
     * @return bool|null
     */
    public function getExcludedFromAverageRates()
    {
        return $this->container['excluded_from_average_rates'];
    }

    /**
     * Sets excluded_from_average_rates
     *
     * @param bool|null $excluded_from_average_rates If true this rating was not included in calculating average user rates
     *
     * @return self
     */
    public function setExcludedFromAverageRates($excluded_from_average_rates)
    {
        if (is_null($excluded_from_average_rates)) {
            throw new \InvalidArgumentException('non-nullable excluded_from_average_rates cannot be null');
        }
        $this->container['excluded_from_average_rates'] = $excluded_from_average_rates;

        return $this;
    }

    /**
     * Gets excluded_from_average_rates_reason
     *
     * @return string|null
     */
    public function getExcludedFromAverageRatesReason()
    {
        return $this->container['excluded_from_average_rates_reason'];
    }

    /**
     * Sets excluded_from_average_rates_reason
     *
     * @param string|null $excluded_from_average_rates_reason The reason why the rating was excluded from calculating average user rates. The message is translated based on the value of the \"Accept-Language\" header and exists only when the rating was excluded.
     *
     * @return self
     */
    public function setExcludedFromAverageRatesReason($excluded_from_average_rates_reason)
    {
        if (is_null($excluded_from_average_rates_reason)) {
            throw new \InvalidArgumentException('non-nullable excluded_from_average_rates_reason cannot be null');
        }
        $this->container['excluded_from_average_rates_reason'] = $excluded_from_average_rates_reason;

        return $this;
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
     * @param string $id Rating id
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
     * Gets last_changed_at
     *
     * @return string|null
     */
    public function getLastChangedAt()
    {
        return $this->container['last_changed_at'];
    }

    /**
     * Sets last_changed_at
     *
     * @param string|null $last_changed_at Last change (creation or latest edition) datetime in ISO 8601 format
     *
     * @return self
     */
    public function setLastChangedAt($last_changed_at)
    {
        if (is_null($last_changed_at)) {
            throw new \InvalidArgumentException('non-nullable last_changed_at cannot be null');
        }
        $this->container['last_changed_at'] = $last_changed_at;

        return $this;
    }

    /**
     * Gets order
     *
     * @return \OpenAPI\Client\Model\Order|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \OpenAPI\Client\Model\Order|null $order order
     *
     * @return self
     */
    public function setOrder($order)
    {
        if (is_null($order)) {
            throw new \InvalidArgumentException('non-nullable order cannot be null');
        }
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets rates
     *
     * @return \OpenAPI\Client\Model\Rates|null
     */
    public function getRates()
    {
        return $this->container['rates'];
    }

    /**
     * Sets rates
     *
     * @param \OpenAPI\Client\Model\Rates|null $rates rates
     *
     * @return self
     */
    public function setRates($rates)
    {
        if (is_null($rates)) {
            throw new \InvalidArgumentException('non-nullable rates cannot be null');
        }
        $this->container['rates'] = $rates;

        return $this;
    }

    /**
     * Gets recommended
     *
     * @return bool
     */
    public function getRecommended()
    {
        return $this->container['recommended'];
    }

    /**
     * Sets recommended
     *
     * @param bool $recommended Whether buyer recommends the order
     *
     * @return self
     */
    public function setRecommended($recommended)
    {
        if (is_null($recommended)) {
            throw new \InvalidArgumentException('non-nullable recommended cannot be null');
        }
        $this->container['recommended'] = $recommended;

        return $this;
    }

    /**
     * Gets removal
     *
     * @return \OpenAPI\Client\Model\Removal|null
     */
    public function getRemoval()
    {
        return $this->container['removal'];
    }

    /**
     * Sets removal
     *
     * @param \OpenAPI\Client\Model\Removal|null $removal removal
     *
     * @return self
     */
    public function setRemoval($removal)
    {
        if (is_null($removal)) {
            throw new \InvalidArgumentException('non-nullable removal cannot be null');
        }
        $this->container['removal'] = $removal;

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


