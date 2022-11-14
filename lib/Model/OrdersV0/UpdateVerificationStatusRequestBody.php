<?php
/**
 * UpdateVerificationStatusRequestBody
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Orders
 *
 * The Selling Partner API for Orders helps you programmatically retrieve order information. These APIs let you develop fast, flexible, custom applications in areas like order synchronization, order research, and demand-based decision support tools.
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\OrdersV0;
use SellingPartnerApi\Model\BaseModel;
use \ArrayAccess;
use \SellingPartnerApi\Model\ModelInterface;
use \SellingPartnerApi\ObjectSerializer;

/**
 * UpdateVerificationStatusRequestBody Class Doc Comment
 *
 * @category Class
 * @description The updated values of the VerificationStatus field.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class UpdateVerificationStatusRequestBody extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdateVerificationStatusRequestBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'status' => '\SellingPartnerApi\Model\OrdersV0\VerificationStatus',
        'external_reviewer_id' => 'string',
        'rejection_reason_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'status' => null,
        'external_reviewer_id' => null,
        'rejection_reason_id' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'status' => 'status',
        'external_reviewer_id' => 'externalReviewerId',
        'rejection_reason_id' => 'rejectionReasonId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'status' => 'setStatus',
        'external_reviewer_id' => 'setExternalReviewerId',
        'rejection_reason_id' => 'setRejectionReasonId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'external_reviewer_id' => 'getExternalReviewerId',
        'rejection_reason_id' => 'getRejectionReasonId'
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
        $this->container['status'] = $data['status'] ?? null;
        $this->container['external_reviewer_id'] = $data['external_reviewer_id'] ?? null;
        $this->container['rejection_reason_id'] = $data['rejection_reason_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['external_reviewer_id'] === null) {
            $invalidProperties[] = "'external_reviewer_id' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets status
     *
     * @return \SellingPartnerApi\Model\OrdersV0\VerificationStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \SellingPartnerApi\Model\OrdersV0\VerificationStatus $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }
    /**
     * Gets external_reviewer_id
     *
     * @return string
     */
    public function getExternalReviewerId()
    {
        return $this->container['external_reviewer_id'];
    }

    /**
     * Sets external_reviewer_id
     *
     * @param string $external_reviewer_id The identifier for the order's regulated information reviewer.
     *
     * @return self
     */
    public function setExternalReviewerId($external_reviewer_id)
    {
        $this->container['external_reviewer_id'] = $external_reviewer_id;

        return $this;
    }
    /**
     * Gets rejection_reason_id
     *
     * @return string|null
     */
    public function getRejectionReasonId()
    {
        return $this->container['rejection_reason_id'];
    }

    /**
     * Sets rejection_reason_id
     *
     * @param string|null $rejection_reason_id The unique identifier for the rejection reason used for rejecting the order's regulated information. Only required if the new status is rejected.
     *
     * @return self
     */
    public function setRejectionReasonId($rejection_reason_id)
    {
        $this->container['rejection_reason_id'] = $rejection_reason_id;

        return $this;
    }
}


