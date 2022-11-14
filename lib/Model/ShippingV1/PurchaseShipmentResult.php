<?php
/**
 * PurchaseShipmentResult
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
 * PurchaseShipmentResult Class Doc Comment
 *
 * @category Class
 * @description The payload schema for the purchaseShipment operation.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class PurchaseShipmentResult extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PurchaseShipmentResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'shipment_id' => 'string',
        'service_rate' => '\SellingPartnerApi\Model\ShippingV1\ServiceRate',
        'label_results' => '\SellingPartnerApi\Model\ShippingV1\LabelResult[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'shipment_id' => null,
        'service_rate' => null,
        'label_results' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'shipment_id' => 'shipmentId',
        'service_rate' => 'serviceRate',
        'label_results' => 'labelResults'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'shipment_id' => 'setShipmentId',
        'service_rate' => 'setServiceRate',
        'label_results' => 'setLabelResults'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipment_id' => 'getShipmentId',
        'service_rate' => 'getServiceRate',
        'label_results' => 'getLabelResults'
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
        $this->container['shipment_id'] = $data['shipment_id'] ?? null;
        $this->container['service_rate'] = $data['service_rate'] ?? null;
        $this->container['label_results'] = $data['label_results'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['shipment_id'] === null) {
            $invalidProperties[] = "'shipment_id' can't be null";
        }
        if ($this->container['service_rate'] === null) {
            $invalidProperties[] = "'service_rate' can't be null";
        }
        if ($this->container['label_results'] === null) {
            $invalidProperties[] = "'label_results' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets shipment_id
     *
     * @return string
     */
    public function getShipmentId()
    {
        return $this->container['shipment_id'];
    }

    /**
     * Sets shipment_id
     *
     * @param string $shipment_id The unique shipment identifier.
     *
     * @return self
     */
    public function setShipmentId($shipment_id)
    {
        $this->container['shipment_id'] = $shipment_id;

        return $this;
    }
    /**
     * Gets service_rate
     *
     * @return \SellingPartnerApi\Model\ShippingV1\ServiceRate
     */
    public function getServiceRate()
    {
        return $this->container['service_rate'];
    }

    /**
     * Sets service_rate
     *
     * @param \SellingPartnerApi\Model\ShippingV1\ServiceRate $service_rate service_rate
     *
     * @return self
     */
    public function setServiceRate($service_rate)
    {
        $this->container['service_rate'] = $service_rate;

        return $this;
    }
    /**
     * Gets label_results
     *
     * @return \SellingPartnerApi\Model\ShippingV1\LabelResult[]
     */
    public function getLabelResults()
    {
        return $this->container['label_results'];
    }

    /**
     * Sets label_results
     *
     * @param \SellingPartnerApi\Model\ShippingV1\LabelResult[] $label_results A list of label results
     *
     * @return self
     */
    public function setLabelResults($label_results)
    {
        $this->container['label_results'] = $label_results;

        return $this;
    }
}


