<?php
/**
 * PackageTrackingDetails
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner APIs for Fulfillment Outbound
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * The version of the OpenAPI document: 2020-07-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\FbaOutboundV20200701;
use SellingPartnerApi\Model\BaseModel;
use \ArrayAccess;
use \SellingPartnerApi\Model\ModelInterface;
use \SellingPartnerApi\ObjectSerializer;

/**
 * PackageTrackingDetails Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class PackageTrackingDetails extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PackageTrackingDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'package_number' => 'int',
        'tracking_number' => 'string',
        'customer_tracking_link' => 'string',
        'carrier_code' => 'string',
        'carrier_phone_number' => 'string',
        'carrier_url' => 'string',
        'ship_date' => 'string',
        'estimated_arrival_date' => 'string',
        'ship_to_address' => '\SellingPartnerApi\Model\FbaOutboundV20200701\TrackingAddress',
        'current_status' => '\SellingPartnerApi\Model\FbaOutboundV20200701\CurrentStatus',
        'current_status_description' => 'string',
        'signed_for_by' => 'string',
        'additional_location_info' => '\SellingPartnerApi\Model\FbaOutboundV20200701\AdditionalLocationInfo',
        'tracking_events' => '\SellingPartnerApi\Model\FbaOutboundV20200701\TrackingEvent[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'package_number' => 'int32',
        'tracking_number' => null,
        'customer_tracking_link' => null,
        'carrier_code' => null,
        'carrier_phone_number' => null,
        'carrier_url' => null,
        'ship_date' => null,
        'estimated_arrival_date' => null,
        'ship_to_address' => null,
        'current_status' => null,
        'current_status_description' => null,
        'signed_for_by' => null,
        'additional_location_info' => null,
        'tracking_events' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'package_number' => 'packageNumber',
        'tracking_number' => 'trackingNumber',
        'customer_tracking_link' => 'customerTrackingLink',
        'carrier_code' => 'carrierCode',
        'carrier_phone_number' => 'carrierPhoneNumber',
        'carrier_url' => 'carrierURL',
        'ship_date' => 'shipDate',
        'estimated_arrival_date' => 'estimatedArrivalDate',
        'ship_to_address' => 'shipToAddress',
        'current_status' => 'currentStatus',
        'current_status_description' => 'currentStatusDescription',
        'signed_for_by' => 'signedForBy',
        'additional_location_info' => 'additionalLocationInfo',
        'tracking_events' => 'trackingEvents'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'package_number' => 'setPackageNumber',
        'tracking_number' => 'setTrackingNumber',
        'customer_tracking_link' => 'setCustomerTrackingLink',
        'carrier_code' => 'setCarrierCode',
        'carrier_phone_number' => 'setCarrierPhoneNumber',
        'carrier_url' => 'setCarrierUrl',
        'ship_date' => 'setShipDate',
        'estimated_arrival_date' => 'setEstimatedArrivalDate',
        'ship_to_address' => 'setShipToAddress',
        'current_status' => 'setCurrentStatus',
        'current_status_description' => 'setCurrentStatusDescription',
        'signed_for_by' => 'setSignedForBy',
        'additional_location_info' => 'setAdditionalLocationInfo',
        'tracking_events' => 'setTrackingEvents'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'package_number' => 'getPackageNumber',
        'tracking_number' => 'getTrackingNumber',
        'customer_tracking_link' => 'getCustomerTrackingLink',
        'carrier_code' => 'getCarrierCode',
        'carrier_phone_number' => 'getCarrierPhoneNumber',
        'carrier_url' => 'getCarrierUrl',
        'ship_date' => 'getShipDate',
        'estimated_arrival_date' => 'getEstimatedArrivalDate',
        'ship_to_address' => 'getShipToAddress',
        'current_status' => 'getCurrentStatus',
        'current_status_description' => 'getCurrentStatusDescription',
        'signed_for_by' => 'getSignedForBy',
        'additional_location_info' => 'getAdditionalLocationInfo',
        'tracking_events' => 'getTrackingEvents'
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
        $this->container['package_number'] = $data['package_number'] ?? null;
        $this->container['tracking_number'] = $data['tracking_number'] ?? null;
        $this->container['customer_tracking_link'] = $data['customer_tracking_link'] ?? null;
        $this->container['carrier_code'] = $data['carrier_code'] ?? null;
        $this->container['carrier_phone_number'] = $data['carrier_phone_number'] ?? null;
        $this->container['carrier_url'] = $data['carrier_url'] ?? null;
        $this->container['ship_date'] = $data['ship_date'] ?? null;
        $this->container['estimated_arrival_date'] = $data['estimated_arrival_date'] ?? null;
        $this->container['ship_to_address'] = $data['ship_to_address'] ?? null;
        $this->container['current_status'] = $data['current_status'] ?? null;
        $this->container['current_status_description'] = $data['current_status_description'] ?? null;
        $this->container['signed_for_by'] = $data['signed_for_by'] ?? null;
        $this->container['additional_location_info'] = $data['additional_location_info'] ?? null;
        $this->container['tracking_events'] = $data['tracking_events'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['package_number'] === null) {
            $invalidProperties[] = "'package_number' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets package_number
     *
     * @return int
     */
    public function getPackageNumber()
    {
        return $this->container['package_number'];
    }

    /**
     * Sets package_number
     *
     * @param int $package_number The package identifier.
     *
     * @return self
     */
    public function setPackageNumber($package_number)
    {
        $this->container['package_number'] = $package_number;

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
     * @param string|null $tracking_number The tracking number for the package.
     *
     * @return self
     */
    public function setTrackingNumber($tracking_number)
    {
        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }
    /**
     * Gets customer_tracking_link
     *
     * @return string|null
     */
    public function getCustomerTrackingLink()
    {
        return $this->container['customer_tracking_link'];
    }

    /**
     * Sets customer_tracking_link
     *
     * @param string|null $customer_tracking_link Link on swiship.com that allows customers to track the package.
     *
     * @return self
     */
    public function setCustomerTrackingLink($customer_tracking_link)
    {
        $this->container['customer_tracking_link'] = $customer_tracking_link;

        return $this;
    }
    /**
     * Gets carrier_code
     *
     * @return string|null
     */
    public function getCarrierCode()
    {
        return $this->container['carrier_code'];
    }

    /**
     * Sets carrier_code
     *
     * @param string|null $carrier_code The name of the carrier.
     *
     * @return self
     */
    public function setCarrierCode($carrier_code)
    {
        $this->container['carrier_code'] = $carrier_code;

        return $this;
    }
    /**
     * Gets carrier_phone_number
     *
     * @return string|null
     */
    public function getCarrierPhoneNumber()
    {
        return $this->container['carrier_phone_number'];
    }

    /**
     * Sets carrier_phone_number
     *
     * @param string|null $carrier_phone_number The phone number of the carrier.
     *
     * @return self
     */
    public function setCarrierPhoneNumber($carrier_phone_number)
    {
        $this->container['carrier_phone_number'] = $carrier_phone_number;

        return $this;
    }
    /**
     * Gets carrier_url
     *
     * @return string|null
     */
    public function getCarrierUrl()
    {
        return $this->container['carrier_url'];
    }

    /**
     * Sets carrier_url
     *
     * @param string|null $carrier_url The URL of the carrier's website.
     *
     * @return self
     */
    public function setCarrierUrl($carrier_url)
    {
        $this->container['carrier_url'] = $carrier_url;

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
     * @param string|null $ship_date A datetime string in ISO 8601 format.
     *
     * @return self
     */
    public function setShipDate($ship_date)
    {
        $this->container['ship_date'] = $ship_date;

        return $this;
    }
    /**
     * Gets estimated_arrival_date
     *
     * @return string|null
     */
    public function getEstimatedArrivalDate()
    {
        return $this->container['estimated_arrival_date'];
    }

    /**
     * Sets estimated_arrival_date
     *
     * @param string|null $estimated_arrival_date A datetime string in ISO 8601 format.
     *
     * @return self
     */
    public function setEstimatedArrivalDate($estimated_arrival_date)
    {
        $this->container['estimated_arrival_date'] = $estimated_arrival_date;

        return $this;
    }
    /**
     * Gets ship_to_address
     *
     * @return \SellingPartnerApi\Model\FbaOutboundV20200701\TrackingAddress|null
     */
    public function getShipToAddress()
    {
        return $this->container['ship_to_address'];
    }

    /**
     * Sets ship_to_address
     *
     * @param \SellingPartnerApi\Model\FbaOutboundV20200701\TrackingAddress|null $ship_to_address ship_to_address
     *
     * @return self
     */
    public function setShipToAddress($ship_to_address)
    {
        $this->container['ship_to_address'] = $ship_to_address;

        return $this;
    }
    /**
     * Gets current_status
     *
     * @return \SellingPartnerApi\Model\FbaOutboundV20200701\CurrentStatus|null
     */
    public function getCurrentStatus()
    {
        return $this->container['current_status'];
    }

    /**
     * Sets current_status
     *
     * @param \SellingPartnerApi\Model\FbaOutboundV20200701\CurrentStatus|null $current_status current_status
     *
     * @return self
     */
    public function setCurrentStatus($current_status)
    {
        $this->container['current_status'] = $current_status;

        return $this;
    }
    /**
     * Gets current_status_description
     *
     * @return string|null
     */
    public function getCurrentStatusDescription()
    {
        return $this->container['current_status_description'];
    }

    /**
     * Sets current_status_description
     *
     * @param string|null $current_status_description Description corresponding to the CurrentStatus value.
     *
     * @return self
     */
    public function setCurrentStatusDescription($current_status_description)
    {
        $this->container['current_status_description'] = $current_status_description;

        return $this;
    }
    /**
     * Gets signed_for_by
     *
     * @return string|null
     */
    public function getSignedForBy()
    {
        return $this->container['signed_for_by'];
    }

    /**
     * Sets signed_for_by
     *
     * @param string|null $signed_for_by The name of the person who signed for the package.
     *
     * @return self
     */
    public function setSignedForBy($signed_for_by)
    {
        $this->container['signed_for_by'] = $signed_for_by;

        return $this;
    }
    /**
     * Gets additional_location_info
     *
     * @return \SellingPartnerApi\Model\FbaOutboundV20200701\AdditionalLocationInfo|null
     */
    public function getAdditionalLocationInfo()
    {
        return $this->container['additional_location_info'];
    }

    /**
     * Sets additional_location_info
     *
     * @param \SellingPartnerApi\Model\FbaOutboundV20200701\AdditionalLocationInfo|null $additional_location_info additional_location_info
     *
     * @return self
     */
    public function setAdditionalLocationInfo($additional_location_info)
    {
        $this->container['additional_location_info'] = $additional_location_info;

        return $this;
    }
    /**
     * Gets tracking_events
     *
     * @return \SellingPartnerApi\Model\FbaOutboundV20200701\TrackingEvent[]|null
     */
    public function getTrackingEvents()
    {
        return $this->container['tracking_events'];
    }

    /**
     * Sets tracking_events
     *
     * @param \SellingPartnerApi\Model\FbaOutboundV20200701\TrackingEvent[]|null $tracking_events An array of tracking event information.
     *
     * @return self
     */
    public function setTrackingEvents($tracking_events)
    {
        $this->container['tracking_events'] = $tracking_events;

        return $this;
    }
}


