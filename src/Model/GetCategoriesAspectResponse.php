<?php
/**
 * GetCategoriesAspectResponse
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  macropage\SDKs\ebay\rest\taxonomy
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Taxonomy API
 *
 * Use the Taxonomy API to discover the most appropriate eBay categories under which sellers can offer inventory items for sale, and the most likely categories under which buyers can browse or search for items to purchase. In addition, the Taxonomy API provides metadata about the required and recommended category aspects to include in listings, and also has two operations to retrieve parts compatibility information.
 *
 * The version of the OpenAPI document: v1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace macropage\SDKs\ebay\rest\taxonomy\Model;

use \ArrayAccess;
use \macropage\SDKs\ebay\rest\taxonomy\ObjectSerializer;

/**
 * GetCategoriesAspectResponse Class Doc Comment
 *
 * @category Class
 * @package  macropage\SDKs\ebay\rest\taxonomy
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GetCategoriesAspectResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetCategoriesAspectResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'categoryTreeId' => 'string',
        'categoryTreeVersion' => 'string',
        'categoryAspects' => '\macropage\SDKs\ebay\rest\taxonomy\Model\CategoryAspect[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'categoryTreeId' => null,
        'categoryTreeVersion' => null,
        'categoryAspects' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'categoryTreeId' => 'categoryTreeId',
        'categoryTreeVersion' => 'categoryTreeVersion',
        'categoryAspects' => 'categoryAspects'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'categoryTreeId' => 'setCategoryTreeId',
        'categoryTreeVersion' => 'setCategoryTreeVersion',
        'categoryAspects' => 'setCategoryAspects'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'categoryTreeId' => 'getCategoryTreeId',
        'categoryTreeVersion' => 'getCategoryTreeVersion',
        'categoryAspects' => 'getCategoryAspects'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
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
        $this->container['categoryTreeId'] = $data['categoryTreeId'] ?? null;
        $this->container['categoryTreeVersion'] = $data['categoryTreeVersion'] ?? null;
        $this->container['categoryAspects'] = $data['categoryAspects'] ?? null;
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
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets categoryTreeId
     *
     * @return string|null
     */
    public function getCategoryTreeId()
    {
        return $this->container['categoryTreeId'];
    }

    /**
     * Sets categoryTreeId
     *
     * @param string|null $categoryTreeId The unique identifier of the eBay category tree being requested.
     *
     * @return self
     */
    public function setCategoryTreeId($categoryTreeId)
    {
        $this->container['categoryTreeId'] = $categoryTreeId;

        return $this;
    }

    /**
     * Gets categoryTreeVersion
     *
     * @return string|null
     */
    public function getCategoryTreeVersion()
    {
        return $this->container['categoryTreeVersion'];
    }

    /**
     * Sets categoryTreeVersion
     *
     * @param string|null $categoryTreeVersion The version of the category tree that is returned in the categoryTreeId field.
     *
     * @return self
     */
    public function setCategoryTreeVersion($categoryTreeVersion)
    {
        $this->container['categoryTreeVersion'] = $categoryTreeVersion;

        return $this;
    }

    /**
     * Gets categoryAspects
     *
     * @return \macropage\SDKs\ebay\rest\taxonomy\Model\CategoryAspect[]|null
     */
    public function getCategoryAspects()
    {
        return $this->container['categoryAspects'];
    }

    /**
     * Sets categoryAspects
     *
     * @param \macropage\SDKs\ebay\rest\taxonomy\Model\CategoryAspect[]|null $categoryAspects An array of aspects that are appropriate or necessary for accurately describing items in a particular leaf category.
     *
     * @return self
     */
    public function setCategoryAspects($categoryAspects)
    {
        $this->container['categoryAspects'] = $categoryAspects;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


