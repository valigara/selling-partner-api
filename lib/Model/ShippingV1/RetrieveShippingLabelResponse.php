<?php
/**
 * RetrieveShippingLabelResponse
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Shipping
 *
 * Provides programmatic access to Amazon Shipping APIs.  **Note:** If you are new to the Amazon Shipping API, refer to the latest version of <a href=\"https://developer-docs.amazon.com/amazon-shipping/docs/shipping-api-v2-reference\">Amazon Shipping API (v2)</a> on the <a href=\"https://developer-docs.amazon.com/amazon-shipping/\">Amazon Shipping Developer Documentation</a> site.
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

namespace SellingPartnerApi\Model\ShippingV1;
use SellingPartnerApi\Model\BaseModel;
use \ArrayAccess;
use \SellingPartnerApi\Model\ModelInterface;
use \SellingPartnerApi\ObjectSerializer;

/**
 * RetrieveShippingLabelResponse Class Doc Comment
 *
 * @category Class
 * @description The response schema for the retrieveShippingLabel operation.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class RetrieveShippingLabelResponse extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RetrieveShippingLabelResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'payload' => '\SellingPartnerApi\Model\ShippingV1\RetrieveShippingLabelResult',
        'errors' => '\SellingPartnerApi\Model\ShippingV1\Error[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'payload' => null,
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
        'payload' => 'payload',
        'errors' => 'errors'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'headers' => 'setHeaders',
        'payload' => 'setPayload',
        'errors' => 'setErrors'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'headers' => 'getHeaders',
        'payload' => 'getPayload',
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
        $this->container['payload'] = $data['payload'] ?? null;
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
     * Gets payload
     *
     * @return \SellingPartnerApi\Model\ShippingV1\RetrieveShippingLabelResult|null
     */
    public function getPayload()
    {
        return $this->container['payload'];
    }

    /**
     * Sets payload
     *
     * @param \SellingPartnerApi\Model\ShippingV1\RetrieveShippingLabelResult|null $payload payload
     *
     * @return self
     */
    public function setPayload($payload)
    {
        $this->container['payload'] = $payload;

        return $this;
    }
    /**
     * Gets errors
     *
     * @return \SellingPartnerApi\Model\ShippingV1\Error[]|null
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param \SellingPartnerApi\Model\ShippingV1\Error[]|null $errors A list of error responses returned when a request is unsuccessful.
     *
     * @return self
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

        return $this;
    }
}


