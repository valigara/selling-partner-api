<?php
/**
 * CreateFulfillmentReturnResult
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
 * CreateFulfillmentReturnResult Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class CreateFulfillmentReturnResult extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateFulfillmentReturnResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'return_items' => '\SellingPartnerApi\Model\FbaOutboundV20200701\ReturnItem[]',
        'invalid_return_items' => '\SellingPartnerApi\Model\FbaOutboundV20200701\InvalidReturnItem[]',
        'return_authorizations' => '\SellingPartnerApi\Model\FbaOutboundV20200701\ReturnAuthorization[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'return_items' => null,
        'invalid_return_items' => null,
        'return_authorizations' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'return_items' => 'returnItems',
        'invalid_return_items' => 'invalidReturnItems',
        'return_authorizations' => 'returnAuthorizations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'return_items' => 'setReturnItems',
        'invalid_return_items' => 'setInvalidReturnItems',
        'return_authorizations' => 'setReturnAuthorizations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'return_items' => 'getReturnItems',
        'invalid_return_items' => 'getInvalidReturnItems',
        'return_authorizations' => 'getReturnAuthorizations'
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
        $this->container['return_items'] = $data['return_items'] ?? null;
        $this->container['invalid_return_items'] = $data['invalid_return_items'] ?? null;
        $this->container['return_authorizations'] = $data['return_authorizations'] ?? null;
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
     * Gets return_items
     *
     * @return \SellingPartnerApi\Model\FbaOutboundV20200701\ReturnItem[]|null
     */
    public function getReturnItems()
    {
        return $this->container['return_items'];
    }

    /**
     * Sets return_items
     *
     * @param \SellingPartnerApi\Model\FbaOutboundV20200701\ReturnItem[]|null $return_items An array of items that Amazon accepted for return. Returns empty if no items were accepted for return.
     *
     * @return self
     */
    public function setReturnItems($return_items)
    {
        $this->container['return_items'] = $return_items;

        return $this;
    }
    /**
     * Gets invalid_return_items
     *
     * @return \SellingPartnerApi\Model\FbaOutboundV20200701\InvalidReturnItem[]|null
     */
    public function getInvalidReturnItems()
    {
        return $this->container['invalid_return_items'];
    }

    /**
     * Sets invalid_return_items
     *
     * @param \SellingPartnerApi\Model\FbaOutboundV20200701\InvalidReturnItem[]|null $invalid_return_items An array of invalid return item information.
     *
     * @return self
     */
    public function setInvalidReturnItems($invalid_return_items)
    {
        $this->container['invalid_return_items'] = $invalid_return_items;

        return $this;
    }
    /**
     * Gets return_authorizations
     *
     * @return \SellingPartnerApi\Model\FbaOutboundV20200701\ReturnAuthorization[]|null
     */
    public function getReturnAuthorizations()
    {
        return $this->container['return_authorizations'];
    }

    /**
     * Sets return_authorizations
     *
     * @param \SellingPartnerApi\Model\FbaOutboundV20200701\ReturnAuthorization[]|null $return_authorizations An array of return authorization information.
     *
     * @return self
     */
    public function setReturnAuthorizations($return_authorizations)
    {
        $this->container['return_authorizations'] = $return_authorizations;

        return $this;
    }
}


