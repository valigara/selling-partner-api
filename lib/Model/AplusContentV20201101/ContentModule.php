<?php
/**
 * ContentModule
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
 * ContentModule Class Doc Comment
 *
 * @category Class
 * @description An A+ Content module. An A+ Content document is composed of content modules. The contentModuleType property selects which content module types to use.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ContentModule extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ContentModule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'content_module_type' => '\SellingPartnerApi\Model\AplusContentV20201101\ContentModuleType',
        'standard_company_logo' => '\SellingPartnerApi\Model\AplusContentV20201101\StandardCompanyLogoModule',
        'standard_comparison_table' => '\SellingPartnerApi\Model\AplusContentV20201101\StandardComparisonTableModule',
        'standard_four_image_text' => '\SellingPartnerApi\Model\AplusContentV20201101\StandardFourImageTextModule',
        'standard_four_image_text_quadrant' => '\SellingPartnerApi\Model\AplusContentV20201101\StandardFourImageTextQuadrantModule',
        'standard_header_image_text' => '\SellingPartnerApi\Model\AplusContentV20201101\StandardHeaderImageTextModule',
        'standard_image_sidebar' => '\SellingPartnerApi\Model\AplusContentV20201101\StandardImageSidebarModule',
        'standard_image_text_overlay' => '\SellingPartnerApi\Model\AplusContentV20201101\StandardImageTextOverlayModule',
        'standard_multiple_image_text' => '\SellingPartnerApi\Model\AplusContentV20201101\StandardMultipleImageTextModule',
        'standard_product_description' => '\SellingPartnerApi\Model\AplusContentV20201101\StandardProductDescriptionModule',
        'standard_single_image_highlights' => '\SellingPartnerApi\Model\AplusContentV20201101\StandardSingleImageHighlightsModule',
        'standard_single_image_specs_detail' => '\SellingPartnerApi\Model\AplusContentV20201101\StandardSingleImageSpecsDetailModule',
        'standard_single_side_image' => '\SellingPartnerApi\Model\AplusContentV20201101\StandardSingleSideImageModule',
        'standard_tech_specs' => '\SellingPartnerApi\Model\AplusContentV20201101\StandardTechSpecsModule',
        'standard_text' => '\SellingPartnerApi\Model\AplusContentV20201101\StandardTextModule',
        'standard_three_image_text' => '\SellingPartnerApi\Model\AplusContentV20201101\StandardThreeImageTextModule'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'content_module_type' => null,
        'standard_company_logo' => null,
        'standard_comparison_table' => null,
        'standard_four_image_text' => null,
        'standard_four_image_text_quadrant' => null,
        'standard_header_image_text' => null,
        'standard_image_sidebar' => null,
        'standard_image_text_overlay' => null,
        'standard_multiple_image_text' => null,
        'standard_product_description' => null,
        'standard_single_image_highlights' => null,
        'standard_single_image_specs_detail' => null,
        'standard_single_side_image' => null,
        'standard_tech_specs' => null,
        'standard_text' => null,
        'standard_three_image_text' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'content_module_type' => 'contentModuleType',
        'standard_company_logo' => 'standardCompanyLogo',
        'standard_comparison_table' => 'standardComparisonTable',
        'standard_four_image_text' => 'standardFourImageText',
        'standard_four_image_text_quadrant' => 'standardFourImageTextQuadrant',
        'standard_header_image_text' => 'standardHeaderImageText',
        'standard_image_sidebar' => 'standardImageSidebar',
        'standard_image_text_overlay' => 'standardImageTextOverlay',
        'standard_multiple_image_text' => 'standardMultipleImageText',
        'standard_product_description' => 'standardProductDescription',
        'standard_single_image_highlights' => 'standardSingleImageHighlights',
        'standard_single_image_specs_detail' => 'standardSingleImageSpecsDetail',
        'standard_single_side_image' => 'standardSingleSideImage',
        'standard_tech_specs' => 'standardTechSpecs',
        'standard_text' => 'standardText',
        'standard_three_image_text' => 'standardThreeImageText'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'content_module_type' => 'setContentModuleType',
        'standard_company_logo' => 'setStandardCompanyLogo',
        'standard_comparison_table' => 'setStandardComparisonTable',
        'standard_four_image_text' => 'setStandardFourImageText',
        'standard_four_image_text_quadrant' => 'setStandardFourImageTextQuadrant',
        'standard_header_image_text' => 'setStandardHeaderImageText',
        'standard_image_sidebar' => 'setStandardImageSidebar',
        'standard_image_text_overlay' => 'setStandardImageTextOverlay',
        'standard_multiple_image_text' => 'setStandardMultipleImageText',
        'standard_product_description' => 'setStandardProductDescription',
        'standard_single_image_highlights' => 'setStandardSingleImageHighlights',
        'standard_single_image_specs_detail' => 'setStandardSingleImageSpecsDetail',
        'standard_single_side_image' => 'setStandardSingleSideImage',
        'standard_tech_specs' => 'setStandardTechSpecs',
        'standard_text' => 'setStandardText',
        'standard_three_image_text' => 'setStandardThreeImageText'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'content_module_type' => 'getContentModuleType',
        'standard_company_logo' => 'getStandardCompanyLogo',
        'standard_comparison_table' => 'getStandardComparisonTable',
        'standard_four_image_text' => 'getStandardFourImageText',
        'standard_four_image_text_quadrant' => 'getStandardFourImageTextQuadrant',
        'standard_header_image_text' => 'getStandardHeaderImageText',
        'standard_image_sidebar' => 'getStandardImageSidebar',
        'standard_image_text_overlay' => 'getStandardImageTextOverlay',
        'standard_multiple_image_text' => 'getStandardMultipleImageText',
        'standard_product_description' => 'getStandardProductDescription',
        'standard_single_image_highlights' => 'getStandardSingleImageHighlights',
        'standard_single_image_specs_detail' => 'getStandardSingleImageSpecsDetail',
        'standard_single_side_image' => 'getStandardSingleSideImage',
        'standard_tech_specs' => 'getStandardTechSpecs',
        'standard_text' => 'getStandardText',
        'standard_three_image_text' => 'getStandardThreeImageText'
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
        $this->container['content_module_type'] = $data['content_module_type'] ?? null;
        $this->container['standard_company_logo'] = $data['standard_company_logo'] ?? null;
        $this->container['standard_comparison_table'] = $data['standard_comparison_table'] ?? null;
        $this->container['standard_four_image_text'] = $data['standard_four_image_text'] ?? null;
        $this->container['standard_four_image_text_quadrant'] = $data['standard_four_image_text_quadrant'] ?? null;
        $this->container['standard_header_image_text'] = $data['standard_header_image_text'] ?? null;
        $this->container['standard_image_sidebar'] = $data['standard_image_sidebar'] ?? null;
        $this->container['standard_image_text_overlay'] = $data['standard_image_text_overlay'] ?? null;
        $this->container['standard_multiple_image_text'] = $data['standard_multiple_image_text'] ?? null;
        $this->container['standard_product_description'] = $data['standard_product_description'] ?? null;
        $this->container['standard_single_image_highlights'] = $data['standard_single_image_highlights'] ?? null;
        $this->container['standard_single_image_specs_detail'] = $data['standard_single_image_specs_detail'] ?? null;
        $this->container['standard_single_side_image'] = $data['standard_single_side_image'] ?? null;
        $this->container['standard_tech_specs'] = $data['standard_tech_specs'] ?? null;
        $this->container['standard_text'] = $data['standard_text'] ?? null;
        $this->container['standard_three_image_text'] = $data['standard_three_image_text'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['content_module_type'] === null) {
            $invalidProperties[] = "'content_module_type' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets content_module_type
     *
     * @return \SellingPartnerApi\Model\AplusContentV20201101\ContentModuleType
     */
    public function getContentModuleType()
    {
        return $this->container['content_module_type'];
    }

    /**
     * Sets content_module_type
     *
     * @param \SellingPartnerApi\Model\AplusContentV20201101\ContentModuleType $content_module_type content_module_type
     *
     * @return self
     */
    public function setContentModuleType($content_module_type)
    {
        $this->container['content_module_type'] = $content_module_type;

        return $this;
    }
    /**
     * Gets standard_company_logo
     *
     * @return \SellingPartnerApi\Model\AplusContentV20201101\StandardCompanyLogoModule|null
     */
    public function getStandardCompanyLogo()
    {
        return $this->container['standard_company_logo'];
    }

    /**
     * Sets standard_company_logo
     *
     * @param \SellingPartnerApi\Model\AplusContentV20201101\StandardCompanyLogoModule|null $standard_company_logo standard_company_logo
     *
     * @return self
     */
    public function setStandardCompanyLogo($standard_company_logo)
    {
        $this->container['standard_company_logo'] = $standard_company_logo;

        return $this;
    }
    /**
     * Gets standard_comparison_table
     *
     * @return \SellingPartnerApi\Model\AplusContentV20201101\StandardComparisonTableModule|null
     */
    public function getStandardComparisonTable()
    {
        return $this->container['standard_comparison_table'];
    }

    /**
     * Sets standard_comparison_table
     *
     * @param \SellingPartnerApi\Model\AplusContentV20201101\StandardComparisonTableModule|null $standard_comparison_table standard_comparison_table
     *
     * @return self
     */
    public function setStandardComparisonTable($standard_comparison_table)
    {
        $this->container['standard_comparison_table'] = $standard_comparison_table;

        return $this;
    }
    /**
     * Gets standard_four_image_text
     *
     * @return \SellingPartnerApi\Model\AplusContentV20201101\StandardFourImageTextModule|null
     */
    public function getStandardFourImageText()
    {
        return $this->container['standard_four_image_text'];
    }

    /**
     * Sets standard_four_image_text
     *
     * @param \SellingPartnerApi\Model\AplusContentV20201101\StandardFourImageTextModule|null $standard_four_image_text standard_four_image_text
     *
     * @return self
     */
    public function setStandardFourImageText($standard_four_image_text)
    {
        $this->container['standard_four_image_text'] = $standard_four_image_text;

        return $this;
    }
    /**
     * Gets standard_four_image_text_quadrant
     *
     * @return \SellingPartnerApi\Model\AplusContentV20201101\StandardFourImageTextQuadrantModule|null
     */
    public function getStandardFourImageTextQuadrant()
    {
        return $this->container['standard_four_image_text_quadrant'];
    }

    /**
     * Sets standard_four_image_text_quadrant
     *
     * @param \SellingPartnerApi\Model\AplusContentV20201101\StandardFourImageTextQuadrantModule|null $standard_four_image_text_quadrant standard_four_image_text_quadrant
     *
     * @return self
     */
    public function setStandardFourImageTextQuadrant($standard_four_image_text_quadrant)
    {
        $this->container['standard_four_image_text_quadrant'] = $standard_four_image_text_quadrant;

        return $this;
    }
    /**
     * Gets standard_header_image_text
     *
     * @return \SellingPartnerApi\Model\AplusContentV20201101\StandardHeaderImageTextModule|null
     */
    public function getStandardHeaderImageText()
    {
        return $this->container['standard_header_image_text'];
    }

    /**
     * Sets standard_header_image_text
     *
     * @param \SellingPartnerApi\Model\AplusContentV20201101\StandardHeaderImageTextModule|null $standard_header_image_text standard_header_image_text
     *
     * @return self
     */
    public function setStandardHeaderImageText($standard_header_image_text)
    {
        $this->container['standard_header_image_text'] = $standard_header_image_text;

        return $this;
    }
    /**
     * Gets standard_image_sidebar
     *
     * @return \SellingPartnerApi\Model\AplusContentV20201101\StandardImageSidebarModule|null
     */
    public function getStandardImageSidebar()
    {
        return $this->container['standard_image_sidebar'];
    }

    /**
     * Sets standard_image_sidebar
     *
     * @param \SellingPartnerApi\Model\AplusContentV20201101\StandardImageSidebarModule|null $standard_image_sidebar standard_image_sidebar
     *
     * @return self
     */
    public function setStandardImageSidebar($standard_image_sidebar)
    {
        $this->container['standard_image_sidebar'] = $standard_image_sidebar;

        return $this;
    }
    /**
     * Gets standard_image_text_overlay
     *
     * @return \SellingPartnerApi\Model\AplusContentV20201101\StandardImageTextOverlayModule|null
     */
    public function getStandardImageTextOverlay()
    {
        return $this->container['standard_image_text_overlay'];
    }

    /**
     * Sets standard_image_text_overlay
     *
     * @param \SellingPartnerApi\Model\AplusContentV20201101\StandardImageTextOverlayModule|null $standard_image_text_overlay standard_image_text_overlay
     *
     * @return self
     */
    public function setStandardImageTextOverlay($standard_image_text_overlay)
    {
        $this->container['standard_image_text_overlay'] = $standard_image_text_overlay;

        return $this;
    }
    /**
     * Gets standard_multiple_image_text
     *
     * @return \SellingPartnerApi\Model\AplusContentV20201101\StandardMultipleImageTextModule|null
     */
    public function getStandardMultipleImageText()
    {
        return $this->container['standard_multiple_image_text'];
    }

    /**
     * Sets standard_multiple_image_text
     *
     * @param \SellingPartnerApi\Model\AplusContentV20201101\StandardMultipleImageTextModule|null $standard_multiple_image_text standard_multiple_image_text
     *
     * @return self
     */
    public function setStandardMultipleImageText($standard_multiple_image_text)
    {
        $this->container['standard_multiple_image_text'] = $standard_multiple_image_text;

        return $this;
    }
    /**
     * Gets standard_product_description
     *
     * @return \SellingPartnerApi\Model\AplusContentV20201101\StandardProductDescriptionModule|null
     */
    public function getStandardProductDescription()
    {
        return $this->container['standard_product_description'];
    }

    /**
     * Sets standard_product_description
     *
     * @param \SellingPartnerApi\Model\AplusContentV20201101\StandardProductDescriptionModule|null $standard_product_description standard_product_description
     *
     * @return self
     */
    public function setStandardProductDescription($standard_product_description)
    {
        $this->container['standard_product_description'] = $standard_product_description;

        return $this;
    }
    /**
     * Gets standard_single_image_highlights
     *
     * @return \SellingPartnerApi\Model\AplusContentV20201101\StandardSingleImageHighlightsModule|null
     */
    public function getStandardSingleImageHighlights()
    {
        return $this->container['standard_single_image_highlights'];
    }

    /**
     * Sets standard_single_image_highlights
     *
     * @param \SellingPartnerApi\Model\AplusContentV20201101\StandardSingleImageHighlightsModule|null $standard_single_image_highlights standard_single_image_highlights
     *
     * @return self
     */
    public function setStandardSingleImageHighlights($standard_single_image_highlights)
    {
        $this->container['standard_single_image_highlights'] = $standard_single_image_highlights;

        return $this;
    }
    /**
     * Gets standard_single_image_specs_detail
     *
     * @return \SellingPartnerApi\Model\AplusContentV20201101\StandardSingleImageSpecsDetailModule|null
     */
    public function getStandardSingleImageSpecsDetail()
    {
        return $this->container['standard_single_image_specs_detail'];
    }

    /**
     * Sets standard_single_image_specs_detail
     *
     * @param \SellingPartnerApi\Model\AplusContentV20201101\StandardSingleImageSpecsDetailModule|null $standard_single_image_specs_detail standard_single_image_specs_detail
     *
     * @return self
     */
    public function setStandardSingleImageSpecsDetail($standard_single_image_specs_detail)
    {
        $this->container['standard_single_image_specs_detail'] = $standard_single_image_specs_detail;

        return $this;
    }
    /**
     * Gets standard_single_side_image
     *
     * @return \SellingPartnerApi\Model\AplusContentV20201101\StandardSingleSideImageModule|null
     */
    public function getStandardSingleSideImage()
    {
        return $this->container['standard_single_side_image'];
    }

    /**
     * Sets standard_single_side_image
     *
     * @param \SellingPartnerApi\Model\AplusContentV20201101\StandardSingleSideImageModule|null $standard_single_side_image standard_single_side_image
     *
     * @return self
     */
    public function setStandardSingleSideImage($standard_single_side_image)
    {
        $this->container['standard_single_side_image'] = $standard_single_side_image;

        return $this;
    }
    /**
     * Gets standard_tech_specs
     *
     * @return \SellingPartnerApi\Model\AplusContentV20201101\StandardTechSpecsModule|null
     */
    public function getStandardTechSpecs()
    {
        return $this->container['standard_tech_specs'];
    }

    /**
     * Sets standard_tech_specs
     *
     * @param \SellingPartnerApi\Model\AplusContentV20201101\StandardTechSpecsModule|null $standard_tech_specs standard_tech_specs
     *
     * @return self
     */
    public function setStandardTechSpecs($standard_tech_specs)
    {
        $this->container['standard_tech_specs'] = $standard_tech_specs;

        return $this;
    }
    /**
     * Gets standard_text
     *
     * @return \SellingPartnerApi\Model\AplusContentV20201101\StandardTextModule|null
     */
    public function getStandardText()
    {
        return $this->container['standard_text'];
    }

    /**
     * Sets standard_text
     *
     * @param \SellingPartnerApi\Model\AplusContentV20201101\StandardTextModule|null $standard_text standard_text
     *
     * @return self
     */
    public function setStandardText($standard_text)
    {
        $this->container['standard_text'] = $standard_text;

        return $this;
    }
    /**
     * Gets standard_three_image_text
     *
     * @return \SellingPartnerApi\Model\AplusContentV20201101\StandardThreeImageTextModule|null
     */
    public function getStandardThreeImageText()
    {
        return $this->container['standard_three_image_text'];
    }

    /**
     * Sets standard_three_image_text
     *
     * @param \SellingPartnerApi\Model\AplusContentV20201101\StandardThreeImageTextModule|null $standard_three_image_text standard_three_image_text
     *
     * @return self
     */
    public function setStandardThreeImageText($standard_three_image_text)
    {
        $this->container['standard_three_image_text'] = $standard_three_image_text;

        return $this;
    }
}


