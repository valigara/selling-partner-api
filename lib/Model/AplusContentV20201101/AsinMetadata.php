<?php
/**
 * AsinMetadata
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
 * AsinMetadata Class Doc Comment
 *
 * @category Class
 * @description The A+ Content ASIN with additional metadata for content management. If you don't include the `includedDataSet` parameter in a call to the listContentDocumentAsinRelations operation, the related ASINs are returned without metadata.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class AsinMetadata extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AsinMetadata';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'asin' => 'string',
        'badge_set' => '\SellingPartnerApi\Model\AplusContentV20201101\AsinBadge[]',
        'parent' => 'string',
        'title' => 'string',
        'image_url' => 'string',
        'content_reference_key_set' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'asin' => null,
        'badge_set' => null,
        'parent' => null,
        'title' => null,
        'image_url' => null,
        'content_reference_key_set' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'asin' => 'asin',
        'badge_set' => 'badgeSet',
        'parent' => 'parent',
        'title' => 'title',
        'image_url' => 'imageUrl',
        'content_reference_key_set' => 'contentReferenceKeySet'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'asin' => 'setAsin',
        'badge_set' => 'setBadgeSet',
        'parent' => 'setParent',
        'title' => 'setTitle',
        'image_url' => 'setImageUrl',
        'content_reference_key_set' => 'setContentReferenceKeySet'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'asin' => 'getAsin',
        'badge_set' => 'getBadgeSet',
        'parent' => 'getParent',
        'title' => 'getTitle',
        'image_url' => 'getImageUrl',
        'content_reference_key_set' => 'getContentReferenceKeySet'
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
        $this->container['asin'] = $data['asin'] ?? null;
        $this->container['badge_set'] = $data['badge_set'] ?? null;
        $this->container['parent'] = $data['parent'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['image_url'] = $data['image_url'] ?? null;
        $this->container['content_reference_key_set'] = $data['content_reference_key_set'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['asin'] === null) {
            $invalidProperties[] = "'asin' can't be null";
        }
        if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 1)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['image_url']) && (mb_strlen($this->container['image_url']) < 1)) {
            $invalidProperties[] = "invalid value for 'image_url', the character length must be bigger than or equal to 1.";
        }

        return $invalidProperties;
    }


    /**
     * Gets asin
     *
     * @return string
     */
    public function getAsin()
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin
     *
     * @param string $asin The Amazon Standard Identification Number (ASIN).
     *
     * @return self
     */
    public function setAsin($asin)
    {
        $this->container['asin'] = $asin;

        return $this;
    }
    /**
     * Gets badge_set
     *
     * @return \SellingPartnerApi\Model\AplusContentV20201101\AsinBadge[]|null
     */
    public function getBadgeSet()
    {
        return $this->container['badge_set'];
    }

    /**
     * Sets badge_set
     *
     * @param \SellingPartnerApi\Model\AplusContentV20201101\AsinBadge[]|null $badge_set The set of ASIN badges.
     *
     * @return self
     */
    public function setBadgeSet($badge_set)
    {


        $this->container['badge_set'] = $badge_set;

        return $this;
    }
    /**
     * Gets parent
     *
     * @return string|null
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     *
     * @param string|null $parent The Amazon Standard Identification Number (ASIN).
     *
     * @return self
     */
    public function setParent($parent)
    {
        $this->container['parent'] = $parent;

        return $this;
    }
    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title The title for the ASIN in the Amazon catalog.
     *
     * @return self
     */
    public function setTitle($title)
    {

        if (!is_null($title) && (mb_strlen($title) < 1)) {
            throw new \InvalidArgumentException('invalid length for $title when calling AsinMetadata., must be bigger than or equal to 1.');
        }

        $this->container['title'] = $title;

        return $this;
    }
    /**
     * Gets image_url
     *
     * @return string|null
     */
    public function getImageUrl()
    {
        return $this->container['image_url'];
    }

    /**
     * Sets image_url
     *
     * @param string|null $image_url The default image for the ASIN in the Amazon catalog.
     *
     * @return self
     */
    public function setImageUrl($image_url)
    {

        if (!is_null($image_url) && (mb_strlen($image_url) < 1)) {
            throw new \InvalidArgumentException('invalid length for $image_url when calling AsinMetadata., must be bigger than or equal to 1.');
        }

        $this->container['image_url'] = $image_url;

        return $this;
    }
    /**
     * Gets content_reference_key_set
     *
     * @return string[]|null
     */
    public function getContentReferenceKeySet()
    {
        return $this->container['content_reference_key_set'];
    }

    /**
     * Sets content_reference_key_set
     *
     * @param string[]|null $content_reference_key_set A set of content reference keys.
     *
     * @return self
     */
    public function setContentReferenceKeySet($content_reference_key_set)
    {


        $this->container['content_reference_key_set'] = $content_reference_key_set;

        return $this;
    }
}


