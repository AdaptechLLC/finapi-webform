<?php
/**
 * Language
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
 * The following pages give you some general information on how to use our APIs.<br/>The actual API services documentation then follows further below. You can use the menu to jump between API sections.<br/><br/>This page has a built-in HTTP(S) client, so you can test the services directly from within this page, by filling in the request parameters and/or body in the respective services, and then hitting the TRY button. Note that you need to be authorized to make a successful API call. To authorize, refer to the '<a target='_blank' href='https://docs.finapi.io/?product=access#tag--Authorization'>Authorization</a>' section of Access, or in case you already have a valid user token, just use the QUICK AUTH on the left.<br/>Please also remember that all user management functions should be looked up in <a target='_blank' href='https://docs.finapi.io/?product=access'>Access</a>.<br/><br/>You should also check out the <a target='_blank' href='https://documentation.finapi.io/webform/'>Web Form 2.0 Public Documentation</a> as well as <a target='_blank' href='https://documentation.finapi.io/access/'>Access Public Documentation</a> for more information. If you need any help with the API, contact <a href='mailto:support@finapi.io'>support@finapi.io</a>.
 *
 * The version of the OpenAPI document: 2.277.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0
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
 * Language Class Doc Comment
 *
 * @category Class
 * @description Customization of the web form language settings
 * @package  OpenAPIWebForm\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Language implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Language';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'selector' => 'string',
        'locked' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'selector' => null,
        'locked' => null
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
        'selector' => 'selector',
        'locked' => 'locked'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'selector' => 'setSelector',
        'locked' => 'setLocked'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'selector' => 'getSelector',
        'locked' => 'getLocked'
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

    const SELECTOR_RENDER = 'RENDER';
    const SELECTOR_HIDDEN = 'HIDDEN';
    const LOCKED_DE = 'DE';
    const LOCKED_EN = 'EN';
    const LOCKED_CS = 'CS';
    const LOCKED_SK = 'SK';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSelectorAllowableValues()
    {
        return [
            self::SELECTOR_RENDER,
            self::SELECTOR_HIDDEN,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLockedAllowableValues()
    {
        return [
            self::LOCKED_DE,
            self::LOCKED_EN,
            self::LOCKED_CS,
            self::LOCKED_SK,
        ];
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
        $this->container['selector'] = $data['selector'] ?? null;
        $this->container['locked'] = $data['locked'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSelectorAllowableValues();
        if (!is_null($this->container['selector']) && !in_array($this->container['selector'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'selector', must be one of '%s'",
                $this->container['selector'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLockedAllowableValues();
        if (!is_null($this->container['locked']) && !in_array($this->container['locked'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'locked', must be one of '%s'",
                $this->container['locked'],
                implode("', '", $allowedValues)
            );
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
     * Gets selector
     *
     * @return string|null
     */
    public function getSelector()
    {
        return $this->container['selector'];
    }

    /**
     * Sets selector
     *
     * @param string|null $selector Whether the language selector in the web form header will be displayed.<br/><strong>NOTE:</strong> in case <code>functionality.header</code> is marked as <code>HIDDEN</code>, then this property will be ignored.<br/><strong>NOTE:</strong> If no value is provided, then the following value will be applied by default when web form is opened: <code>RENDER</code>.
     *
     * @return self
     */
    public function setSelector($selector)
    {
        $allowedValues = $this->getSelectorAllowableValues();
        if (!is_null($selector) && !in_array($selector, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'selector', must be one of '%s'",
                    $selector,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['selector'] = $selector;

        return $this;
    }

    /**
     * Gets locked
     *
     * @return string|null
     */
    public function getLocked()
    {
        return $this->container['locked'];
    }

    /**
     * Sets locked
     *
     * @param string|null $locked The language in which the web form will be shown.<br/>&bull; This must be initialized if either the <code>functionality.header</code> or <code>functionality.language.selector</code> are <code>HIDDEN</code>;<br/>&bull; This must be null if both <code>functionality.header</code> and <code>functionality.language.selector</code> are set to <code>RENDER</code>.<br/><strong>NOTE:</strong> If no value is provided, then the following value will be applied by default when web form is opened: <code>null</code>.
     *
     * @return self
     */
    public function setLocked($locked)
    {
        $allowedValues = $this->getLockedAllowableValues();
        if (!is_null($locked) && !in_array($locked, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'locked', must be one of '%s'",
                    $locked,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['locked'] = $locked;

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


