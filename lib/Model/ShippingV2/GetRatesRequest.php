<?php
/**
 * GetRatesRequest
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Amazon Shipping API
 *
 * The Amazon Shipping API is designed to support outbound shipping use cases both for orders originating on Amazon-owned marketplaces as well as external channels/marketplaces. With these APIs, you can request shipping rates, create shipments, cancel shipments, and track shipments.
 *
 * The version of the OpenAPI document: v2
 * Contact: swa-api-core@amazon.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\ShippingV2;
use SellingPartnerApi\Model\BaseModel;
use \ArrayAccess;
use \SellingPartnerApi\Model\ModelInterface;
use \SellingPartnerApi\ObjectSerializer;

/**
 * GetRatesRequest Class Doc Comment
 *
 * @category Class
 * @description The request schema for the getRates operation. When the channelType is Amazon, the shipTo address is not required and will be ignored.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class GetRatesRequest extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetRatesRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ship_to' => '\SellingPartnerApi\Model\ShippingV2\Address',
        'ship_from' => '\SellingPartnerApi\Model\ShippingV2\Address',
        'return_to' => '\SellingPartnerApi\Model\ShippingV2\Address',
        'ship_date' => 'string',
        'packages' => '\SellingPartnerApi\Model\ShippingV2\Package[]',
        'value_added_services' => '\SellingPartnerApi\Model\ShippingV2\ValueAddedServiceDetails',
        'tax_details' => '\SellingPartnerApi\Model\ShippingV2\TaxDetail[]',
        'channel_details' => '\SellingPartnerApi\Model\ShippingV2\ChannelDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ship_to' => null,
        'ship_from' => null,
        'return_to' => null,
        'ship_date' => null,
        'packages' => null,
        'value_added_services' => null,
        'tax_details' => null,
        'channel_details' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'ship_to' => 'shipTo',
        'ship_from' => 'shipFrom',
        'return_to' => 'returnTo',
        'ship_date' => 'shipDate',
        'packages' => 'packages',
        'value_added_services' => 'valueAddedServices',
        'tax_details' => 'taxDetails',
        'channel_details' => 'channelDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'ship_to' => 'setShipTo',
        'ship_from' => 'setShipFrom',
        'return_to' => 'setReturnTo',
        'ship_date' => 'setShipDate',
        'packages' => 'setPackages',
        'value_added_services' => 'setValueAddedServices',
        'tax_details' => 'setTaxDetails',
        'channel_details' => 'setChannelDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ship_to' => 'getShipTo',
        'ship_from' => 'getShipFrom',
        'return_to' => 'getReturnTo',
        'ship_date' => 'getShipDate',
        'packages' => 'getPackages',
        'value_added_services' => 'getValueAddedServices',
        'tax_details' => 'getTaxDetails',
        'channel_details' => 'getChannelDetails'
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
        $this->container['ship_to'] = $data['ship_to'] ?? null;
        $this->container['ship_from'] = $data['ship_from'] ?? null;
        $this->container['return_to'] = $data['return_to'] ?? null;
        $this->container['ship_date'] = $data['ship_date'] ?? null;
        $this->container['packages'] = $data['packages'] ?? null;
        $this->container['value_added_services'] = $data['value_added_services'] ?? null;
        $this->container['tax_details'] = $data['tax_details'] ?? null;
        $this->container['channel_details'] = $data['channel_details'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['ship_from'] === null) {
            $invalidProperties[] = "'ship_from' can't be null";
        }
        if ($this->container['packages'] === null) {
            $invalidProperties[] = "'packages' can't be null";
        }
        if ($this->container['channel_details'] === null) {
            $invalidProperties[] = "'channel_details' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets ship_to
     *
     * @return \SellingPartnerApi\Model\ShippingV2\Address|null
     */
    public function getShipTo()
    {
        return $this->container['ship_to'];
    }

    /**
     * Sets ship_to
     *
     * @param \SellingPartnerApi\Model\ShippingV2\Address|null $ship_to ship_to
     *
     * @return self
     */
    public function setShipTo($ship_to)
    {
        $this->container['ship_to'] = $ship_to;

        return $this;
    }
    /**
     * Gets ship_from
     *
     * @return \SellingPartnerApi\Model\ShippingV2\Address
     */
    public function getShipFrom()
    {
        return $this->container['ship_from'];
    }

    /**
     * Sets ship_from
     *
     * @param \SellingPartnerApi\Model\ShippingV2\Address $ship_from ship_from
     *
     * @return self
     */
    public function setShipFrom($ship_from)
    {
        $this->container['ship_from'] = $ship_from;

        return $this;
    }
    /**
     * Gets return_to
     *
     * @return \SellingPartnerApi\Model\ShippingV2\Address|null
     */
    public function getReturnTo()
    {
        return $this->container['return_to'];
    }

    /**
     * Sets return_to
     *
     * @param \SellingPartnerApi\Model\ShippingV2\Address|null $return_to return_to
     *
     * @return self
     */
    public function setReturnTo($return_to)
    {
        $this->container['return_to'] = $return_to;

        return $this;
    }
    /**
     * Gets ship_date
     *
     * @return string|null
     */
    public function getShipDate()
    {
        return $this->container['ship_date'];
    }

    /**
     * Sets ship_date
     *
     * @param string|null $ship_date The ship date and time (the requested pickup). This defaults to the current date and time.
     *
     * @return self
     */
    public function setShipDate($ship_date)
    {
        $this->container['ship_date'] = $ship_date;

        return $this;
    }
    /**
     * Gets packages
     *
     * @return \SellingPartnerApi\Model\ShippingV2\Package[]
     */
    public function getPackages()
    {
        return $this->container['packages'];
    }

    /**
     * Sets packages
     *
     * @param \SellingPartnerApi\Model\ShippingV2\Package[] $packages A list of packages to be shipped through a shipping service offering.
     *
     * @return self
     */
    public function setPackages($packages)
    {
        $this->container['packages'] = $packages;

        return $this;
    }
    /**
     * Gets value_added_services
     *
     * @return \SellingPartnerApi\Model\ShippingV2\ValueAddedServiceDetails|null
     */
    public function getValueAddedServices()
    {
        return $this->container['value_added_services'];
    }

    /**
     * Sets value_added_services
     *
     * @param \SellingPartnerApi\Model\ShippingV2\ValueAddedServiceDetails|null $value_added_services value_added_services
     *
     * @return self
     */
    public function setValueAddedServices($value_added_services)
    {
        $this->container['value_added_services'] = $value_added_services;

        return $this;
    }
    /**
     * Gets tax_details
     *
     * @return \SellingPartnerApi\Model\ShippingV2\TaxDetail[]|null
     */
    public function getTaxDetails()
    {
        return $this->container['tax_details'];
    }

    /**
     * Sets tax_details
     *
     * @param \SellingPartnerApi\Model\ShippingV2\TaxDetail[]|null $tax_details A list of tax detail information.
     *
     * @return self
     */
    public function setTaxDetails($tax_details)
    {
        $this->container['tax_details'] = $tax_details;

        return $this;
    }
    /**
     * Gets channel_details
     *
     * @return \SellingPartnerApi\Model\ShippingV2\ChannelDetails
     */
    public function getChannelDetails()
    {
        return $this->container['channel_details'];
    }

    /**
     * Sets channel_details
     *
     * @param \SellingPartnerApi\Model\ShippingV2\ChannelDetails $channel_details channel_details
     *
     * @return self
     */
    public function setChannelDetails($channel_details)
    {
        $this->container['channel_details'] = $channel_details;

        return $this;
    }
}


