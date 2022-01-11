<?php
/**
 * PaymentWithAccountDetails
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
 * PaymentWithAccountDetails Class Doc Comment
 *
 * @category Class
 * @description Parameters for a payment with an account
 * @package  OpenAPIWebForm\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaymentWithAccountDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentWithAccountDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'execution_date' => '\DateTime',
        'batch_booking_preferred' => 'bool',
        'profile_id' => 'string',
        'redirect_url' => 'string',
        'callbacks' => '\OpenAPIWebForm\Client\Model\Callbacks',
        'sender' => '\OpenAPIWebForm\Client\Model\PaymentWithAccountSender',
        'orders' => '\OpenAPIWebForm\Client\Model\PaymentOrder[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'execution_date' => 'date',
        'batch_booking_preferred' => null,
        'profile_id' => null,
        'redirect_url' => null,
        'callbacks' => null,
        'sender' => null,
        'orders' => null
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
        'execution_date' => 'executionDate',
        'batch_booking_preferred' => 'batchBookingPreferred',
        'profile_id' => 'profileId',
        'redirect_url' => 'redirectUrl',
        'callbacks' => 'callbacks',
        'sender' => 'sender',
        'orders' => 'orders'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'execution_date' => 'setExecutionDate',
        'batch_booking_preferred' => 'setBatchBookingPreferred',
        'profile_id' => 'setProfileId',
        'redirect_url' => 'setRedirectUrl',
        'callbacks' => 'setCallbacks',
        'sender' => 'setSender',
        'orders' => 'setOrders'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'execution_date' => 'getExecutionDate',
        'batch_booking_preferred' => 'getBatchBookingPreferred',
        'profile_id' => 'getProfileId',
        'redirect_url' => 'getRedirectUrl',
        'callbacks' => 'getCallbacks',
        'sender' => 'getSender',
        'orders' => 'getOrders'
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
        $this->container['execution_date'] = $data['execution_date'] ?? null;
        $this->container['batch_booking_preferred'] = $data['batch_booking_preferred'] ?? true;
        $this->container['profile_id'] = $data['profile_id'] ?? null;
        $this->container['redirect_url'] = $data['redirect_url'] ?? null;
        $this->container['callbacks'] = $data['callbacks'] ?? null;
        $this->container['sender'] = $data['sender'] ?? null;
        $this->container['orders'] = $data['orders'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['profile_id']) && (mb_strlen($this->container['profile_id']) > 36)) {
            $invalidProperties[] = "invalid value for 'profile_id', the character length must be smaller than or equal to 36.";
        }

        if (!is_null($this->container['profile_id']) && (mb_strlen($this->container['profile_id']) < 36)) {
            $invalidProperties[] = "invalid value for 'profile_id', the character length must be bigger than or equal to 36.";
        }

        if (!is_null($this->container['redirect_url']) && (mb_strlen($this->container['redirect_url']) > 2048)) {
            $invalidProperties[] = "invalid value for 'redirect_url', the character length must be smaller than or equal to 2048.";
        }

        if (!is_null($this->container['redirect_url']) && (mb_strlen($this->container['redirect_url']) < 0)) {
            $invalidProperties[] = "invalid value for 'redirect_url', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['redirect_url']) && !preg_match("/https:\/\/(www\\.)?[-a-zA-Z0-9@:%._+~#=]{1,256}\\.[a-zA-Z0-9()]{1,6}\\b([-a-zA-Z0-9()@:%_+.~#?&\/=]*)/", $this->container['redirect_url'])) {
            $invalidProperties[] = "invalid value for 'redirect_url', must be conform to the pattern /https:\/\/(www\\.)?[-a-zA-Z0-9@:%._+~#=]{1,256}\\.[a-zA-Z0-9()]{1,6}\\b([-a-zA-Z0-9()@:%_+.~#?&\/=]*)/.";
        }

        if ($this->container['sender'] === null) {
            $invalidProperties[] = "'sender' can't be null";
        }
        if ($this->container['orders'] === null) {
            $invalidProperties[] = "'orders' can't be null";
        }
        if ((count($this->container['orders']) > 15000)) {
            $invalidProperties[] = "invalid value for 'orders', number of items must be less than or equal to 15000.";
        }

        if ((count($this->container['orders']) < 1)) {
            $invalidProperties[] = "invalid value for 'orders', number of items must be greater than or equal to 1.";
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
     * Gets execution_date
     *
     * @return \DateTime|null
     */
    public function getExecutionDate()
    {
        return $this->container['execution_date'];
    }

    /**
     * Sets execution_date
     *
     * @param \DateTime|null $execution_date Execution date for the money transfer(s), in the format \"YYYY-MM-DD\". May not be in the past. If not specified, then the current date will be used.
     *
     * @return self
     */
    public function setExecutionDate($execution_date)
    {
        $this->container['execution_date'] = $execution_date;

        return $this;
    }

    /**
     * Gets batch_booking_preferred
     *
     * @return bool|null
     */
    public function getBatchBookingPreferred()
    {
        return $this->container['batch_booking_preferred'];
    }

    /**
     * Sets batch_booking_preferred
     *
     * @param bool|null $batch_booking_preferred This field is only relevant when you pass multiple orders. It determines whether the orders should be processed by the bank as one collective booking (in case of <code>true</code>), or as separate bookings (in case of <code>false</code>). Note that it is subject to the bank whether it will regard the field.
     *
     * @return self
     */
    public function setBatchBookingPreferred($batch_booking_preferred)
    {
        $this->container['batch_booking_preferred'] = $batch_booking_preferred;

        return $this;
    }

    /**
     * Gets profile_id
     *
     * @return string|null
     */
    public function getProfileId()
    {
        return $this->container['profile_id'];
    }

    /**
     * Sets profile_id
     *
     * @param string|null $profile_id The profile to be applied to the web form.<br/>This will overwrite the default profile, if such a profile exists.
     *
     * @return self
     */
    public function setProfileId($profile_id)
    {
        if (!is_null($profile_id) && (mb_strlen($profile_id) > 36)) {
            throw new \InvalidArgumentException('invalid length for $profile_id when calling PaymentWithAccountDetails., must be smaller than or equal to 36.');
        }
        if (!is_null($profile_id) && (mb_strlen($profile_id) < 36)) {
            throw new \InvalidArgumentException('invalid length for $profile_id when calling PaymentWithAccountDetails., must be bigger than or equal to 36.');
        }

        $this->container['profile_id'] = $profile_id;

        return $this;
    }

    /**
     * Gets redirect_url
     *
     * @return string|null
     */
    public function getRedirectUrl()
    {
        return $this->container['redirect_url'];
    }

    /**
     * Sets redirect_url
     *
     * @param string|null $redirect_url The URL where the end-user will be redirected to after completing the bank login and (possibly) the SCA on the bank's website. Must always be provided by mandators with <code>FULLY_LICENSED</code> or <code>PISP</code> license type, and may not be provided by mandators with other license types.
     *
     * @return self
     */
    public function setRedirectUrl($redirect_url)
    {
        if (!is_null($redirect_url) && (mb_strlen($redirect_url) > 2048)) {
            throw new \InvalidArgumentException('invalid length for $redirect_url when calling PaymentWithAccountDetails., must be smaller than or equal to 2048.');
        }
        if (!is_null($redirect_url) && (mb_strlen($redirect_url) < 0)) {
            throw new \InvalidArgumentException('invalid length for $redirect_url when calling PaymentWithAccountDetails., must be bigger than or equal to 0.');
        }
        if (!is_null($redirect_url) && (!preg_match("/https:\/\/(www\\.)?[-a-zA-Z0-9@:%._+~#=]{1,256}\\.[a-zA-Z0-9()]{1,6}\\b([-a-zA-Z0-9()@:%_+.~#?&\/=]*)/", $redirect_url))) {
            throw new \InvalidArgumentException("invalid value for $redirect_url when calling PaymentWithAccountDetails., must conform to the pattern /https:\/\/(www\\.)?[-a-zA-Z0-9@:%._+~#=]{1,256}\\.[a-zA-Z0-9()]{1,6}\\b([-a-zA-Z0-9()@:%_+.~#?&\/=]*)/.");
        }

        $this->container['redirect_url'] = $redirect_url;

        return $this;
    }

    /**
     * Gets callbacks
     *
     * @return \OpenAPIWebForm\Client\Model\Callbacks|null
     */
    public function getCallbacks()
    {
        return $this->container['callbacks'];
    }

    /**
     * Sets callbacks
     *
     * @param \OpenAPIWebForm\Client\Model\Callbacks|null $callbacks callbacks
     *
     * @return self
     */
    public function setCallbacks($callbacks)
    {
        $this->container['callbacks'] = $callbacks;

        return $this;
    }

    /**
     * Gets sender
     *
     * @return \OpenAPIWebForm\Client\Model\PaymentWithAccountSender
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     *
     * @param \OpenAPIWebForm\Client\Model\PaymentWithAccountSender $sender sender
     *
     * @return self
     */
    public function setSender($sender)
    {
        $this->container['sender'] = $sender;

        return $this;
    }

    /**
     * Gets orders
     *
     * @return \OpenAPIWebForm\Client\Model\PaymentOrder[]
     */
    public function getOrders()
    {
        return $this->container['orders'];
    }

    /**
     * Sets orders
     *
     * @param \OpenAPIWebForm\Client\Model\PaymentOrder[] $orders Payment orders
     *
     * @return self
     */
    public function setOrders($orders)
    {

        if ((count($orders) > 15000)) {
            throw new \InvalidArgumentException('invalid value for $orders when calling PaymentWithAccountDetails., number of items must be less than or equal to 15000.');
        }
        if ((count($orders) < 1)) {
            throw new \InvalidArgumentException('invalid length for $orders when calling PaymentWithAccountDetails., number of items must be greater than or equal to 1.');
        }
        $this->container['orders'] = $orders;

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


