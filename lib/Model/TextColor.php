<?php
/**
 * TextColor
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPIWebForm\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * finAPI Web Form 2.0
 *
 * The following pages give you some general information on how to use our APIs.<br/>The actual API services documentation then follows further below. You can use the menu to jump between API sections.<br/><br/>This page has a built-in HTTP(S) client, so you can test the services directly from within this page, by filling in the request parameters and/or body in the respective services, and then hitting the TRY button. Note that you need to be authorized to make a successful API call. To authorize, refer to the '<a target=\"_blank\" href=\"https://docs.finapi.io/?product=access#tag--Authorization\">Authorization</a>' section of Access, or in case you already have a valid user token, just use the QUICK AUTH on the left.<br/>Please also remember that all user management functions should be looked up in <a target=\"_blank\" href=\"https://docs.finapi.io/?product=access\">Access</a>.<br/><br/>You should also check out the <a href=\"https://finapi.zendesk.com/hc/en-us\">Developer Portal</a> for more information. If you need any help with the API, contact <a href=\"mailto:support@finapi.io\">support@finapi.io</a>.
 *
 * The version of the OpenAPI document: 2.161.4
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPIWebForm\Client\Model;

use \ArrayAccess;
use \OpenAPIWebForm\Client\ObjectSerializer;

/**
 * TextColor Class Doc Comment
 *
 * @category Class
 * @description The color of various text elements in web form
 * @package  OpenAPIWebForm\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TextColor implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TextColor';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'primary' => 'string',
        'secondary' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'primary' => null,
        'secondary' => null
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
        'primary' => 'primary',
        'secondary' => 'secondary'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'primary' => 'setPrimary',
        'secondary' => 'setSecondary'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'primary' => 'getPrimary',
        'secondary' => 'getSecondary'
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
        $this->container['primary'] = $data['primary'] ?? null;
        $this->container['secondary'] = $data['secondary'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['primary']) && !preg_match("/#[0-9a-fA-F]{6}/", $this->container['primary'])) {
            $invalidProperties[] = "invalid value for 'primary', must be conform to the pattern /#[0-9a-fA-F]{6}/.";
        }

        if (!is_null($this->container['secondary']) && !preg_match("/#[0-9a-fA-F]{6}/", $this->container['secondary'])) {
            $invalidProperties[] = "invalid value for 'secondary', must be conform to the pattern /#[0-9a-fA-F]{6}/.";
        }

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
     * Gets primary
     *
     * @return string|null
     */
    public function getPrimary()
    {
        return $this->container['primary'];
    }

    /**
     * Sets primary
     *
     * @param string|null $primary The primary color of the text.<br/><strong>NOTE:</strong> If no value is provided, then the following value will be applied by default when web form is opened: <code>#232323</code>
     *
     * @return self
     */
    public function setPrimary($primary)
    {

        if (!is_null($primary) && (!preg_match("/#[0-9a-fA-F]{6}/", $primary))) {
            throw new \InvalidArgumentException("invalid value for $primary when calling TextColor., must conform to the pattern /#[0-9a-fA-F]{6}/.");
        }

        $this->container['primary'] = $primary;

        return $this;
    }

    /**
     * Gets secondary
     *
     * @return string|null
     */
    public function getSecondary()
    {
        return $this->container['secondary'];
    }

    /**
     * Sets secondary
     *
     * @param string|null $secondary The secondary color of the text (e.g. login hint, summaries, etc). Can be the same as primary color.<br/><strong>NOTE:</strong> If no value is provided, then the following value will be applied by default when web form is opened: <code>#848484</code>
     *
     * @return self
     */
    public function setSecondary($secondary)
    {

        if (!is_null($secondary) && (!preg_match("/#[0-9a-fA-F]{6}/", $secondary))) {
            throw new \InvalidArgumentException("invalid value for $secondary when calling TextColor., must conform to the pattern /#[0-9a-fA-F]{6}/.");
        }

        $this->container['secondary'] = $secondary;

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


