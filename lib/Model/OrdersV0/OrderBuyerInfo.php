<?php
/**
 * OrderBuyerInfo
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
 * OrderBuyerInfo Class Doc Comment
 *
 * @category Class
 * @description Buyer information for an order.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class OrderBuyerInfo extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderBuyerInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amazon_order_id' => 'string',
        'buyer_email' => 'string',
        'buyer_name' => 'string',
        'buyer_county' => 'string',
        'buyer_tax_info' => '\SellingPartnerApi\Model\OrdersV0\BuyerTaxInfo',
        'purchase_order_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amazon_order_id' => null,
        'buyer_email' => null,
        'buyer_name' => null,
        'buyer_county' => null,
        'buyer_tax_info' => null,
        'purchase_order_number' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'amazon_order_id' => 'AmazonOrderId',
        'buyer_email' => 'BuyerEmail',
        'buyer_name' => 'BuyerName',
        'buyer_county' => 'BuyerCounty',
        'buyer_tax_info' => 'BuyerTaxInfo',
        'purchase_order_number' => 'PurchaseOrderNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'amazon_order_id' => 'setAmazonOrderId',
        'buyer_email' => 'setBuyerEmail',
        'buyer_name' => 'setBuyerName',
        'buyer_county' => 'setBuyerCounty',
        'buyer_tax_info' => 'setBuyerTaxInfo',
        'purchase_order_number' => 'setPurchaseOrderNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amazon_order_id' => 'getAmazonOrderId',
        'buyer_email' => 'getBuyerEmail',
        'buyer_name' => 'getBuyerName',
        'buyer_county' => 'getBuyerCounty',
        'buyer_tax_info' => 'getBuyerTaxInfo',
        'purchase_order_number' => 'getPurchaseOrderNumber'
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
        $this->container['amazon_order_id'] = $data['amazon_order_id'] ?? null;
        $this->container['buyer_email'] = $data['buyer_email'] ?? null;
        $this->container['buyer_name'] = $data['buyer_name'] ?? null;
        $this->container['buyer_county'] = $data['buyer_county'] ?? null;
        $this->container['buyer_tax_info'] = $data['buyer_tax_info'] ?? null;
        $this->container['purchase_order_number'] = $data['purchase_order_number'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['amazon_order_id'] === null) {
            $invalidProperties[] = "'amazon_order_id' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets amazon_order_id
     *
     * @return string
     */
    public function getAmazonOrderId()
    {
        return $this->container['amazon_order_id'];
    }

    /**
     * Sets amazon_order_id
     *
     * @param string $amazon_order_id An Amazon-defined order identifier, in 3-7-7 format.
     *
     * @return self
     */
    public function setAmazonOrderId($amazon_order_id)
    {
        $this->container['amazon_order_id'] = $amazon_order_id;

        return $this;
    }
    /**
     * Gets buyer_email
     *
     * @return string|null
     */
    public function getBuyerEmail()
    {
        return $this->container['buyer_email'];
    }

    /**
     * Sets buyer_email
     *
     * @param string|null $buyer_email The anonymized email address of the buyer.
     *
     * @return self
     */
    public function setBuyerEmail($buyer_email)
    {
        $this->container['buyer_email'] = $buyer_email;

        return $this;
    }
    /**
     * Gets buyer_name
     *
     * @return string|null
     */
    public function getBuyerName()
    {
        return $this->container['buyer_name'];
    }

    /**
     * Sets buyer_name
     *
     * @param string|null $buyer_name The buyer name or the recipient name.
     *
     * @return self
     */
    public function setBuyerName($buyer_name)
    {
        $this->container['buyer_name'] = $buyer_name;

        return $this;
    }
    /**
     * Gets buyer_county
     *
     * @return string|null
     */
    public function getBuyerCounty()
    {
        return $this->container['buyer_county'];
    }

    /**
     * Sets buyer_county
     *
     * @param string|null $buyer_county The county of the buyer.
     *
     * @return self
     */
    public function setBuyerCounty($buyer_county)
    {
        $this->container['buyer_county'] = $buyer_county;

        return $this;
    }
    /**
     * Gets buyer_tax_info
     *
     * @return \SellingPartnerApi\Model\OrdersV0\BuyerTaxInfo|null
     */
    public function getBuyerTaxInfo()
    {
        return $this->container['buyer_tax_info'];
    }

    /**
     * Sets buyer_tax_info
     *
     * @param \SellingPartnerApi\Model\OrdersV0\BuyerTaxInfo|null $buyer_tax_info buyer_tax_info
     *
     * @return self
     */
    public function setBuyerTaxInfo($buyer_tax_info)
    {
        $this->container['buyer_tax_info'] = $buyer_tax_info;

        return $this;
    }
    /**
     * Gets purchase_order_number
     *
     * @return string|null
     */
    public function getPurchaseOrderNumber()
    {
        return $this->container['purchase_order_number'];
    }

    /**
     * Sets purchase_order_number
     *
     * @param string|null $purchase_order_number The purchase order (PO) number entered by the buyer at checkout. Returned only for orders where the buyer entered a PO number at checkout.
     *
     * @return self
     */
    public function setPurchaseOrderNumber($purchase_order_number)
    {
        $this->container['purchase_order_number'] = $purchase_order_number;

        return $this;
    }
}


