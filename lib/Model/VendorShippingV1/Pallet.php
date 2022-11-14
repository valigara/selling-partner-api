<?php
/**
 * Pallet
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Retail Procurement Shipments
 *
 * The Selling Partner API for Retail Procurement Shipments provides programmatic access to retail shipping data for vendors.
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

namespace SellingPartnerApi\Model\VendorShippingV1;
use SellingPartnerApi\Model\BaseModel;
use \ArrayAccess;
use \SellingPartnerApi\Model\ModelInterface;
use \SellingPartnerApi\ObjectSerializer;

/**
 * Pallet Class Doc Comment
 *
 * @category Class
 * @description Details of the Pallet/Tare being shipped.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Pallet extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Pallet';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pallet_identifiers' => '\SellingPartnerApi\Model\VendorShippingV1\ContainerIdentification[]',
        'tier' => 'int',
        'block' => 'int',
        'dimensions' => '\SellingPartnerApi\Model\VendorShippingV1\Dimensions',
        'weight' => '\SellingPartnerApi\Model\VendorShippingV1\Weight',
        'carton_reference_details' => '\SellingPartnerApi\Model\VendorShippingV1\CartonReferenceDetails',
        'items' => '\SellingPartnerApi\Model\VendorShippingV1\ContainerItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pallet_identifiers' => null,
        'tier' => null,
        'block' => null,
        'dimensions' => null,
        'weight' => null,
        'carton_reference_details' => null,
        'items' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'pallet_identifiers' => 'palletIdentifiers',
        'tier' => 'tier',
        'block' => 'block',
        'dimensions' => 'dimensions',
        'weight' => 'weight',
        'carton_reference_details' => 'cartonReferenceDetails',
        'items' => 'items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'pallet_identifiers' => 'setPalletIdentifiers',
        'tier' => 'setTier',
        'block' => 'setBlock',
        'dimensions' => 'setDimensions',
        'weight' => 'setWeight',
        'carton_reference_details' => 'setCartonReferenceDetails',
        'items' => 'setItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pallet_identifiers' => 'getPalletIdentifiers',
        'tier' => 'getTier',
        'block' => 'getBlock',
        'dimensions' => 'getDimensions',
        'weight' => 'getWeight',
        'carton_reference_details' => 'getCartonReferenceDetails',
        'items' => 'getItems'
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
        $this->container['pallet_identifiers'] = $data['pallet_identifiers'] ?? null;
        $this->container['tier'] = $data['tier'] ?? null;
        $this->container['block'] = $data['block'] ?? null;
        $this->container['dimensions'] = $data['dimensions'] ?? null;
        $this->container['weight'] = $data['weight'] ?? null;
        $this->container['carton_reference_details'] = $data['carton_reference_details'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['pallet_identifiers'] === null) {
            $invalidProperties[] = "'pallet_identifiers' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets pallet_identifiers
     *
     * @return \SellingPartnerApi\Model\VendorShippingV1\ContainerIdentification[]
     */
    public function getPalletIdentifiers()
    {
        return $this->container['pallet_identifiers'];
    }

    /**
     * Sets pallet_identifiers
     *
     * @param \SellingPartnerApi\Model\VendorShippingV1\ContainerIdentification[] $pallet_identifiers A list of pallet identifiers.
     *
     * @return self
     */
    public function setPalletIdentifiers($pallet_identifiers)
    {
        $this->container['pallet_identifiers'] = $pallet_identifiers;

        return $this;
    }
    /**
     * Gets tier
     *
     * @return int|null
     */
    public function getTier()
    {
        return $this->container['tier'];
    }

    /**
     * Sets tier
     *
     * @param int|null $tier Number of layers per pallet.
     *
     * @return self
     */
    public function setTier($tier)
    {
        $this->container['tier'] = $tier;

        return $this;
    }
    /**
     * Gets block
     *
     * @return int|null
     */
    public function getBlock()
    {
        return $this->container['block'];
    }

    /**
     * Sets block
     *
     * @param int|null $block Number of cartons per layer on the pallet.
     *
     * @return self
     */
    public function setBlock($block)
    {
        $this->container['block'] = $block;

        return $this;
    }
    /**
     * Gets dimensions
     *
     * @return \SellingPartnerApi\Model\VendorShippingV1\Dimensions|null
     */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
     * Sets dimensions
     *
     * @param \SellingPartnerApi\Model\VendorShippingV1\Dimensions|null $dimensions dimensions
     *
     * @return self
     */
    public function setDimensions($dimensions)
    {
        $this->container['dimensions'] = $dimensions;

        return $this;
    }
    /**
     * Gets weight
     *
     * @return \SellingPartnerApi\Model\VendorShippingV1\Weight|null
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param \SellingPartnerApi\Model\VendorShippingV1\Weight|null $weight weight
     *
     * @return self
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }
    /**
     * Gets carton_reference_details
     *
     * @return \SellingPartnerApi\Model\VendorShippingV1\CartonReferenceDetails|null
     */
    public function getCartonReferenceDetails()
    {
        return $this->container['carton_reference_details'];
    }

    /**
     * Sets carton_reference_details
     *
     * @param \SellingPartnerApi\Model\VendorShippingV1\CartonReferenceDetails|null $carton_reference_details carton_reference_details
     *
     * @return self
     */
    public function setCartonReferenceDetails($carton_reference_details)
    {
        $this->container['carton_reference_details'] = $carton_reference_details;

        return $this;
    }
    /**
     * Gets items
     *
     * @return \SellingPartnerApi\Model\VendorShippingV1\ContainerItem[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \SellingPartnerApi\Model\VendorShippingV1\ContainerItem[]|null $items A list of container item details.
     *
     * @return self
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }
}


