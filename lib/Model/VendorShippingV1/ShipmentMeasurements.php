<?php
/**
 * ShipmentMeasurements
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
 * ShipmentMeasurements Class Doc Comment
 *
 * @category Class
 * @description Shipment measurement details.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ShipmentMeasurements extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShipmentMeasurements';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'gross_shipment_weight' => '\SellingPartnerApi\Model\VendorShippingV1\Weight',
        'shipment_volume' => '\SellingPartnerApi\Model\VendorShippingV1\Volume',
        'carton_count' => 'int',
        'pallet_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'gross_shipment_weight' => null,
        'shipment_volume' => null,
        'carton_count' => null,
        'pallet_count' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'gross_shipment_weight' => 'grossShipmentWeight',
        'shipment_volume' => 'shipmentVolume',
        'carton_count' => 'cartonCount',
        'pallet_count' => 'palletCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'gross_shipment_weight' => 'setGrossShipmentWeight',
        'shipment_volume' => 'setShipmentVolume',
        'carton_count' => 'setCartonCount',
        'pallet_count' => 'setPalletCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'gross_shipment_weight' => 'getGrossShipmentWeight',
        'shipment_volume' => 'getShipmentVolume',
        'carton_count' => 'getCartonCount',
        'pallet_count' => 'getPalletCount'
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
        $this->container['gross_shipment_weight'] = $data['gross_shipment_weight'] ?? null;
        $this->container['shipment_volume'] = $data['shipment_volume'] ?? null;
        $this->container['carton_count'] = $data['carton_count'] ?? null;
        $this->container['pallet_count'] = $data['pallet_count'] ?? null;
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
     * Gets gross_shipment_weight
     *
     * @return \SellingPartnerApi\Model\VendorShippingV1\Weight|null
     */
    public function getGrossShipmentWeight()
    {
        return $this->container['gross_shipment_weight'];
    }

    /**
     * Sets gross_shipment_weight
     *
     * @param \SellingPartnerApi\Model\VendorShippingV1\Weight|null $gross_shipment_weight gross_shipment_weight
     *
     * @return self
     */
    public function setGrossShipmentWeight($gross_shipment_weight)
    {
        $this->container['gross_shipment_weight'] = $gross_shipment_weight;

        return $this;
    }
    /**
     * Gets shipment_volume
     *
     * @return \SellingPartnerApi\Model\VendorShippingV1\Volume|null
     */
    public function getShipmentVolume()
    {
        return $this->container['shipment_volume'];
    }

    /**
     * Sets shipment_volume
     *
     * @param \SellingPartnerApi\Model\VendorShippingV1\Volume|null $shipment_volume shipment_volume
     *
     * @return self
     */
    public function setShipmentVolume($shipment_volume)
    {
        $this->container['shipment_volume'] = $shipment_volume;

        return $this;
    }
    /**
     * Gets carton_count
     *
     * @return int|null
     */
    public function getCartonCount()
    {
        return $this->container['carton_count'];
    }

    /**
     * Sets carton_count
     *
     * @param int|null $carton_count Number of cartons present in the shipment. Provide the cartonCount only for unpalletized shipments.
     *
     * @return self
     */
    public function setCartonCount($carton_count)
    {
        $this->container['carton_count'] = $carton_count;

        return $this;
    }
    /**
     * Gets pallet_count
     *
     * @return int|null
     */
    public function getPalletCount()
    {
        return $this->container['pallet_count'];
    }

    /**
     * Sets pallet_count
     *
     * @param int|null $pallet_count Number of pallets present in the shipment. Provide the palletCount only for palletized shipments.
     *
     * @return self
     */
    public function setPalletCount($pallet_count)
    {
        $this->container['pallet_count'] = $pallet_count;

        return $this;
    }
}


