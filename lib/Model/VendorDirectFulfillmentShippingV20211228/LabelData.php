<?php
/**
 * LabelData
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Direct Fulfillment Shipping
 *
 * The Selling Partner API for Direct Fulfillment Shipping provides programmatic access to a direct fulfillment vendor's shipping data.
 *
 * The version of the OpenAPI document: 2021-12-28
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\VendorDirectFulfillmentShippingV20211228;
use SellingPartnerApi\Model\BaseModel;
use \ArrayAccess;
use \SellingPartnerApi\Model\ModelInterface;
use \SellingPartnerApi\ObjectSerializer;

/**
 * LabelData Class Doc Comment
 *
 * @category Class
 * @description Details of the shipment label.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class LabelData extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LabelData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'package_identifier' => 'string',
        'tracking_number' => 'string',
        'ship_method' => 'string',
        'ship_method_name' => 'string',
        'content' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'package_identifier' => null,
        'tracking_number' => null,
        'ship_method' => null,
        'ship_method_name' => null,
        'content' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'package_identifier' => 'packageIdentifier',
        'tracking_number' => 'trackingNumber',
        'ship_method' => 'shipMethod',
        'ship_method_name' => 'shipMethodName',
        'content' => 'content'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'package_identifier' => 'setPackageIdentifier',
        'tracking_number' => 'setTrackingNumber',
        'ship_method' => 'setShipMethod',
        'ship_method_name' => 'setShipMethodName',
        'content' => 'setContent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'package_identifier' => 'getPackageIdentifier',
        'tracking_number' => 'getTrackingNumber',
        'ship_method' => 'getShipMethod',
        'ship_method_name' => 'getShipMethodName',
        'content' => 'getContent'
    ];


    
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
        $this->container['package_identifier'] = $data['package_identifier'] ?? null;
        $this->container['tracking_number'] = $data['tracking_number'] ?? null;
        $this->container['ship_method'] = $data['ship_method'] ?? null;
        $this->container['ship_method_name'] = $data['ship_method_name'] ?? null;
        $this->container['content'] = $data['content'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['content'] === null) {
            $invalidProperties[] = "'content' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets package_identifier
     *
     * @return string|null
     */
    public function getPackageIdentifier()
    {
        return $this->container['package_identifier'];
    }

    /**
     * Sets package_identifier
     *
     * @param string|null $package_identifier Identifier for the package. The first package will be 001, the second 002, and so on. This number is used as a reference to refer to this package from the pallet level.
     *
     * @return self
     */
    public function setPackageIdentifier($package_identifier)
    {
        $this->container['package_identifier'] = $package_identifier;

        return $this;
    }
    /**
     * Gets tracking_number
     *
     * @return string|null
     */
    public function getTrackingNumber()
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number
     *
     * @param string|null $tracking_number Package tracking identifier from the shipping carrier.
     *
     * @return self
     */
    public function setTrackingNumber($tracking_number)
    {
        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }
    /**
     * Gets ship_method
     *
     * @return string|null
     */
    public function getShipMethod()
    {
        return $this->container['ship_method'];
    }

    /**
     * Sets ship_method
     *
     * @param string|null $ship_method Ship method to be used for shipping the order. Amazon defines Ship Method Codes indicating shipping carrier and shipment service level. Ship Method Codes are case and format sensitive. The same ship method code should returned on the shipment confirmation. Note that the Ship Method Codes are vendor specific and will be provided to each vendor during the implementation.
     *
     * @return self
     */
    public function setShipMethod($ship_method)
    {
        $this->container['ship_method'] = $ship_method;

        return $this;
    }
    /**
     * Gets ship_method_name
     *
     * @return string|null
     */
    public function getShipMethodName()
    {
        return $this->container['ship_method_name'];
    }

    /**
     * Sets ship_method_name
     *
     * @param string|null $ship_method_name Shipping method name for internal reference.
     *
     * @return self
     */
    public function setShipMethodName($ship_method_name)
    {
        $this->container['ship_method_name'] = $ship_method_name;

        return $this;
    }
    /**
     * Gets content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string $content This field will contain the Base64encoded string of the shipment label content.
     *
     * @return self
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }
}


