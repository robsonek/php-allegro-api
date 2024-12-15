<?php
/**
 * AlleDiscountSubmittedOfferDto
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
 * AlleDiscountSubmittedOfferDto Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AlleDiscountSubmittedOfferDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlleDiscountSubmittedOfferDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'participation_id' => 'string',
        'offer' => '\OpenAPI\Client\Model\AlleDiscountSubmittedOfferDtoOffer',
        'campaign' => '\OpenAPI\Client\Model\AlleDiscountSubmittedOfferDtoCampaign',
        'prices' => '\OpenAPI\Client\Model\AlleDiscountSubmittedOfferDtoPrices',
        'process' => '\OpenAPI\Client\Model\AlleDiscountSubmittedOfferDtoProcess',
        'purchase_limit' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'participation_id' => null,
        'offer' => null,
        'campaign' => null,
        'prices' => null,
        'process' => null,
        'purchase_limit' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'participation_id' => false,
        'offer' => false,
        'campaign' => false,
        'prices' => false,
        'process' => false,
        'purchase_limit' => false
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
        'participation_id' => 'participationId',
        'offer' => 'offer',
        'campaign' => 'campaign',
        'prices' => 'prices',
        'process' => 'process',
        'purchase_limit' => 'purchaseLimit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'participation_id' => 'setParticipationId',
        'offer' => 'setOffer',
        'campaign' => 'setCampaign',
        'prices' => 'setPrices',
        'process' => 'setProcess',
        'purchase_limit' => 'setPurchaseLimit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'participation_id' => 'getParticipationId',
        'offer' => 'getOffer',
        'campaign' => 'getCampaign',
        'prices' => 'getPrices',
        'process' => 'getProcess',
        'purchase_limit' => 'getPurchaseLimit'
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
        $this->setIfExists('participation_id', $data ?? [], null);
        $this->setIfExists('offer', $data ?? [], null);
        $this->setIfExists('campaign', $data ?? [], null);
        $this->setIfExists('prices', $data ?? [], null);
        $this->setIfExists('process', $data ?? [], null);
        $this->setIfExists('purchase_limit', $data ?? [], null);
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
     * Gets participation_id
     *
     * @return string|null
     */
    public function getParticipationId()
    {
        return $this->container['participation_id'];
    }

    /**
     * Sets participation_id
     *
     * @param string|null $participation_id The id of the participation.
     *
     * @return self
     */
    public function setParticipationId($participation_id)
    {
        if (is_null($participation_id)) {
            throw new \InvalidArgumentException('non-nullable participation_id cannot be null');
        }
        $this->container['participation_id'] = $participation_id;

        return $this;
    }

    /**
     * Gets offer
     *
     * @return \OpenAPI\Client\Model\AlleDiscountSubmittedOfferDtoOffer|null
     */
    public function getOffer()
    {
        return $this->container['offer'];
    }

    /**
     * Sets offer
     *
     * @param \OpenAPI\Client\Model\AlleDiscountSubmittedOfferDtoOffer|null $offer offer
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
     * Gets campaign
     *
     * @return \OpenAPI\Client\Model\AlleDiscountSubmittedOfferDtoCampaign|null
     */
    public function getCampaign()
    {
        return $this->container['campaign'];
    }

    /**
     * Sets campaign
     *
     * @param \OpenAPI\Client\Model\AlleDiscountSubmittedOfferDtoCampaign|null $campaign campaign
     *
     * @return self
     */
    public function setCampaign($campaign)
    {
        if (is_null($campaign)) {
            throw new \InvalidArgumentException('non-nullable campaign cannot be null');
        }
        $this->container['campaign'] = $campaign;

        return $this;
    }

    /**
     * Gets prices
     *
     * @return \OpenAPI\Client\Model\AlleDiscountSubmittedOfferDtoPrices|null
     */
    public function getPrices()
    {
        return $this->container['prices'];
    }

    /**
     * Sets prices
     *
     * @param \OpenAPI\Client\Model\AlleDiscountSubmittedOfferDtoPrices|null $prices prices
     *
     * @return self
     */
    public function setPrices($prices)
    {
        if (is_null($prices)) {
            throw new \InvalidArgumentException('non-nullable prices cannot be null');
        }
        $this->container['prices'] = $prices;

        return $this;
    }

    /**
     * Gets process
     *
     * @return \OpenAPI\Client\Model\AlleDiscountSubmittedOfferDtoProcess|null
     */
    public function getProcess()
    {
        return $this->container['process'];
    }

    /**
     * Sets process
     *
     * @param \OpenAPI\Client\Model\AlleDiscountSubmittedOfferDtoProcess|null $process process
     *
     * @return self
     */
    public function setProcess($process)
    {
        if (is_null($process)) {
            throw new \InvalidArgumentException('non-nullable process cannot be null');
        }
        $this->container['process'] = $process;

        return $this;
    }

    /**
     * Gets purchase_limit
     *
     * @return int|null
     */
    public function getPurchaseLimit()
    {
        return $this->container['purchase_limit'];
    }

    /**
     * Sets purchase_limit
     *
     * @param int|null $purchase_limit Limit of purchases on the offer.
     *
     * @return self
     */
    public function setPurchaseLimit($purchase_limit)
    {
        if (is_null($purchase_limit)) {
            throw new \InvalidArgumentException('non-nullable purchase_limit cannot be null');
        }
        $this->container['purchase_limit'] = $purchase_limit;

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


