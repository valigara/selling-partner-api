<?php
/**
 * EncryptionDetails
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Services
 *
 * With the Services API, you can build applications that help service providers get and modify their service orders and manage their resources.
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

namespace SellingPartnerApi\Model\ServiceV1;
use SellingPartnerApi\Model\BaseModel;
use \ArrayAccess;
use \SellingPartnerApi\Model\ModelInterface;
use \SellingPartnerApi\ObjectSerializer;

/**
 * EncryptionDetails Class Doc Comment
 *
 * @category Class
 * @description Encryption details for required client-side encryption and decryption of document contents.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class EncryptionDetails extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EncryptionDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'standard' => 'string',
        'initialization_vector' => 'string',
        'key' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'standard' => null,
        'initialization_vector' => null,
        'key' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'standard' => 'standard',
        'initialization_vector' => 'initializationVector',
        'key' => 'key'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'standard' => 'setStandard',
        'initialization_vector' => 'setInitializationVector',
        'key' => 'setKey'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'standard' => 'getStandard',
        'initialization_vector' => 'getInitializationVector',
        'key' => 'getKey'
    ];



    const STANDARD_AES = 'AES';
    
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStandardAllowableValues()
    {
        $baseVals = [
            self::STANDARD_AES,
        ];

        // This is necessary because Amazon does not consistently capitalize their
        // enum values, so we do case-insensitive enum value validation in ObjectSerializer
        return array_map(function ($val) { return strtoupper($val); }, $baseVals);
    }
    
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
        $this->container['standard'] = $data['standard'] ?? null;
        $this->container['initialization_vector'] = $data['initialization_vector'] ?? null;
        $this->container['key'] = $data['key'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['standard'] === null) {
            $invalidProperties[] = "'standard' can't be null";
        }
        $allowedValues = $this->getStandardAllowableValues();
        if (
            !is_null($this->container['standard']) &&
            !in_array(strtoupper($this->container['standard']), $allowedValues, true)
        ) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'standard', must be one of '%s'",
                $this->container['standard'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['initialization_vector'] === null) {
            $invalidProperties[] = "'initialization_vector' can't be null";
        }
        if ($this->container['key'] === null) {
            $invalidProperties[] = "'key' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets standard
     *
     * @return string
     */
    public function getStandard()
    {
        return $this->container['standard'];
    }

    /**
     * Sets standard
     *
     * @param string $standard The encryption standard required to encrypt or decrypt the document contents.
     *
     * @return self
     */
    public function setStandard($standard)
    {
        $allowedValues = $this->getStandardAllowableValues();
        if (!in_array(strtoupper($standard), $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'standard', must be one of '%s'",
                    $standard,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['standard'] = $standard;

        return $this;
    }
    /**
     * Gets initialization_vector
     *
     * @return string
     */
    public function getInitializationVector()
    {
        return $this->container['initialization_vector'];
    }

    /**
     * Sets initialization_vector
     *
     * @param string $initialization_vector The vector to encrypt or decrypt the document contents using Cipher Block Chaining (CBC).
     *
     * @return self
     */
    public function setInitializationVector($initialization_vector)
    {
        $this->container['initialization_vector'] = $initialization_vector;

        return $this;
    }
    /**
     * Gets key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param string $key The encryption key used to encrypt or decrypt the document contents.
     *
     * @return self
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

        return $this;
    }
}


