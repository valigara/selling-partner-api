<?php
/**
 * PayWithAmazonEvent
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Finances
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
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

namespace SellingPartnerApi\Model\FinancesV0;
use SellingPartnerApi\Model\BaseModel;
use \ArrayAccess;
use \SellingPartnerApi\Model\ModelInterface;
use \SellingPartnerApi\ObjectSerializer;

/**
 * PayWithAmazonEvent Class Doc Comment
 *
 * @category Class
 * @description An event related to the seller's Pay with Amazon account.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class PayWithAmazonEvent extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PayWithAmazonEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'seller_order_id' => 'string',
        'transaction_posted_date' => 'string',
        'business_object_type' => 'string',
        'sales_channel' => 'string',
        'charge' => '\SellingPartnerApi\Model\FinancesV0\ChargeComponent',
        'fee_list' => '\SellingPartnerApi\Model\FinancesV0\FeeComponent[]',
        'payment_amount_type' => 'string',
        'amount_description' => 'string',
        'fulfillment_channel' => 'string',
        'store_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'seller_order_id' => null,
        'transaction_posted_date' => null,
        'business_object_type' => null,
        'sales_channel' => null,
        'charge' => null,
        'fee_list' => null,
        'payment_amount_type' => null,
        'amount_description' => null,
        'fulfillment_channel' => null,
        'store_name' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'seller_order_id' => 'SellerOrderId',
        'transaction_posted_date' => 'TransactionPostedDate',
        'business_object_type' => 'BusinessObjectType',
        'sales_channel' => 'SalesChannel',
        'charge' => 'Charge',
        'fee_list' => 'FeeList',
        'payment_amount_type' => 'PaymentAmountType',
        'amount_description' => 'AmountDescription',
        'fulfillment_channel' => 'FulfillmentChannel',
        'store_name' => 'StoreName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'seller_order_id' => 'setSellerOrderId',
        'transaction_posted_date' => 'setTransactionPostedDate',
        'business_object_type' => 'setBusinessObjectType',
        'sales_channel' => 'setSalesChannel',
        'charge' => 'setCharge',
        'fee_list' => 'setFeeList',
        'payment_amount_type' => 'setPaymentAmountType',
        'amount_description' => 'setAmountDescription',
        'fulfillment_channel' => 'setFulfillmentChannel',
        'store_name' => 'setStoreName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'seller_order_id' => 'getSellerOrderId',
        'transaction_posted_date' => 'getTransactionPostedDate',
        'business_object_type' => 'getBusinessObjectType',
        'sales_channel' => 'getSalesChannel',
        'charge' => 'getCharge',
        'fee_list' => 'getFeeList',
        'payment_amount_type' => 'getPaymentAmountType',
        'amount_description' => 'getAmountDescription',
        'fulfillment_channel' => 'getFulfillmentChannel',
        'store_name' => 'getStoreName'
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
        $this->container['seller_order_id'] = $data['seller_order_id'] ?? null;
        $this->container['transaction_posted_date'] = $data['transaction_posted_date'] ?? null;
        $this->container['business_object_type'] = $data['business_object_type'] ?? null;
        $this->container['sales_channel'] = $data['sales_channel'] ?? null;
        $this->container['charge'] = $data['charge'] ?? null;
        $this->container['fee_list'] = $data['fee_list'] ?? null;
        $this->container['payment_amount_type'] = $data['payment_amount_type'] ?? null;
        $this->container['amount_description'] = $data['amount_description'] ?? null;
        $this->container['fulfillment_channel'] = $data['fulfillment_channel'] ?? null;
        $this->container['store_name'] = $data['store_name'] ?? null;
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
     * Gets seller_order_id
     *
     * @return string|null
     */
    public function getSellerOrderId()
    {
        return $this->container['seller_order_id'];
    }

    /**
     * Sets seller_order_id
     *
     * @param string|null $seller_order_id An order identifier that is specified by the seller.
     *
     * @return self
     */
    public function setSellerOrderId($seller_order_id)
    {
        $this->container['seller_order_id'] = $seller_order_id;

        return $this;
    }
    /**
     * Gets transaction_posted_date
     *
     * @return string|null
     */
    public function getTransactionPostedDate()
    {
        return $this->container['transaction_posted_date'];
    }

    /**
     * Sets transaction_posted_date
     *
     * @param string|null $transaction_posted_date A date string in ISO 8601 format.
     *
     * @return self
     */
    public function setTransactionPostedDate($transaction_posted_date)
    {
        $this->container['transaction_posted_date'] = $transaction_posted_date;

        return $this;
    }
    /**
     * Gets business_object_type
     *
     * @return string|null
     */
    public function getBusinessObjectType()
    {
        return $this->container['business_object_type'];
    }

    /**
     * Sets business_object_type
     *
     * @param string|null $business_object_type The type of business object.
     *
     * @return self
     */
    public function setBusinessObjectType($business_object_type)
    {
        $this->container['business_object_type'] = $business_object_type;

        return $this;
    }
    /**
     * Gets sales_channel
     *
     * @return string|null
     */
    public function getSalesChannel()
    {
        return $this->container['sales_channel'];
    }

    /**
     * Sets sales_channel
     *
     * @param string|null $sales_channel The sales channel for the transaction.
     *
     * @return self
     */
    public function setSalesChannel($sales_channel)
    {
        $this->container['sales_channel'] = $sales_channel;

        return $this;
    }
    /**
     * Gets charge
     *
     * @return \SellingPartnerApi\Model\FinancesV0\ChargeComponent|null
     */
    public function getCharge()
    {
        return $this->container['charge'];
    }

    /**
     * Sets charge
     *
     * @param \SellingPartnerApi\Model\FinancesV0\ChargeComponent|null $charge charge
     *
     * @return self
     */
    public function setCharge($charge)
    {
        $this->container['charge'] = $charge;

        return $this;
    }
    /**
     * Gets fee_list
     *
     * @return \SellingPartnerApi\Model\FinancesV0\FeeComponent[]|null
     */
    public function getFeeList()
    {
        return $this->container['fee_list'];
    }

    /**
     * Sets fee_list
     *
     * @param \SellingPartnerApi\Model\FinancesV0\FeeComponent[]|null $fee_list A list of fee component information.
     *
     * @return self
     */
    public function setFeeList($fee_list)
    {
        $this->container['fee_list'] = $fee_list;

        return $this;
    }
    /**
     * Gets payment_amount_type
     *
     * @return string|null
     */
    public function getPaymentAmountType()
    {
        return $this->container['payment_amount_type'];
    }

    /**
     * Sets payment_amount_type
     *
     * @param string|null $payment_amount_type The type of payment. Possible values: * Sales
     *
     * @return self
     */
    public function setPaymentAmountType($payment_amount_type)
    {
        $this->container['payment_amount_type'] = $payment_amount_type;

        return $this;
    }
    /**
     * Gets amount_description
     *
     * @return string|null
     */
    public function getAmountDescription()
    {
        return $this->container['amount_description'];
    }

    /**
     * Sets amount_description
     *
     * @param string|null $amount_description A short description of this payment event.
     *
     * @return self
     */
    public function setAmountDescription($amount_description)
    {
        $this->container['amount_description'] = $amount_description;

        return $this;
    }
    /**
     * Gets fulfillment_channel
     *
     * @return string|null
     */
    public function getFulfillmentChannel()
    {
        return $this->container['fulfillment_channel'];
    }

    /**
     * Sets fulfillment_channel
     *
     * @param string|null $fulfillment_channel The fulfillment channel. Possible values: * AFN - Amazon Fulfillment Network (Fulfillment by Amazon) * MFN - Merchant Fulfillment Network (self-fulfilled)
     *
     * @return self
     */
    public function setFulfillmentChannel($fulfillment_channel)
    {
        $this->container['fulfillment_channel'] = $fulfillment_channel;

        return $this;
    }
    /**
     * Gets store_name
     *
     * @return string|null
     */
    public function getStoreName()
    {
        return $this->container['store_name'];
    }

    /**
     * Sets store_name
     *
     * @param string|null $store_name The store name where the event occurred.
     *
     * @return self
     */
    public function setStoreName($store_name)
    {
        $this->container['store_name'] = $store_name;

        return $this;
    }
}


