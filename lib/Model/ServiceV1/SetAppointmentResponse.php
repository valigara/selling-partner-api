<?php
/**
 * SetAppointmentResponse
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
 * SetAppointmentResponse Class Doc Comment
 *
 * @category Class
 * @description Response schema for the `addAppointmentForServiceJobByServiceJobId` and `rescheduleAppointmentForServiceJobByServiceJobId` operations.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class SetAppointmentResponse extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SetAppointmentResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'appointment_id' => 'string',
        'warnings' => '\SellingPartnerApi\Model\ServiceV1\Warning[]',
        'errors' => '\SellingPartnerApi\Model\ServiceV1\Error[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'appointment_id' => null,
        'warnings' => null,
        'errors' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'headers' => 'headers',
        'appointment_id' => 'appointmentId',
        'warnings' => 'warnings',
        'errors' => 'errors'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'headers' => 'setHeaders',
        'appointment_id' => 'setAppointmentId',
        'warnings' => 'setWarnings',
        'errors' => 'setErrors'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'headers' => 'getHeaders',
        'appointment_id' => 'getAppointmentId',
        'warnings' => 'getWarnings',
        'errors' => 'getErrors'
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
        $this->container['appointment_id'] = $data['appointment_id'] ?? null;
        $this->container['warnings'] = $data['warnings'] ?? null;
        $this->container['errors'] = $data['errors'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if (!is_null($this->container['appointment_id']) && (mb_strlen($this->container['appointment_id']) > 100)) {
            $invalidProperties[] = "invalid value for 'appointment_id', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['appointment_id']) && (mb_strlen($this->container['appointment_id']) < 5)) {
            $invalidProperties[] = "invalid value for 'appointment_id', the character length must be bigger than or equal to 5.";
        }

        return $invalidProperties;
    }

    /**
     * Gets API response headers
     *
     * @return array[string]
     */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
     * Sets API response headers (only relevant to response models)
     *
     * @param array[string => string] $headers Associative array of response headers.
     *
     * @return self
     */
    public function setHeaders($headers)
    {
        $this->container['headers'] = $headers;
        return $this;
    }

    /**
     * Gets appointment_id
     *
     * @return string|null
     */
    public function getAppointmentId()
    {
        return $this->container['appointment_id'];
    }

    /**
     * Sets appointment_id
     *
     * @param string|null $appointment_id The appointment identifier.
     *
     * @return self
     */
    public function setAppointmentId($appointment_id)
    {
        if (!is_null($appointment_id) && (mb_strlen($appointment_id) > 100)) {
            throw new \InvalidArgumentException('invalid length for $appointment_id when calling SetAppointmentResponse., must be smaller than or equal to 100.');
        }
        if (!is_null($appointment_id) && (mb_strlen($appointment_id) < 5)) {
            throw new \InvalidArgumentException('invalid length for $appointment_id when calling SetAppointmentResponse., must be bigger than or equal to 5.');
        }

        $this->container['appointment_id'] = $appointment_id;

        return $this;
    }
    /**
     * Gets warnings
     *
     * @return \SellingPartnerApi\Model\ServiceV1\Warning[]|null
     */
    public function getWarnings()
    {
        return $this->container['warnings'];
    }

    /**
     * Sets warnings
     *
     * @param \SellingPartnerApi\Model\ServiceV1\Warning[]|null $warnings A list of warnings returned in the sucessful execution response of an API request.
     *
     * @return self
     */
    public function setWarnings($warnings)
    {
        $this->container['warnings'] = $warnings;

        return $this;
    }
    /**
     * Gets errors
     *
     * @return \SellingPartnerApi\Model\ServiceV1\Error[]|null
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param \SellingPartnerApi\Model\ServiceV1\Error[]|null $errors A list of error responses returned when a request is unsuccessful.
     *
     * @return self
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

        return $this;
    }
}


