<?php
/**
 * PaymentOrder
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
 * PaymentOrder Class Doc Comment
 *
 * @category Class
 * @description Payment order
 * @package  OpenAPIWebForm\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaymentOrder implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentOrder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => '\OpenAPIWebForm\Client\Model\Amount',
        'purpose' => 'string',
        'sepa_purpose_code' => 'string',
        'end_to_end_id' => 'string',
        'recipient' => '\OpenAPIWebForm\Client\Model\PaymentRecipient'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amount' => null,
        'purpose' => null,
        'sepa_purpose_code' => null,
        'end_to_end_id' => null,
        'recipient' => null
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
        'amount' => 'amount',
        'purpose' => 'purpose',
        'sepa_purpose_code' => 'sepaPurposeCode',
        'end_to_end_id' => 'endToEndId',
        'recipient' => 'recipient'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'purpose' => 'setPurpose',
        'sepa_purpose_code' => 'setSepaPurposeCode',
        'end_to_end_id' => 'setEndToEndId',
        'recipient' => 'setRecipient'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'purpose' => 'getPurpose',
        'sepa_purpose_code' => 'getSepaPurposeCode',
        'end_to_end_id' => 'getEndToEndId',
        'recipient' => 'getRecipient'
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
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['purpose'] = $data['purpose'] ?? null;
        $this->container['sepa_purpose_code'] = $data['sepa_purpose_code'] ?? null;
        $this->container['end_to_end_id'] = $data['end_to_end_id'] ?? null;
        $this->container['recipient'] = $data['recipient'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if (!is_null($this->container['purpose']) && (mb_strlen($this->container['purpose']) > 2000)) {
            $invalidProperties[] = "invalid value for 'purpose', the character length must be smaller than or equal to 2000.";
        }

        if (!is_null($this->container['purpose']) && (mb_strlen($this->container['purpose']) < 0)) {
            $invalidProperties[] = "invalid value for 'purpose', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['sepa_purpose_code']) && !preg_match("/^[a-zA-Z0-9]{4}$/", $this->container['sepa_purpose_code'])) {
            $invalidProperties[] = "invalid value for 'sepa_purpose_code', must be conform to the pattern /^[a-zA-Z0-9]{4}$/.";
        }

        if (!is_null($this->container['end_to_end_id']) && (mb_strlen($this->container['end_to_end_id']) > 35)) {
            $invalidProperties[] = "invalid value for 'end_to_end_id', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['end_to_end_id']) && (mb_strlen($this->container['end_to_end_id']) < 0)) {
            $invalidProperties[] = "invalid value for 'end_to_end_id', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['recipient'] === null) {
            $invalidProperties[] = "'recipient' can't be null";
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
     * Gets amount
     *
     * @return \OpenAPIWebForm\Client\Model\Amount
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param \OpenAPIWebForm\Client\Model\Amount $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets purpose
     *
     * @return string|null
     */
    public function getPurpose()
    {
        return $this->container['purpose'];
    }

    /**
     * Sets purpose
     *
     * @param string|null $purpose The purpose of the transfer transaction
     *
     * @return self
     */
    public function setPurpose($purpose)
    {
        if (!is_null($purpose) && (mb_strlen($purpose) > 2000)) {
            throw new \InvalidArgumentException('invalid length for $purpose when calling PaymentOrder., must be smaller than or equal to 2000.');
        }
        if (!is_null($purpose) && (mb_strlen($purpose) < 0)) {
            throw new \InvalidArgumentException('invalid length for $purpose when calling PaymentOrder., must be bigger than or equal to 0.');
        }

        $this->container['purpose'] = $purpose;

        return $this;
    }

    /**
     * Gets sepa_purpose_code
     *
     * @return string|null
     */
    public function getSepaPurposeCode()
    {
        return $this->container['sepa_purpose_code'];
    }

    /**
     * Sets sepa_purpose_code
     *
     * @param string|null $sepa_purpose_code SEPA purpose code, according to ISO 20022, external codes set.<br/>Note that the SEPA purpose code may be ignored by some banks.
     *
     * @return self
     */
    public function setSepaPurposeCode($sepa_purpose_code)
    {

        if (!is_null($sepa_purpose_code) && (!preg_match("/^[a-zA-Z0-9]{4}$/", $sepa_purpose_code))) {
            throw new \InvalidArgumentException("invalid value for $sepa_purpose_code when calling PaymentOrder., must conform to the pattern /^[a-zA-Z0-9]{4}$/.");
        }

        $this->container['sepa_purpose_code'] = $sepa_purpose_code;

        return $this;
    }

    /**
     * Gets end_to_end_id
     *
     * @return string|null
     */
    public function getEndToEndId()
    {
        return $this->container['end_to_end_id'];
    }

    /**
     * Sets end_to_end_id
     *
     * @param string|null $end_to_end_id End-To-End ID for the transfer transaction
     *
     * @return self
     */
    public function setEndToEndId($end_to_end_id)
    {
        if (!is_null($end_to_end_id) && (mb_strlen($end_to_end_id) > 35)) {
            throw new \InvalidArgumentException('invalid length for $end_to_end_id when calling PaymentOrder., must be smaller than or equal to 35.');
        }
        if (!is_null($end_to_end_id) && (mb_strlen($end_to_end_id) < 0)) {
            throw new \InvalidArgumentException('invalid length for $end_to_end_id when calling PaymentOrder., must be bigger than or equal to 0.');
        }

        $this->container['end_to_end_id'] = $end_to_end_id;

        return $this;
    }

    /**
     * Gets recipient
     *
     * @return \OpenAPIWebForm\Client\Model\PaymentRecipient
     */
    public function getRecipient()
    {
        return $this->container['recipient'];
    }

    /**
     * Sets recipient
     *
     * @param \OpenAPIWebForm\Client\Model\PaymentRecipient $recipient recipient
     *
     * @return self
     */
    public function setRecipient($recipient)
    {
        $this->container['recipient'] = $recipient;

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


