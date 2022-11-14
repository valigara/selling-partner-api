<?php
/**
 * Container
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Shipping
 *
 * Provides programmatic access to Amazon Shipping APIs.  **Note:** If you are new to the Amazon Shipping API, refer to the latest version of <a href=\"https://developer-docs.amazon.com/amazon-shipping/docs/shipping-api-v2-reference\">Amazon Shipping API (v2)</a> on the <a href=\"https://developer-docs.amazon.com/amazon-shipping/\">Amazon Shipping Developer Documentation</a> site.
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\ShippingV1;
use SellingPartnerApi\Model\BaseModel;
use \ArrayAccess;
use \SellingPartnerApi\Model\ModelInterface;
use \SellingPartnerApi\ObjectSerializer;

/**
 * Container Class Doc Comment
 *
 * @category Class
 * @description Container in the shipment.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Container extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Container';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'container_type' => 'string',
        'container_reference_id' => 'string',
        'value' => '\SellingPartnerApi\Model\ShippingV1\Currency',
        'dimensions' => '\SellingPartnerApi\Model\ShippingV1\Dimensions',
        'items' => '\SellingPartnerApi\Model\ShippingV1\ContainerItem[]',
        'weight' => '\SellingPartnerApi\Model\ShippingV1\Weight'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'container_type' => null,
        'container_reference_id' => null,
        'value' => null,
        'dimensions' => null,
        'items' => null,
        'weight' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'container_type' => 'containerType',
        'container_reference_id' => 'containerReferenceId',
        'value' => 'value',
        'dimensions' => 'dimensions',
        'items' => 'items',
        'weight' => 'weight'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'container_type' => 'setContainerType',
        'container_reference_id' => 'setContainerReferenceId',
        'value' => 'setValue',
        'dimensions' => 'setDimensions',
        'items' => 'setItems',
        'weight' => 'setWeight'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'container_type' => 'getContainerType',
        'container_reference_id' => 'getContainerReferenceId',
        'value' => 'getValue',
        'dimensions' => 'getDimensions',
        'items' => 'getItems',
        'weight' => 'getWeight'
    ];



    const CONTAINER_TYPE_PACKAGE = 'PACKAGE';
    
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getContainerTypeAllowableValues()
    {
        $baseVals = [
            self::CONTAINER_TYPE_PACKAGE,
        ];

        // This is necessary because Amazon does not consistently capitalize their
        // enum values, so we do case-insensitive enum value validation in ObjectSerializer
        return array_map(function ($val) { return strtoupper($val); }, $baseVals);
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
        $this->container['container_type'] = $data['container_type'] ?? null;
        $this->container['container_reference_id'] = $data['container_reference_id'] ?? null;
        $this->container['value'] = $data['value'] ?? null;
        $this->container['dimensions'] = $data['dimensions'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
        $this->container['weight'] = $data['weight'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        $allowedValues = $this->getContainerTypeAllowableValues();
        if (
            !is_null($this->container['container_type']) &&
            !in_array(strtoupper($this->container['container_type']), $allowedValues, true)
        ) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'container_type', must be one of '%s'",
                $this->container['container_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['container_reference_id'] === null) {
            $invalidProperties[] = "'container_reference_id' can't be null";
        }
        if ((mb_strlen($this->container['container_reference_id']) > 40)) {
            $invalidProperties[] = "invalid value for 'container_reference_id', the character length must be smaller than or equal to 40.";
        }

        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        if ($this->container['dimensions'] === null) {
            $invalidProperties[] = "'dimensions' can't be null";
        }
        if ($this->container['items'] === null) {
            $invalidProperties[] = "'items' can't be null";
        }
        if ($this->container['weight'] === null) {
            $invalidProperties[] = "'weight' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets container_type
     *
     * @return string|null
     */
    public function getContainerType()
    {
        return $this->container['container_type'];
    }

    /**
     * Sets container_type
     *
     * @param string|null $container_type The type of physical container being used. (always 'PACKAGE')
     *
     * @return self
     */
    public function setContainerType($container_type)
    {
        $allowedValues = $this->getContainerTypeAllowableValues();
        if (!is_null($container_type) &&!in_array(strtoupper($container_type), $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'container_type', must be one of '%s'",
                    $container_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['container_type'] = $container_type;

        return $this;
    }
    /**
     * Gets container_reference_id
     *
     * @return string
     */
    public function getContainerReferenceId()
    {
        return $this->container['container_reference_id'];
    }

    /**
     * Sets container_reference_id
     *
     * @param string $container_reference_id An identifier for the container. This must be unique within all the containers in the same shipment.
     *
     * @return self
     */
    public function setContainerReferenceId($container_reference_id)
    {
        if ((mb_strlen($container_reference_id) > 40)) {
            throw new \InvalidArgumentException('invalid length for $container_reference_id when calling Container., must be smaller than or equal to 40.');
        }

        $this->container['container_reference_id'] = $container_reference_id;

        return $this;
    }
    /**
     * Gets value
     *
     * @return \SellingPartnerApi\Model\ShippingV1\Currency
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param \SellingPartnerApi\Model\ShippingV1\Currency $value value
     *
     * @return self
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }
    /**
     * Gets dimensions
     *
     * @return \SellingPartnerApi\Model\ShippingV1\Dimensions
     */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
     * Sets dimensions
     *
     * @param \SellingPartnerApi\Model\ShippingV1\Dimensions $dimensions dimensions
     *
     * @return self
     */
    public function setDimensions($dimensions)
    {
        $this->container['dimensions'] = $dimensions;

        return $this;
    }
    /**
     * Gets items
     *
     * @return \SellingPartnerApi\Model\ShippingV1\ContainerItem[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \SellingPartnerApi\Model\ShippingV1\ContainerItem[] $items A list of the items in the container.
     *
     * @return self
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }
    /**
     * Gets weight
     *
     * @return \SellingPartnerApi\Model\ShippingV1\Weight
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param \SellingPartnerApi\Model\ShippingV1\Weight $weight weight
     *
     * @return self
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }
}


