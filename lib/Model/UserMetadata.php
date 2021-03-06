<?php
/**
 * UserMetadata
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
 * UserMetadata Class Doc Comment
 *
 * @category Class
 * @description With the migration to PSD2 APIs, a new term called \&quot;User metadata\&quot; (also known as \&quot;PSU metadata\&quot;) has been introduced to the API. This user metadata aims to inform the banking API if there was a real end-user behind an HTTP request or if the request was triggered by a system (e.g. by an automatic batch update). In the latter case, the bank may apply some restrictions such as limiting the number of HTTP requests for a single consent. Also, some operations may be forbidden entirely by the banking API. For example, some banks do not allow issuing a new consent without the end-user being involved. Therefore, the PSU metadata must always be provided for such operations.&lt;br/&gt;&lt;br/&gt;As finAPI does not have direct interaction with the end-user for the background update, it is the client application&#39;s responsibility to provide all the necessary information about the end-user.
 * @package  OpenAPIWebForm\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UserMetadata implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UserMetadata';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ip_address' => 'string',
        'device_os' => 'string',
        'user_agent' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ip_address' => null,
        'device_os' => null,
        'user_agent' => null
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
        'ip_address' => 'ipAddress',
        'device_os' => 'deviceOs',
        'user_agent' => 'userAgent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ip_address' => 'setIpAddress',
        'device_os' => 'setDeviceOs',
        'user_agent' => 'setUserAgent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ip_address' => 'getIpAddress',
        'device_os' => 'getDeviceOs',
        'user_agent' => 'getUserAgent'
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
        $this->container['ip_address'] = $data['ip_address'] ?? null;
        $this->container['device_os'] = $data['device_os'] ?? null;
        $this->container['user_agent'] = $data['user_agent'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['ip_address'] === null) {
            $invalidProperties[] = "'ip_address' can't be null";
        }
        if ((mb_strlen($this->container['ip_address']) > 64)) {
            $invalidProperties[] = "invalid value for 'ip_address', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['ip_address']) < 0)) {
            $invalidProperties[] = "invalid value for 'ip_address', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['device_os'] === null) {
            $invalidProperties[] = "'device_os' can't be null";
        }
        if ((mb_strlen($this->container['device_os']) > 1024)) {
            $invalidProperties[] = "invalid value for 'device_os', the character length must be smaller than or equal to 1024.";
        }

        if ((mb_strlen($this->container['device_os']) < 0)) {
            $invalidProperties[] = "invalid value for 'device_os', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['user_agent'] === null) {
            $invalidProperties[] = "'user_agent' can't be null";
        }
        if ((mb_strlen($this->container['user_agent']) > 1024)) {
            $invalidProperties[] = "invalid value for 'user_agent', the character length must be smaller than or equal to 1024.";
        }

        if ((mb_strlen($this->container['user_agent']) < 0)) {
            $invalidProperties[] = "invalid value for 'user_agent', the character length must be bigger than or equal to 0.";
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
     * Gets ip_address
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->container['ip_address'];
    }

    /**
     * Sets ip_address
     *
     * @param string $ip_address The IP address of the user's device
     *
     * @return self
     */
    public function setIpAddress($ip_address)
    {
        if ((mb_strlen($ip_address) > 64)) {
            throw new \InvalidArgumentException('invalid length for $ip_address when calling UserMetadata., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($ip_address) < 0)) {
            throw new \InvalidArgumentException('invalid length for $ip_address when calling UserMetadata., must be bigger than or equal to 0.');
        }

        $this->container['ip_address'] = $ip_address;

        return $this;
    }

    /**
     * Gets device_os
     *
     * @return string
     */
    public function getDeviceOs()
    {
        return $this->container['device_os'];
    }

    /**
     * Sets device_os
     *
     * @param string $device_os The user's device and/or operating system identification
     *
     * @return self
     */
    public function setDeviceOs($device_os)
    {
        if ((mb_strlen($device_os) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $device_os when calling UserMetadata., must be smaller than or equal to 1024.');
        }
        if ((mb_strlen($device_os) < 0)) {
            throw new \InvalidArgumentException('invalid length for $device_os when calling UserMetadata., must be bigger than or equal to 0.');
        }

        $this->container['device_os'] = $device_os;

        return $this;
    }

    /**
     * Gets user_agent
     *
     * @return string
     */
    public function getUserAgent()
    {
        return $this->container['user_agent'];
    }

    /**
     * Sets user_agent
     *
     * @param string $user_agent The user's web browser or other client device identification
     *
     * @return self
     */
    public function setUserAgent($user_agent)
    {
        if ((mb_strlen($user_agent) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $user_agent when calling UserMetadata., must be smaller than or equal to 1024.');
        }
        if ((mb_strlen($user_agent) < 0)) {
            throw new \InvalidArgumentException('invalid length for $user_agent when calling UserMetadata., must be bigger than or equal to 0.');
        }

        $this->container['user_agent'] = $user_agent;

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


