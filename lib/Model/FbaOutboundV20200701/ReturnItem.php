<?php
/**
 * ReturnItem
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
 * ReturnItem Class Doc Comment
 *
 * @category Class
 * @description An item that Amazon accepted for return.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ReturnItem extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReturnItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'seller_return_item_id' => 'string',
        'seller_fulfillment_order_item_id' => 'string',
        'amazon_shipment_id' => 'string',
        'seller_return_reason_code' => 'string',
        'return_comment' => 'string',
        'amazon_return_reason_code' => 'string',
        'status' => '\SellingPartnerApi\Model\FbaOutboundV20200701\FulfillmentReturnItemStatus',
        'status_changed_date' => 'string',
        'return_authorization_id' => 'string',
        'return_received_condition' => '\SellingPartnerApi\Model\FbaOutboundV20200701\ReturnItemDisposition',
        'fulfillment_center_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'seller_return_item_id' => null,
        'seller_fulfillment_order_item_id' => null,
        'amazon_shipment_id' => null,
        'seller_return_reason_code' => null,
        'return_comment' => null,
        'amazon_return_reason_code' => null,
        'status' => null,
        'status_changed_date' => null,
        'return_authorization_id' => null,
        'return_received_condition' => null,
        'fulfillment_center_id' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'seller_return_item_id' => 'sellerReturnItemId',
        'seller_fulfillment_order_item_id' => 'sellerFulfillmentOrderItemId',
        'amazon_shipment_id' => 'amazonShipmentId',
        'seller_return_reason_code' => 'sellerReturnReasonCode',
        'return_comment' => 'returnComment',
        'amazon_return_reason_code' => 'amazonReturnReasonCode',
        'status' => 'status',
        'status_changed_date' => 'statusChangedDate',
        'return_authorization_id' => 'returnAuthorizationId',
        'return_received_condition' => 'returnReceivedCondition',
        'fulfillment_center_id' => 'fulfillmentCenterId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'seller_return_item_id' => 'setSellerReturnItemId',
        'seller_fulfillment_order_item_id' => 'setSellerFulfillmentOrderItemId',
        'amazon_shipment_id' => 'setAmazonShipmentId',
        'seller_return_reason_code' => 'setSellerReturnReasonCode',
        'return_comment' => 'setReturnComment',
        'amazon_return_reason_code' => 'setAmazonReturnReasonCode',
        'status' => 'setStatus',
        'status_changed_date' => 'setStatusChangedDate',
        'return_authorization_id' => 'setReturnAuthorizationId',
        'return_received_condition' => 'setReturnReceivedCondition',
        'fulfillment_center_id' => 'setFulfillmentCenterId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'seller_return_item_id' => 'getSellerReturnItemId',
        'seller_fulfillment_order_item_id' => 'getSellerFulfillmentOrderItemId',
        'amazon_shipment_id' => 'getAmazonShipmentId',
        'seller_return_reason_code' => 'getSellerReturnReasonCode',
        'return_comment' => 'getReturnComment',
        'amazon_return_reason_code' => 'getAmazonReturnReasonCode',
        'status' => 'getStatus',
        'status_changed_date' => 'getStatusChangedDate',
        'return_authorization_id' => 'getReturnAuthorizationId',
        'return_received_condition' => 'getReturnReceivedCondition',
        'fulfillment_center_id' => 'getFulfillmentCenterId'
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
        $this->container['seller_return_item_id'] = $data['seller_return_item_id'] ?? null;
        $this->container['seller_fulfillment_order_item_id'] = $data['seller_fulfillment_order_item_id'] ?? null;
        $this->container['amazon_shipment_id'] = $data['amazon_shipment_id'] ?? null;
        $this->container['seller_return_reason_code'] = $data['seller_return_reason_code'] ?? null;
        $this->container['return_comment'] = $data['return_comment'] ?? null;
        $this->container['amazon_return_reason_code'] = $data['amazon_return_reason_code'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['status_changed_date'] = $data['status_changed_date'] ?? null;
        $this->container['return_authorization_id'] = $data['return_authorization_id'] ?? null;
        $this->container['return_received_condition'] = $data['return_received_condition'] ?? null;
        $this->container['fulfillment_center_id'] = $data['fulfillment_center_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['seller_return_item_id'] === null) {
            $invalidProperties[] = "'seller_return_item_id' can't be null";
        }
        if ($this->container['seller_fulfillment_order_item_id'] === null) {
            $invalidProperties[] = "'seller_fulfillment_order_item_id' can't be null";
        }
        if ($this->container['amazon_shipment_id'] === null) {
            $invalidProperties[] = "'amazon_shipment_id' can't be null";
        }
        if ($this->container['seller_return_reason_code'] === null) {
            $invalidProperties[] = "'seller_return_reason_code' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['status_changed_date'] === null) {
            $invalidProperties[] = "'status_changed_date' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets seller_return_item_id
     *
     * @return string
     */
    public function getSellerReturnItemId()
    {
        return $this->container['seller_return_item_id'];
    }

    /**
     * Sets seller_return_item_id
     *
     * @param string $seller_return_item_id An identifier assigned by the seller to the return item.
     *
     * @return self
     */
    public function setSellerReturnItemId($seller_return_item_id)
    {
        $this->container['seller_return_item_id'] = $seller_return_item_id;

        return $this;
    }
    /**
     * Gets seller_fulfillment_order_item_id
     *
     * @return string
     */
    public function getSellerFulfillmentOrderItemId()
    {
        return $this->container['seller_fulfillment_order_item_id'];
    }

    /**
     * Sets seller_fulfillment_order_item_id
     *
     * @param string $seller_fulfillment_order_item_id The identifier assigned to the item by the seller when the fulfillment order was created.
     *
     * @return self
     */
    public function setSellerFulfillmentOrderItemId($seller_fulfillment_order_item_id)
    {
        $this->container['seller_fulfillment_order_item_id'] = $seller_fulfillment_order_item_id;

        return $this;
    }
    /**
     * Gets amazon_shipment_id
     *
     * @return string
     */
    public function getAmazonShipmentId()
    {
        return $this->container['amazon_shipment_id'];
    }

    /**
     * Sets amazon_shipment_id
     *
     * @param string $amazon_shipment_id The identifier for the shipment that is associated with the return item.
     *
     * @return self
     */
    public function setAmazonShipmentId($amazon_shipment_id)
    {
        $this->container['amazon_shipment_id'] = $amazon_shipment_id;

        return $this;
    }
    /**
     * Gets seller_return_reason_code
     *
     * @return string
     */
    public function getSellerReturnReasonCode()
    {
        return $this->container['seller_return_reason_code'];
    }

    /**
     * Sets seller_return_reason_code
     *
     * @param string $seller_return_reason_code The return reason code assigned to the return item by the seller.
     *
     * @return self
     */
    public function setSellerReturnReasonCode($seller_return_reason_code)
    {
        $this->container['seller_return_reason_code'] = $seller_return_reason_code;

        return $this;
    }
    /**
     * Gets return_comment
     *
     * @return string|null
     */
    public function getReturnComment()
    {
        return $this->container['return_comment'];
    }

    /**
     * Sets return_comment
     *
     * @param string|null $return_comment An optional comment about the return item.
     *
     * @return self
     */
    public function setReturnComment($return_comment)
    {
        $this->container['return_comment'] = $return_comment;

        return $this;
    }
    /**
     * Gets amazon_return_reason_code
     *
     * @return string|null
     */
    public function getAmazonReturnReasonCode()
    {
        return $this->container['amazon_return_reason_code'];
    }

    /**
     * Sets amazon_return_reason_code
     *
     * @param string|null $amazon_return_reason_code The return reason code that the Amazon fulfillment center assigned to the return item.
     *
     * @return self
     */
    public function setAmazonReturnReasonCode($amazon_return_reason_code)
    {
        $this->container['amazon_return_reason_code'] = $amazon_return_reason_code;

        return $this;
    }
    /**
     * Gets status
     *
     * @return \SellingPartnerApi\Model\FbaOutboundV20200701\FulfillmentReturnItemStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \SellingPartnerApi\Model\FbaOutboundV20200701\FulfillmentReturnItemStatus $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }
    /**
     * Gets status_changed_date
     *
     * @return string
     */
    public function getStatusChangedDate()
    {
        return $this->container['status_changed_date'];
    }

    /**
     * Sets status_changed_date
     *
     * @param string $status_changed_date A datetime string in ISO 8601 format.
     *
     * @return self
     */
    public function setStatusChangedDate($status_changed_date)
    {
        $this->container['status_changed_date'] = $status_changed_date;

        return $this;
    }
    /**
     * Gets return_authorization_id
     *
     * @return string|null
     */
    public function getReturnAuthorizationId()
    {
        return $this->container['return_authorization_id'];
    }

    /**
     * Sets return_authorization_id
     *
     * @param string|null $return_authorization_id Identifies the return authorization used to return this item. See ReturnAuthorization.
     *
     * @return self
     */
    public function setReturnAuthorizationId($return_authorization_id)
    {
        $this->container['return_authorization_id'] = $return_authorization_id;

        return $this;
    }
    /**
     * Gets return_received_condition
     *
     * @return \SellingPartnerApi\Model\FbaOutboundV20200701\ReturnItemDisposition|null
     */
    public function getReturnReceivedCondition()
    {
        return $this->container['return_received_condition'];
    }

    /**
     * Sets return_received_condition
     *
     * @param \SellingPartnerApi\Model\FbaOutboundV20200701\ReturnItemDisposition|null $return_received_condition return_received_condition
     *
     * @return self
     */
    public function setReturnReceivedCondition($return_received_condition)
    {
        $this->container['return_received_condition'] = $return_received_condition;

        return $this;
    }
    /**
     * Gets fulfillment_center_id
     *
     * @return string|null
     */
    public function getFulfillmentCenterId()
    {
        return $this->container['fulfillment_center_id'];
    }

    /**
     * Sets fulfillment_center_id
     *
     * @param string|null $fulfillment_center_id The identifier for the Amazon fulfillment center that processed the return item.
     *
     * @return self
     */
    public function setFulfillmentCenterId($fulfillment_center_id)
    {
        $this->container['fulfillment_center_id'] = $fulfillment_center_id;

        return $this;
    }
}


