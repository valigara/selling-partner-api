<?php
/**
 * SellerInputDefinition
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Merchant Fulfillment
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon's Buy Shipping Services.
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

namespace SellingPartnerApi\Model\MerchantFulfillmentV0;
use SellingPartnerApi\Model\BaseModel;
use \ArrayAccess;
use \SellingPartnerApi\Model\ModelInterface;
use \SellingPartnerApi\ObjectSerializer;

/**
 * SellerInputDefinition Class Doc Comment
 *
 * @category Class
 * @description Specifies characteristics that apply to a seller input.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class SellerInputDefinition extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SellerInputDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'is_required' => 'bool',
        'data_type' => 'string',
        'constraints' => '\SellingPartnerApi\Model\MerchantFulfillmentV0\Constraint[]',
        'input_display_text' => 'string',
        'input_target' => '\SellingPartnerApi\Model\MerchantFulfillmentV0\InputTargetType',
        'stored_value' => '\SellingPartnerApi\Model\MerchantFulfillmentV0\AdditionalSellerInput',
        'restricted_set_values' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'is_required' => null,
        'data_type' => null,
        'constraints' => null,
        'input_display_text' => null,
        'input_target' => null,
        'stored_value' => null,
        'restricted_set_values' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'is_required' => 'IsRequired',
        'data_type' => 'DataType',
        'constraints' => 'Constraints',
        'input_display_text' => 'InputDisplayText',
        'input_target' => 'InputTarget',
        'stored_value' => 'StoredValue',
        'restricted_set_values' => 'RestrictedSetValues'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'is_required' => 'setIsRequired',
        'data_type' => 'setDataType',
        'constraints' => 'setConstraints',
        'input_display_text' => 'setInputDisplayText',
        'input_target' => 'setInputTarget',
        'stored_value' => 'setStoredValue',
        'restricted_set_values' => 'setRestrictedSetValues'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_required' => 'getIsRequired',
        'data_type' => 'getDataType',
        'constraints' => 'getConstraints',
        'input_display_text' => 'getInputDisplayText',
        'input_target' => 'getInputTarget',
        'stored_value' => 'getStoredValue',
        'restricted_set_values' => 'getRestrictedSetValues'
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
        $this->container['is_required'] = $data['is_required'] ?? null;
        $this->container['data_type'] = $data['data_type'] ?? null;
        $this->container['constraints'] = $data['constraints'] ?? null;
        $this->container['input_display_text'] = $data['input_display_text'] ?? null;
        $this->container['input_target'] = $data['input_target'] ?? null;
        $this->container['stored_value'] = $data['stored_value'] ?? null;
        $this->container['restricted_set_values'] = $data['restricted_set_values'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['is_required'] === null) {
            $invalidProperties[] = "'is_required' can't be null";
        }
        if ($this->container['data_type'] === null) {
            $invalidProperties[] = "'data_type' can't be null";
        }
        if ($this->container['constraints'] === null) {
            $invalidProperties[] = "'constraints' can't be null";
        }
        if ($this->container['input_display_text'] === null) {
            $invalidProperties[] = "'input_display_text' can't be null";
        }
        if ($this->container['stored_value'] === null) {
            $invalidProperties[] = "'stored_value' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets is_required
     *
     * @return bool
     */
    public function getIsRequired()
    {
        return $this->container['is_required'];
    }

    /**
     * Sets is_required
     *
     * @param bool $is_required When true, the additional input field is required.
     *
     * @return self
     */
    public function setIsRequired($is_required)
    {
        $this->container['is_required'] = $is_required;

        return $this;
    }
    /**
     * Gets data_type
     *
     * @return string
     */
    public function getDataType()
    {
        return $this->container['data_type'];
    }

    /**
     * Sets data_type
     *
     * @param string $data_type The data type of the additional input field.
     *
     * @return self
     */
    public function setDataType($data_type)
    {
        $this->container['data_type'] = $data_type;

        return $this;
    }
    /**
     * Gets constraints
     *
     * @return \SellingPartnerApi\Model\MerchantFulfillmentV0\Constraint[]
     */
    public function getConstraints()
    {
        return $this->container['constraints'];
    }

    /**
     * Sets constraints
     *
     * @param \SellingPartnerApi\Model\MerchantFulfillmentV0\Constraint[] $constraints List of constraints.
     *
     * @return self
     */
    public function setConstraints($constraints)
    {
        $this->container['constraints'] = $constraints;

        return $this;
    }
    /**
     * Gets input_display_text
     *
     * @return string
     */
    public function getInputDisplayText()
    {
        return $this->container['input_display_text'];
    }

    /**
     * Sets input_display_text
     *
     * @param string $input_display_text The display text for the additional input field.
     *
     * @return self
     */
    public function setInputDisplayText($input_display_text)
    {
        $this->container['input_display_text'] = $input_display_text;

        return $this;
    }
    /**
     * Gets input_target
     *
     * @return \SellingPartnerApi\Model\MerchantFulfillmentV0\InputTargetType|null
     */
    public function getInputTarget()
    {
        return $this->container['input_target'];
    }

    /**
     * Sets input_target
     *
     * @param \SellingPartnerApi\Model\MerchantFulfillmentV0\InputTargetType|null $input_target input_target
     *
     * @return self
     */
    public function setInputTarget($input_target)
    {
        $this->container['input_target'] = $input_target;

        return $this;
    }
    /**
     * Gets stored_value
     *
     * @return \SellingPartnerApi\Model\MerchantFulfillmentV0\AdditionalSellerInput
     */
    public function getStoredValue()
    {
        return $this->container['stored_value'];
    }

    /**
     * Sets stored_value
     *
     * @param \SellingPartnerApi\Model\MerchantFulfillmentV0\AdditionalSellerInput $stored_value stored_value
     *
     * @return self
     */
    public function setStoredValue($stored_value)
    {
        $this->container['stored_value'] = $stored_value;

        return $this;
    }
    /**
     * Gets restricted_set_values
     *
     * @return string[]|null
     */
    public function getRestrictedSetValues()
    {
        return $this->container['restricted_set_values'];
    }

    /**
     * Sets restricted_set_values
     *
     * @param string[]|null $restricted_set_values The set of fixed values in an additional seller input.
     *
     * @return self
     */
    public function setRestrictedSetValues($restricted_set_values)
    {
        $this->container['restricted_set_values'] = $restricted_set_values;

        return $this;
    }
}


