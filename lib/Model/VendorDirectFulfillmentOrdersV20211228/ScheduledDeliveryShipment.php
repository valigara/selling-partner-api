<?php
/**
 * ScheduledDeliveryShipment
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Direct Fulfillment Orders
 *
 * The Selling Partner API for Direct Fulfillment Orders provides programmatic access to a direct fulfillment vendor's order data.
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

namespace SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV20211228;
use SellingPartnerApi\Model\BaseModel;
use \ArrayAccess;
use \SellingPartnerApi\Model\ModelInterface;
use \SellingPartnerApi\ObjectSerializer;

/**
 * ScheduledDeliveryShipment Class Doc Comment
 *
 * @category Class
 * @description Dates for the scheduled delivery shipments.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ScheduledDeliveryShipment extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ScheduledDeliveryShipment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'scheduled_delivery_service_type' => 'string',
        'earliest_nominated_delivery_date' => 'string',
        'latest_nominated_delivery_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'scheduled_delivery_service_type' => null,
        'earliest_nominated_delivery_date' => null,
        'latest_nominated_delivery_date' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'scheduled_delivery_service_type' => 'scheduledDeliveryServiceType',
        'earliest_nominated_delivery_date' => 'earliestNominatedDeliveryDate',
        'latest_nominated_delivery_date' => 'latestNominatedDeliveryDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'scheduled_delivery_service_type' => 'setScheduledDeliveryServiceType',
        'earliest_nominated_delivery_date' => 'setEarliestNominatedDeliveryDate',
        'latest_nominated_delivery_date' => 'setLatestNominatedDeliveryDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'scheduled_delivery_service_type' => 'getScheduledDeliveryServiceType',
        'earliest_nominated_delivery_date' => 'getEarliestNominatedDeliveryDate',
        'latest_nominated_delivery_date' => 'getLatestNominatedDeliveryDate'
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
        $this->container['scheduled_delivery_service_type'] = $data['scheduled_delivery_service_type'] ?? null;
        $this->container['earliest_nominated_delivery_date'] = $data['earliest_nominated_delivery_date'] ?? null;
        $this->container['latest_nominated_delivery_date'] = $data['latest_nominated_delivery_date'] ?? null;
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
     * Gets scheduled_delivery_service_type
     *
     * @return string|null
     */
    public function getScheduledDeliveryServiceType()
    {
        return $this->container['scheduled_delivery_service_type'];
    }

    /**
     * Sets scheduled_delivery_service_type
     *
     * @param string|null $scheduled_delivery_service_type Scheduled delivery service type.
     *
     * @return self
     */
    public function setScheduledDeliveryServiceType($scheduled_delivery_service_type)
    {
        $this->container['scheduled_delivery_service_type'] = $scheduled_delivery_service_type;

        return $this;
    }
    /**
     * Gets earliest_nominated_delivery_date
     *
     * @return string|null
     */
    public function getEarliestNominatedDeliveryDate()
    {
        return $this->container['earliest_nominated_delivery_date'];
    }

    /**
     * Sets earliest_nominated_delivery_date
     *
     * @param string|null $earliest_nominated_delivery_date Earliest nominated delivery date for the scheduled delivery. Must be in ISO 8601 format.
     *
     * @return self
     */
    public function setEarliestNominatedDeliveryDate($earliest_nominated_delivery_date)
    {
        $this->container['earliest_nominated_delivery_date'] = $earliest_nominated_delivery_date;

        return $this;
    }
    /**
     * Gets latest_nominated_delivery_date
     *
     * @return string|null
     */
    public function getLatestNominatedDeliveryDate()
    {
        return $this->container['latest_nominated_delivery_date'];
    }

    /**
     * Sets latest_nominated_delivery_date
     *
     * @param string|null $latest_nominated_delivery_date Latest nominated delivery date for the scheduled delivery. Must be in ISO 8601 format.
     *
     * @return self
     */
    public function setLatestNominatedDeliveryDate($latest_nominated_delivery_date)
    {
        $this->container['latest_nominated_delivery_date'] = $latest_nominated_delivery_date;

        return $this;
    }
}


