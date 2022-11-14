<?php
/**
 * Recurrence
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Services
 *
 * With the Services API, you can build applications that help service providers get and modify their service orders and manage their resources.
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

namespace SellingPartnerApi\Model\ServiceV1;
use SellingPartnerApi\Model\BaseModel;
use \ArrayAccess;
use \SellingPartnerApi\Model\ModelInterface;
use \SellingPartnerApi\ObjectSerializer;

/**
 * Recurrence Class Doc Comment
 *
 * @category Class
 * @description Repeated occurrence of an event in a time range.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Recurrence extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Recurrence';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'end_time' => 'string',
        'days_of_week' => '\SellingPartnerApi\Model\ServiceV1\DayOfWeek[]',
        'days_of_month' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'end_time' => null,
        'days_of_week' => null,
        'days_of_month' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'end_time' => 'endTime',
        'days_of_week' => 'daysOfWeek',
        'days_of_month' => 'daysOfMonth'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'end_time' => 'setEndTime',
        'days_of_week' => 'setDaysOfWeek',
        'days_of_month' => 'setDaysOfMonth'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'end_time' => 'getEndTime',
        'days_of_week' => 'getDaysOfWeek',
        'days_of_month' => 'getDaysOfMonth'
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
        $this->container['end_time'] = $data['end_time'] ?? null;
        $this->container['days_of_week'] = $data['days_of_week'] ?? null;
        $this->container['days_of_month'] = $data['days_of_month'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['end_time'] === null) {
            $invalidProperties[] = "'end_time' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets end_time
     *
     * @return string
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     *
     * @param string $end_time End time of the recurrence.
     *
     * @return self
     */
    public function setEndTime($end_time)
    {
        $this->container['end_time'] = $end_time;

        return $this;
    }
    /**
     * Gets days_of_week
     *
     * @return \SellingPartnerApi\Model\ServiceV1\DayOfWeek[]|null
     */
    public function getDaysOfWeek()
    {
        return $this->container['days_of_week'];
    }

    /**
     * Sets days_of_week
     *
     * @param \SellingPartnerApi\Model\ServiceV1\DayOfWeek[]|null $days_of_week Days of the week when recurrence is valid. If the schedule is valid every Monday, input will only contain `MONDAY` in the list.
     *
     * @return self
     */
    public function setDaysOfWeek($days_of_week)
    {
        $this->container['days_of_week'] = $days_of_week;

        return $this;
    }
    /**
     * Gets days_of_month
     *
     * @return int[]|null
     */
    public function getDaysOfMonth()
    {
        return $this->container['days_of_month'];
    }

    /**
     * Sets days_of_month
     *
     * @param int[]|null $days_of_month Days of the month when recurrence is valid.
     *
     * @return self
     */
    public function setDaysOfMonth($days_of_month)
    {
        $this->container['days_of_month'] = $days_of_month;

        return $this;
    }
}


