<?php
/**
 * StandardTextPairBlock
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for A+ Content Management
 *
 * With the A+ Content API, you can build applications that help selling partners add rich marketing content to their Amazon product detail pages. A+ content helps selling partners share their brand and product story, which helps buyers make informed purchasing decisions. Selling partners assemble content by choosing from content modules and adding images and text.
 *
 * The version of the OpenAPI document: 2020-11-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\AplusContentV20201101;
use SellingPartnerApi\Model\BaseModel;
use \ArrayAccess;
use \SellingPartnerApi\Model\ModelInterface;
use \SellingPartnerApi\ObjectSerializer;

/**
 * StandardTextPairBlock Class Doc Comment
 *
 * @category Class
 * @description The A+ Content standard label and description block, comprised of a pair of text components.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class StandardTextPairBlock extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StandardTextPairBlock';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'label' => '\SellingPartnerApi\Model\AplusContentV20201101\TextComponent',
        'description' => '\SellingPartnerApi\Model\AplusContentV20201101\TextComponent'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'label' => null,
        'description' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'label' => 'label',
        'description' => 'description'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'label' => 'setLabel',
        'description' => 'setDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'label' => 'getLabel',
        'description' => 'getDescription'
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
        $this->container['label'] = $data['label'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
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
     * Gets label
     *
     * @return \SellingPartnerApi\Model\AplusContentV20201101\TextComponent|null
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param \SellingPartnerApi\Model\AplusContentV20201101\TextComponent|null $label label
     *
     * @return self
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }
    /**
     * Gets description
     *
     * @return \SellingPartnerApi\Model\AplusContentV20201101\TextComponent|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param \SellingPartnerApi\Model\AplusContentV20201101\TextComponent|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }
}


