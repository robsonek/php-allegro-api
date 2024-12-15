<?php
/**
 * Modification
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
 * Modification Class Doc Comment
 *
 * @category Class
 * @description Contains fields to change
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Modification implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Modification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'additional_services_group' => '\OpenAPI\Client\Model\AdditionalServicesGroup',
        'delivery' => '\OpenAPI\Client\Model\ModificationDelivery',
        'discounts' => '\OpenAPI\Client\Model\ModificationDiscounts',
        'location' => '\OpenAPI\Client\Model\Location',
        'payments' => '\OpenAPI\Client\Model\ModificationPayments',
        'size_table' => '\OpenAPI\Client\Model\SizeTable',
        'publication' => '\OpenAPI\Client\Model\ModificationPublication',
        'responsible_person' => '\OpenAPI\Client\Model\ModificationResponsiblePerson',
        'responsible_producer' => '\OpenAPI\Client\Model\ModificationResponsibleProducer',
        'safety_information' => '\OpenAPI\Client\Model\ModificationSafetyInformation'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'additional_services_group' => null,
        'delivery' => null,
        'discounts' => null,
        'location' => null,
        'payments' => null,
        'size_table' => null,
        'publication' => null,
        'responsible_person' => null,
        'responsible_producer' => null,
        'safety_information' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'additional_services_group' => false,
        'delivery' => false,
        'discounts' => false,
        'location' => false,
        'payments' => false,
        'size_table' => false,
        'publication' => false,
        'responsible_person' => false,
        'responsible_producer' => false,
        'safety_information' => false
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
        'additional_services_group' => 'additionalServicesGroup',
        'delivery' => 'delivery',
        'discounts' => 'discounts',
        'location' => 'location',
        'payments' => 'payments',
        'size_table' => 'sizeTable',
        'publication' => 'publication',
        'responsible_person' => 'responsiblePerson',
        'responsible_producer' => 'responsibleProducer',
        'safety_information' => 'safetyInformation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additional_services_group' => 'setAdditionalServicesGroup',
        'delivery' => 'setDelivery',
        'discounts' => 'setDiscounts',
        'location' => 'setLocation',
        'payments' => 'setPayments',
        'size_table' => 'setSizeTable',
        'publication' => 'setPublication',
        'responsible_person' => 'setResponsiblePerson',
        'responsible_producer' => 'setResponsibleProducer',
        'safety_information' => 'setSafetyInformation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additional_services_group' => 'getAdditionalServicesGroup',
        'delivery' => 'getDelivery',
        'discounts' => 'getDiscounts',
        'location' => 'getLocation',
        'payments' => 'getPayments',
        'size_table' => 'getSizeTable',
        'publication' => 'getPublication',
        'responsible_person' => 'getResponsiblePerson',
        'responsible_producer' => 'getResponsibleProducer',
        'safety_information' => 'getSafetyInformation'
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
        $this->setIfExists('additional_services_group', $data ?? [], null);
        $this->setIfExists('delivery', $data ?? [], null);
        $this->setIfExists('discounts', $data ?? [], null);
        $this->setIfExists('location', $data ?? [], null);
        $this->setIfExists('payments', $data ?? [], null);
        $this->setIfExists('size_table', $data ?? [], null);
        $this->setIfExists('publication', $data ?? [], null);
        $this->setIfExists('responsible_person', $data ?? [], null);
        $this->setIfExists('responsible_producer', $data ?? [], null);
        $this->setIfExists('safety_information', $data ?? [], null);
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
     * Gets additional_services_group
     *
     * @return \OpenAPI\Client\Model\AdditionalServicesGroup|null
     */
    public function getAdditionalServicesGroup()
    {
        return $this->container['additional_services_group'];
    }

    /**
     * Sets additional_services_group
     *
     * @param \OpenAPI\Client\Model\AdditionalServicesGroup|null $additional_services_group additional_services_group
     *
     * @return self
     */
    public function setAdditionalServicesGroup($additional_services_group)
    {
        if (is_null($additional_services_group)) {
            throw new \InvalidArgumentException('non-nullable additional_services_group cannot be null');
        }
        $this->container['additional_services_group'] = $additional_services_group;

        return $this;
    }

    /**
     * Gets delivery
     *
     * @return \OpenAPI\Client\Model\ModificationDelivery|null
     */
    public function getDelivery()
    {
        return $this->container['delivery'];
    }

    /**
     * Sets delivery
     *
     * @param \OpenAPI\Client\Model\ModificationDelivery|null $delivery delivery
     *
     * @return self
     */
    public function setDelivery($delivery)
    {
        if (is_null($delivery)) {
            throw new \InvalidArgumentException('non-nullable delivery cannot be null');
        }
        $this->container['delivery'] = $delivery;

        return $this;
    }

    /**
     * Gets discounts
     *
     * @return \OpenAPI\Client\Model\ModificationDiscounts|null
     */
    public function getDiscounts()
    {
        return $this->container['discounts'];
    }

    /**
     * Sets discounts
     *
     * @param \OpenAPI\Client\Model\ModificationDiscounts|null $discounts discounts
     *
     * @return self
     */
    public function setDiscounts($discounts)
    {
        if (is_null($discounts)) {
            throw new \InvalidArgumentException('non-nullable discounts cannot be null');
        }
        $this->container['discounts'] = $discounts;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \OpenAPI\Client\Model\Location|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \OpenAPI\Client\Model\Location|null $location location
     *
     * @return self
     */
    public function setLocation($location)
    {
        if (is_null($location)) {
            throw new \InvalidArgumentException('non-nullable location cannot be null');
        }
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets payments
     *
     * @return \OpenAPI\Client\Model\ModificationPayments|null
     */
    public function getPayments()
    {
        return $this->container['payments'];
    }

    /**
     * Sets payments
     *
     * @param \OpenAPI\Client\Model\ModificationPayments|null $payments payments
     *
     * @return self
     */
    public function setPayments($payments)
    {
        if (is_null($payments)) {
            throw new \InvalidArgumentException('non-nullable payments cannot be null');
        }
        $this->container['payments'] = $payments;

        return $this;
    }

    /**
     * Gets size_table
     *
     * @return \OpenAPI\Client\Model\SizeTable|null
     */
    public function getSizeTable()
    {
        return $this->container['size_table'];
    }

    /**
     * Sets size_table
     *
     * @param \OpenAPI\Client\Model\SizeTable|null $size_table size_table
     *
     * @return self
     */
    public function setSizeTable($size_table)
    {
        if (is_null($size_table)) {
            throw new \InvalidArgumentException('non-nullable size_table cannot be null');
        }
        $this->container['size_table'] = $size_table;

        return $this;
    }

    /**
     * Gets publication
     *
     * @return \OpenAPI\Client\Model\ModificationPublication|null
     */
    public function getPublication()
    {
        return $this->container['publication'];
    }

    /**
     * Sets publication
     *
     * @param \OpenAPI\Client\Model\ModificationPublication|null $publication publication
     *
     * @return self
     */
    public function setPublication($publication)
    {
        if (is_null($publication)) {
            throw new \InvalidArgumentException('non-nullable publication cannot be null');
        }
        $this->container['publication'] = $publication;

        return $this;
    }

    /**
     * Gets responsible_person
     *
     * @return \OpenAPI\Client\Model\ModificationResponsiblePerson|null
     */
    public function getResponsiblePerson()
    {
        return $this->container['responsible_person'];
    }

    /**
     * Sets responsible_person
     *
     * @param \OpenAPI\Client\Model\ModificationResponsiblePerson|null $responsible_person responsible_person
     *
     * @return self
     */
    public function setResponsiblePerson($responsible_person)
    {
        if (is_null($responsible_person)) {
            throw new \InvalidArgumentException('non-nullable responsible_person cannot be null');
        }
        $this->container['responsible_person'] = $responsible_person;

        return $this;
    }

    /**
     * Gets responsible_producer
     *
     * @return \OpenAPI\Client\Model\ModificationResponsibleProducer|null
     */
    public function getResponsibleProducer()
    {
        return $this->container['responsible_producer'];
    }

    /**
     * Sets responsible_producer
     *
     * @param \OpenAPI\Client\Model\ModificationResponsibleProducer|null $responsible_producer responsible_producer
     *
     * @return self
     */
    public function setResponsibleProducer($responsible_producer)
    {
        if (is_null($responsible_producer)) {
            throw new \InvalidArgumentException('non-nullable responsible_producer cannot be null');
        }
        $this->container['responsible_producer'] = $responsible_producer;

        return $this;
    }

    /**
     * Gets safety_information
     *
     * @return \OpenAPI\Client\Model\ModificationSafetyInformation|null
     */
    public function getSafetyInformation()
    {
        return $this->container['safety_information'];
    }

    /**
     * Sets safety_information
     *
     * @param \OpenAPI\Client\Model\ModificationSafetyInformation|null $safety_information safety_information
     *
     * @return self
     */
    public function setSafetyInformation($safety_information)
    {
        if (is_null($safety_information)) {
            throw new \InvalidArgumentException('non-nullable safety_information cannot be null');
        }
        $this->container['safety_information'] = $safety_information;

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


