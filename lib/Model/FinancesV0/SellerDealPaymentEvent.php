<?php
/**
 * SellerDealPaymentEvent
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
 * SellerDealPaymentEvent Class Doc Comment
 *
 * @category Class
 * @description An event linked to the payment of a fee related to the specified deal.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class SellerDealPaymentEvent extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SellerDealPaymentEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'posted_date' => 'string',
        'deal_id' => 'string',
        'deal_description' => 'string',
        'event_type' => 'string',
        'fee_type' => 'string',
        'fee_amount' => '\SellingPartnerApi\Model\FinancesV0\Currency',
        'tax_amount' => '\SellingPartnerApi\Model\FinancesV0\Currency',
        'total_amount' => '\SellingPartnerApi\Model\FinancesV0\Currency'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'posted_date' => null,
        'deal_id' => null,
        'deal_description' => null,
        'event_type' => null,
        'fee_type' => null,
        'fee_amount' => null,
        'tax_amount' => null,
        'total_amount' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'posted_date' => 'postedDate',
        'deal_id' => 'dealId',
        'deal_description' => 'dealDescription',
        'event_type' => 'eventType',
        'fee_type' => 'feeType',
        'fee_amount' => 'feeAmount',
        'tax_amount' => 'taxAmount',
        'total_amount' => 'totalAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'posted_date' => 'setPostedDate',
        'deal_id' => 'setDealId',
        'deal_description' => 'setDealDescription',
        'event_type' => 'setEventType',
        'fee_type' => 'setFeeType',
        'fee_amount' => 'setFeeAmount',
        'tax_amount' => 'setTaxAmount',
        'total_amount' => 'setTotalAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'posted_date' => 'getPostedDate',
        'deal_id' => 'getDealId',
        'deal_description' => 'getDealDescription',
        'event_type' => 'getEventType',
        'fee_type' => 'getFeeType',
        'fee_amount' => 'getFeeAmount',
        'tax_amount' => 'getTaxAmount',
        'total_amount' => 'getTotalAmount'
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
        $this->container['posted_date'] = $data['posted_date'] ?? null;
        $this->container['deal_id'] = $data['deal_id'] ?? null;
        $this->container['deal_description'] = $data['deal_description'] ?? null;
        $this->container['event_type'] = $data['event_type'] ?? null;
        $this->container['fee_type'] = $data['fee_type'] ?? null;
        $this->container['fee_amount'] = $data['fee_amount'] ?? null;
        $this->container['tax_amount'] = $data['tax_amount'] ?? null;
        $this->container['total_amount'] = $data['total_amount'] ?? null;
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
     * Gets posted_date
     *
     * @return string|null
     */
    public function getPostedDate()
    {
        return $this->container['posted_date'];
    }

    /**
     * Sets posted_date
     *
     * @param string|null $posted_date A date string in ISO 8601 format.
     *
     * @return self
     */
    public function setPostedDate($posted_date)
    {
        $this->container['posted_date'] = $posted_date;

        return $this;
    }
    /**
     * Gets deal_id
     *
     * @return string|null
     */
    public function getDealId()
    {
        return $this->container['deal_id'];
    }

    /**
     * Sets deal_id
     *
     * @param string|null $deal_id The unique identifier of the deal.
     *
     * @return self
     */
    public function setDealId($deal_id)
    {
        $this->container['deal_id'] = $deal_id;

        return $this;
    }
    /**
     * Gets deal_description
     *
     * @return string|null
     */
    public function getDealDescription()
    {
        return $this->container['deal_description'];
    }

    /**
     * Sets deal_description
     *
     * @param string|null $deal_description The internal description of the deal.
     *
     * @return self
     */
    public function setDealDescription($deal_description)
    {
        $this->container['deal_description'] = $deal_description;

        return $this;
    }
    /**
     * Gets event_type
     *
     * @return string|null
     */
    public function getEventType()
    {
        return $this->container['event_type'];
    }

    /**
     * Sets event_type
     *
     * @param string|null $event_type The type of event: SellerDealComplete.
     *
     * @return self
     */
    public function setEventType($event_type)
    {
        $this->container['event_type'] = $event_type;

        return $this;
    }
    /**
     * Gets fee_type
     *
     * @return string|null
     */
    public function getFeeType()
    {
        return $this->container['fee_type'];
    }

    /**
     * Sets fee_type
     *
     * @param string|null $fee_type The type of fee: RunLightningDealFee.
     *
     * @return self
     */
    public function setFeeType($fee_type)
    {
        $this->container['fee_type'] = $fee_type;

        return $this;
    }
    /**
     * Gets fee_amount
     *
     * @return \SellingPartnerApi\Model\FinancesV0\Currency|null
     */
    public function getFeeAmount()
    {
        return $this->container['fee_amount'];
    }

    /**
     * Sets fee_amount
     *
     * @param \SellingPartnerApi\Model\FinancesV0\Currency|null $fee_amount fee_amount
     *
     * @return self
     */
    public function setFeeAmount($fee_amount)
    {
        $this->container['fee_amount'] = $fee_amount;

        return $this;
    }
    /**
     * Gets tax_amount
     *
     * @return \SellingPartnerApi\Model\FinancesV0\Currency|null
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     *
     * @param \SellingPartnerApi\Model\FinancesV0\Currency|null $tax_amount tax_amount
     *
     * @return self
     */
    public function setTaxAmount($tax_amount)
    {
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }
    /**
     * Gets total_amount
     *
     * @return \SellingPartnerApi\Model\FinancesV0\Currency|null
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     *
     * @param \SellingPartnerApi\Model\FinancesV0\Currency|null $total_amount total_amount
     *
     * @return self
     */
    public function setTotalAmount($total_amount)
    {
        $this->container['total_amount'] = $total_amount;

        return $this;
    }
}


