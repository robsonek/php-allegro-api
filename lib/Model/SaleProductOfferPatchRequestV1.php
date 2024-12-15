<?php
/**
 * SaleProductOfferPatchRequestV1
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
 * SaleProductOfferPatchRequestV1 Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SaleProductOfferPatchRequestV1 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SaleProductOfferPatchRequestV1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'category' => 'object',
        'parameters' => '\OpenAPI\Client\Model\ParameterProductOfferRequest[]',
        'publication' => '\OpenAPI\Client\Model\SaleProductOfferPublicationRequest',
        'delivery' => '\OpenAPI\Client\Model\SaleProductOfferPatchRequestV1AllOfDelivery',
        'after_sales_services' => '\OpenAPI\Client\Model\AfterSalesServicesProductOfferRequest',
        'size_table' => '\OpenAPI\Client\Model\SizeTable',
        'contact' => '\OpenAPI\Client\Model\SaleProductOfferRequestBaseAllOfContact',
        'discounts' => '\OpenAPI\Client\Model\DiscountsProductOfferRequest',
        'name' => 'string',
        'payments' => '\OpenAPI\Client\Model\Payments',
        'selling_mode' => '\OpenAPI\Client\Model\SellingMode',
        'location' => '\OpenAPI\Client\Model\Location',
        'images' => 'string[]',
        'description' => '\OpenAPI\Client\Model\StandardizedDescription',
        'external' => '\OpenAPI\Client\Model\ExternalId',
        'tax_settings' => '\OpenAPI\Client\Model\OfferTaxSettings',
        'message_to_seller_settings' => '\OpenAPI\Client\Model\MessageToSellerSettings',
        'product_set' => '\OpenAPI\Client\Model\SaleProductOfferPatchRequestV1AllOfProductSet[]',
        'b2b' => '\OpenAPI\Client\Model\B2b',
        'attachments' => '\OpenAPI\Client\Model\ProductOfferAttachmentInner[]',
        'fundraising_campaign' => '\OpenAPI\Client\Model\ProductOfferFundraisingCampaignRequest',
        'additional_services' => '\OpenAPI\Client\Model\ProductOfferAdditionalServicesRequest',
        'compatibility_list' => '\OpenAPI\Client\Model\CompatibilityListManualType',
        'stock' => '\OpenAPI\Client\Model\SaleProductOffersRequestStock',
        'additional_marketplaces' => 'array<string,\OpenAPI\Client\Model\AdditionalMarketplacesRequestValue>',
        'language' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'category' => null,
        'parameters' => null,
        'publication' => null,
        'delivery' => null,
        'after_sales_services' => null,
        'size_table' => null,
        'contact' => null,
        'discounts' => null,
        'name' => null,
        'payments' => null,
        'selling_mode' => null,
        'location' => null,
        'images' => null,
        'description' => null,
        'external' => null,
        'tax_settings' => null,
        'message_to_seller_settings' => null,
        'product_set' => null,
        'b2b' => null,
        'attachments' => null,
        'fundraising_campaign' => null,
        'additional_services' => null,
        'compatibility_list' => null,
        'stock' => null,
        'additional_marketplaces' => null,
        'language' => 'BCP-47 language code'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'category' => false,
        'parameters' => false,
        'publication' => false,
        'delivery' => false,
        'after_sales_services' => false,
        'size_table' => false,
        'contact' => false,
        'discounts' => false,
        'name' => false,
        'payments' => false,
        'selling_mode' => false,
        'location' => false,
        'images' => false,
        'description' => false,
        'external' => false,
        'tax_settings' => false,
        'message_to_seller_settings' => false,
        'product_set' => false,
        'b2b' => false,
        'attachments' => false,
        'fundraising_campaign' => false,
        'additional_services' => false,
        'compatibility_list' => false,
        'stock' => false,
        'additional_marketplaces' => false,
        'language' => false
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
        'category' => 'category',
        'parameters' => 'parameters',
        'publication' => 'publication',
        'delivery' => 'delivery',
        'after_sales_services' => 'afterSalesServices',
        'size_table' => 'sizeTable',
        'contact' => 'contact',
        'discounts' => 'discounts',
        'name' => 'name',
        'payments' => 'payments',
        'selling_mode' => 'sellingMode',
        'location' => 'location',
        'images' => 'images',
        'description' => 'description',
        'external' => 'external',
        'tax_settings' => 'taxSettings',
        'message_to_seller_settings' => 'messageToSellerSettings',
        'product_set' => 'productSet',
        'b2b' => 'b2b',
        'attachments' => 'attachments',
        'fundraising_campaign' => 'fundraisingCampaign',
        'additional_services' => 'additionalServices',
        'compatibility_list' => 'compatibilityList',
        'stock' => 'stock',
        'additional_marketplaces' => 'additionalMarketplaces',
        'language' => 'language'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'category' => 'setCategory',
        'parameters' => 'setParameters',
        'publication' => 'setPublication',
        'delivery' => 'setDelivery',
        'after_sales_services' => 'setAfterSalesServices',
        'size_table' => 'setSizeTable',
        'contact' => 'setContact',
        'discounts' => 'setDiscounts',
        'name' => 'setName',
        'payments' => 'setPayments',
        'selling_mode' => 'setSellingMode',
        'location' => 'setLocation',
        'images' => 'setImages',
        'description' => 'setDescription',
        'external' => 'setExternal',
        'tax_settings' => 'setTaxSettings',
        'message_to_seller_settings' => 'setMessageToSellerSettings',
        'product_set' => 'setProductSet',
        'b2b' => 'setB2b',
        'attachments' => 'setAttachments',
        'fundraising_campaign' => 'setFundraisingCampaign',
        'additional_services' => 'setAdditionalServices',
        'compatibility_list' => 'setCompatibilityList',
        'stock' => 'setStock',
        'additional_marketplaces' => 'setAdditionalMarketplaces',
        'language' => 'setLanguage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'category' => 'getCategory',
        'parameters' => 'getParameters',
        'publication' => 'getPublication',
        'delivery' => 'getDelivery',
        'after_sales_services' => 'getAfterSalesServices',
        'size_table' => 'getSizeTable',
        'contact' => 'getContact',
        'discounts' => 'getDiscounts',
        'name' => 'getName',
        'payments' => 'getPayments',
        'selling_mode' => 'getSellingMode',
        'location' => 'getLocation',
        'images' => 'getImages',
        'description' => 'getDescription',
        'external' => 'getExternal',
        'tax_settings' => 'getTaxSettings',
        'message_to_seller_settings' => 'getMessageToSellerSettings',
        'product_set' => 'getProductSet',
        'b2b' => 'getB2b',
        'attachments' => 'getAttachments',
        'fundraising_campaign' => 'getFundraisingCampaign',
        'additional_services' => 'getAdditionalServices',
        'compatibility_list' => 'getCompatibilityList',
        'stock' => 'getStock',
        'additional_marketplaces' => 'getAdditionalMarketplaces',
        'language' => 'getLanguage'
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
        $this->setIfExists('category', $data ?? [], null);
        $this->setIfExists('parameters', $data ?? [], null);
        $this->setIfExists('publication', $data ?? [], null);
        $this->setIfExists('delivery', $data ?? [], null);
        $this->setIfExists('after_sales_services', $data ?? [], null);
        $this->setIfExists('size_table', $data ?? [], null);
        $this->setIfExists('contact', $data ?? [], null);
        $this->setIfExists('discounts', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('payments', $data ?? [], null);
        $this->setIfExists('selling_mode', $data ?? [], null);
        $this->setIfExists('location', $data ?? [], null);
        $this->setIfExists('images', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('external', $data ?? [], null);
        $this->setIfExists('tax_settings', $data ?? [], null);
        $this->setIfExists('message_to_seller_settings', $data ?? [], null);
        $this->setIfExists('product_set', $data ?? [], null);
        $this->setIfExists('b2b', $data ?? [], null);
        $this->setIfExists('attachments', $data ?? [], null);
        $this->setIfExists('fundraising_campaign', $data ?? [], null);
        $this->setIfExists('additional_services', $data ?? [], null);
        $this->setIfExists('compatibility_list', $data ?? [], null);
        $this->setIfExists('stock', $data ?? [], null);
        $this->setIfExists('additional_marketplaces', $data ?? [], null);
        $this->setIfExists('language', $data ?? [], null);
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

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 75)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 75.";
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
     * Gets category
     *
     * @return object|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param object|null $category category
     *
     * @return self
     */
    public function setCategory($category)
    {
        if (is_null($category)) {
            throw new \InvalidArgumentException('non-nullable category cannot be null');
        }
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets parameters
     *
     * @return \OpenAPI\Client\Model\ParameterProductOfferRequest[]|null
     */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
     * Sets parameters
     *
     * @param \OpenAPI\Client\Model\ParameterProductOfferRequest[]|null $parameters parameters
     *
     * @return self
     */
    public function setParameters($parameters)
    {
        if (is_null($parameters)) {
            throw new \InvalidArgumentException('non-nullable parameters cannot be null');
        }
        $this->container['parameters'] = $parameters;

        return $this;
    }

    /**
     * Gets publication
     *
     * @return \OpenAPI\Client\Model\SaleProductOfferPublicationRequest|null
     */
    public function getPublication()
    {
        return $this->container['publication'];
    }

    /**
     * Sets publication
     *
     * @param \OpenAPI\Client\Model\SaleProductOfferPublicationRequest|null $publication publication
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
     * Gets delivery
     *
     * @return \OpenAPI\Client\Model\SaleProductOfferPatchRequestV1AllOfDelivery|null
     */
    public function getDelivery()
    {
        return $this->container['delivery'];
    }

    /**
     * Sets delivery
     *
     * @param \OpenAPI\Client\Model\SaleProductOfferPatchRequestV1AllOfDelivery|null $delivery delivery
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
     * Gets after_sales_services
     *
     * @return \OpenAPI\Client\Model\AfterSalesServicesProductOfferRequest|null
     */
    public function getAfterSalesServices()
    {
        return $this->container['after_sales_services'];
    }

    /**
     * Sets after_sales_services
     *
     * @param \OpenAPI\Client\Model\AfterSalesServicesProductOfferRequest|null $after_sales_services after_sales_services
     *
     * @return self
     */
    public function setAfterSalesServices($after_sales_services)
    {
        if (is_null($after_sales_services)) {
            throw new \InvalidArgumentException('non-nullable after_sales_services cannot be null');
        }
        $this->container['after_sales_services'] = $after_sales_services;

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
     * Gets contact
     *
     * @return \OpenAPI\Client\Model\SaleProductOfferRequestBaseAllOfContact|null
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param \OpenAPI\Client\Model\SaleProductOfferRequestBaseAllOfContact|null $contact contact
     *
     * @return self
     */
    public function setContact($contact)
    {
        if (is_null($contact)) {
            throw new \InvalidArgumentException('non-nullable contact cannot be null');
        }
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets discounts
     *
     * @return \OpenAPI\Client\Model\DiscountsProductOfferRequest|null
     */
    public function getDiscounts()
    {
        return $this->container['discounts'];
    }

    /**
     * Sets discounts
     *
     * @param \OpenAPI\Client\Model\DiscountsProductOfferRequest|null $discounts discounts
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name (title) of an offer. Length cannot be more than 75 characters. Read more: <a href=\"../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#tytul-oferty\" target=\"_blank\">PL</a>  / <a href=\"../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#offer-title\" target=\"_blank\">EN</a> .
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 75)) {
            throw new \InvalidArgumentException('invalid length for $name when calling SaleProductOfferPatchRequestV1., must be smaller than or equal to 75.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets payments
     *
     * @return \OpenAPI\Client\Model\Payments|null
     */
    public function getPayments()
    {
        return $this->container['payments'];
    }

    /**
     * Sets payments
     *
     * @param \OpenAPI\Client\Model\Payments|null $payments payments
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
     * Gets selling_mode
     *
     * @return \OpenAPI\Client\Model\SellingMode|null
     */
    public function getSellingMode()
    {
        return $this->container['selling_mode'];
    }

    /**
     * Sets selling_mode
     *
     * @param \OpenAPI\Client\Model\SellingMode|null $selling_mode selling_mode
     *
     * @return self
     */
    public function setSellingMode($selling_mode)
    {
        if (is_null($selling_mode)) {
            throw new \InvalidArgumentException('non-nullable selling_mode cannot be null');
        }
        $this->container['selling_mode'] = $selling_mode;

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
     * Gets images
     *
     * @return string[]|null
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     *
     * @param string[]|null $images images
     *
     * @return self
     */
    public function setImages($images)
    {
        if (is_null($images)) {
            throw new \InvalidArgumentException('non-nullable images cannot be null');
        }
        $this->container['images'] = $images;

        return $this;
    }

    /**
     * Gets description
     *
     * @return \OpenAPI\Client\Model\StandardizedDescription|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param \OpenAPI\Client\Model\StandardizedDescription|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets external
     *
     * @return \OpenAPI\Client\Model\ExternalId|null
     */
    public function getExternal()
    {
        return $this->container['external'];
    }

    /**
     * Sets external
     *
     * @param \OpenAPI\Client\Model\ExternalId|null $external external
     *
     * @return self
     */
    public function setExternal($external)
    {
        if (is_null($external)) {
            throw new \InvalidArgumentException('non-nullable external cannot be null');
        }
        $this->container['external'] = $external;

        return $this;
    }

    /**
     * Gets tax_settings
     *
     * @return \OpenAPI\Client\Model\OfferTaxSettings|null
     */
    public function getTaxSettings()
    {
        return $this->container['tax_settings'];
    }

    /**
     * Sets tax_settings
     *
     * @param \OpenAPI\Client\Model\OfferTaxSettings|null $tax_settings tax_settings
     *
     * @return self
     */
    public function setTaxSettings($tax_settings)
    {
        if (is_null($tax_settings)) {
            throw new \InvalidArgumentException('non-nullable tax_settings cannot be null');
        }
        $this->container['tax_settings'] = $tax_settings;

        return $this;
    }

    /**
     * Gets message_to_seller_settings
     *
     * @return \OpenAPI\Client\Model\MessageToSellerSettings|null
     */
    public function getMessageToSellerSettings()
    {
        return $this->container['message_to_seller_settings'];
    }

    /**
     * Sets message_to_seller_settings
     *
     * @param \OpenAPI\Client\Model\MessageToSellerSettings|null $message_to_seller_settings message_to_seller_settings
     *
     * @return self
     */
    public function setMessageToSellerSettings($message_to_seller_settings)
    {
        if (is_null($message_to_seller_settings)) {
            throw new \InvalidArgumentException('non-nullable message_to_seller_settings cannot be null');
        }
        $this->container['message_to_seller_settings'] = $message_to_seller_settings;

        return $this;
    }

    /**
     * Gets product_set
     *
     * @return \OpenAPI\Client\Model\SaleProductOfferPatchRequestV1AllOfProductSet[]|null
     */
    public function getProductSet()
    {
        return $this->container['product_set'];
    }

    /**
     * Sets product_set
     *
     * @param \OpenAPI\Client\Model\SaleProductOfferPatchRequestV1AllOfProductSet[]|null $product_set product_set
     *
     * @return self
     */
    public function setProductSet($product_set)
    {
        if (is_null($product_set)) {
            throw new \InvalidArgumentException('non-nullable product_set cannot be null');
        }
        $this->container['product_set'] = $product_set;

        return $this;
    }

    /**
     * Gets b2b
     *
     * @return \OpenAPI\Client\Model\B2b|null
     */
    public function getB2b()
    {
        return $this->container['b2b'];
    }

    /**
     * Sets b2b
     *
     * @param \OpenAPI\Client\Model\B2b|null $b2b b2b
     *
     * @return self
     */
    public function setB2b($b2b)
    {
        if (is_null($b2b)) {
            throw new \InvalidArgumentException('non-nullable b2b cannot be null');
        }
        $this->container['b2b'] = $b2b;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return \OpenAPI\Client\Model\ProductOfferAttachmentInner[]|null
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \OpenAPI\Client\Model\ProductOfferAttachmentInner[]|null $attachments An array of offer attachments.
     *
     * @return self
     */
    public function setAttachments($attachments)
    {
        if (is_null($attachments)) {
            throw new \InvalidArgumentException('non-nullable attachments cannot be null');
        }
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets fundraising_campaign
     *
     * @return \OpenAPI\Client\Model\ProductOfferFundraisingCampaignRequest|null
     */
    public function getFundraisingCampaign()
    {
        return $this->container['fundraising_campaign'];
    }

    /**
     * Sets fundraising_campaign
     *
     * @param \OpenAPI\Client\Model\ProductOfferFundraisingCampaignRequest|null $fundraising_campaign fundraising_campaign
     *
     * @return self
     */
    public function setFundraisingCampaign($fundraising_campaign)
    {
        if (is_null($fundraising_campaign)) {
            throw new \InvalidArgumentException('non-nullable fundraising_campaign cannot be null');
        }
        $this->container['fundraising_campaign'] = $fundraising_campaign;

        return $this;
    }

    /**
     * Gets additional_services
     *
     * @return \OpenAPI\Client\Model\ProductOfferAdditionalServicesRequest|null
     */
    public function getAdditionalServices()
    {
        return $this->container['additional_services'];
    }

    /**
     * Sets additional_services
     *
     * @param \OpenAPI\Client\Model\ProductOfferAdditionalServicesRequest|null $additional_services additional_services
     *
     * @return self
     */
    public function setAdditionalServices($additional_services)
    {
        if (is_null($additional_services)) {
            throw new \InvalidArgumentException('non-nullable additional_services cannot be null');
        }
        $this->container['additional_services'] = $additional_services;

        return $this;
    }

    /**
     * Gets compatibility_list
     *
     * @return \OpenAPI\Client\Model\CompatibilityListManualType|null
     */
    public function getCompatibilityList()
    {
        return $this->container['compatibility_list'];
    }

    /**
     * Sets compatibility_list
     *
     * @param \OpenAPI\Client\Model\CompatibilityListManualType|null $compatibility_list For the `/sale/product-offers` resources you can send only definition of the MANUAL compatibility list. If compatibility list is provided for the product assigned to the offer, it will be used automatically.
     *
     * @return self
     */
    public function setCompatibilityList($compatibility_list)
    {
        if (is_null($compatibility_list)) {
            throw new \InvalidArgumentException('non-nullable compatibility_list cannot be null');
        }
        $this->container['compatibility_list'] = $compatibility_list;

        return $this;
    }

    /**
     * Gets stock
     *
     * @return \OpenAPI\Client\Model\SaleProductOffersRequestStock|null
     */
    public function getStock()
    {
        return $this->container['stock'];
    }

    /**
     * Sets stock
     *
     * @param \OpenAPI\Client\Model\SaleProductOffersRequestStock|null $stock stock
     *
     * @return self
     */
    public function setStock($stock)
    {
        if (is_null($stock)) {
            throw new \InvalidArgumentException('non-nullable stock cannot be null');
        }
        $this->container['stock'] = $stock;

        return $this;
    }

    /**
     * Gets additional_marketplaces
     *
     * @return array<string,\OpenAPI\Client\Model\AdditionalMarketplacesRequestValue>|null
     */
    public function getAdditionalMarketplaces()
    {
        return $this->container['additional_marketplaces'];
    }

    /**
     * Sets additional_marketplaces
     *
     * @param array<string,\OpenAPI\Client\Model\AdditionalMarketplacesRequestValue>|null $additional_marketplaces Selected information about the offer in each additional service. This field does not contain information about the base marketplace of the offer.<br/> Possible values of `marketplaceId` can be obtained from `GET /marketplaces` resource.</br> See [Allegro foreign marketplaces](https://developer.allegro.pl/tutorials/listing-and-managing-offers-on-foreign-marketplaces-7GndGjeAATn) for more details regarding this field.
     *
     * @return self
     */
    public function setAdditionalMarketplaces($additional_marketplaces)
    {
        if (is_null($additional_marketplaces)) {
            throw new \InvalidArgumentException('non-nullable additional_marketplaces cannot be null');
        }
        $this->container['additional_marketplaces'] = $additional_marketplaces;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string|null $language Declared base language of the offer.
     *
     * @return self
     */
    public function setLanguage($language)
    {
        if (is_null($language)) {
            throw new \InvalidArgumentException('non-nullable language cannot be null');
        }
        $this->container['language'] = $language;

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

