<?php
/**
 * Functionality
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
 * Functionality Class Doc Comment
 *
 * @category Class
 * @description Customization of web form functionality
 * @package  OpenAPIWebForm\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Functionality implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Functionality';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'progress_bar' => 'string',
        'bank_login_hint' => 'string',
        'store_secrets' => 'string',
        'bank_details' => 'string',
        'header' => 'string',
        'language' => '\OpenAPIWebForm\Client\Model\Language'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'progress_bar' => null,
        'bank_login_hint' => null,
        'store_secrets' => null,
        'bank_details' => null,
        'header' => null,
        'language' => null
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
        'progress_bar' => 'progressBar',
        'bank_login_hint' => 'bankLoginHint',
        'store_secrets' => 'storeSecrets',
        'bank_details' => 'bankDetails',
        'header' => 'header',
        'language' => 'language'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'progress_bar' => 'setProgressBar',
        'bank_login_hint' => 'setBankLoginHint',
        'store_secrets' => 'setStoreSecrets',
        'bank_details' => 'setBankDetails',
        'header' => 'setHeader',
        'language' => 'setLanguage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'progress_bar' => 'getProgressBar',
        'bank_login_hint' => 'getBankLoginHint',
        'store_secrets' => 'getStoreSecrets',
        'bank_details' => 'getBankDetails',
        'header' => 'getHeader',
        'language' => 'getLanguage'
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

    const PROGRESS_BAR_RENDER = 'RENDER';
    const PROGRESS_BAR_HIDDEN = 'HIDDEN';
    const BANK_LOGIN_HINT_EXPANDED = 'EXPANDED';
    const BANK_LOGIN_HINT_COLLAPSED = 'COLLAPSED';
    const BANK_LOGIN_HINT_HIDDEN = 'HIDDEN';
    const STORE_SECRETS_RENDER = 'RENDER';
    const STORE_SECRETS_HIDDEN = 'HIDDEN';
    const STORE_SECRETS_IMPLICIT_APPROVAL = 'IMPLICIT_APPROVAL';
    const BANK_DETAILS_LOCKED = 'LOCKED';
    const BANK_DETAILS_EDITABLE = 'EDITABLE';
    const HEADER_RENDER = 'RENDER';
    const HEADER_HIDDEN = 'HIDDEN';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProgressBarAllowableValues()
    {
        return [
            self::PROGRESS_BAR_RENDER,
            self::PROGRESS_BAR_HIDDEN,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBankLoginHintAllowableValues()
    {
        return [
            self::BANK_LOGIN_HINT_EXPANDED,
            self::BANK_LOGIN_HINT_COLLAPSED,
            self::BANK_LOGIN_HINT_HIDDEN,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStoreSecretsAllowableValues()
    {
        return [
            self::STORE_SECRETS_RENDER,
            self::STORE_SECRETS_HIDDEN,
            self::STORE_SECRETS_IMPLICIT_APPROVAL,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBankDetailsAllowableValues()
    {
        return [
            self::BANK_DETAILS_LOCKED,
            self::BANK_DETAILS_EDITABLE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHeaderAllowableValues()
    {
        return [
            self::HEADER_RENDER,
            self::HEADER_HIDDEN,
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
        $this->container['progress_bar'] = $data['progress_bar'] ?? null;
        $this->container['bank_login_hint'] = $data['bank_login_hint'] ?? null;
        $this->container['store_secrets'] = $data['store_secrets'] ?? null;
        $this->container['bank_details'] = $data['bank_details'] ?? null;
        $this->container['header'] = $data['header'] ?? null;
        $this->container['language'] = $data['language'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getProgressBarAllowableValues();
        if (!is_null($this->container['progress_bar']) && !in_array($this->container['progress_bar'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'progress_bar', must be one of '%s'",
                $this->container['progress_bar'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getBankLoginHintAllowableValues();
        if (!is_null($this->container['bank_login_hint']) && !in_array($this->container['bank_login_hint'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'bank_login_hint', must be one of '%s'",
                $this->container['bank_login_hint'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStoreSecretsAllowableValues();
        if (!is_null($this->container['store_secrets']) && !in_array($this->container['store_secrets'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'store_secrets', must be one of '%s'",
                $this->container['store_secrets'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getBankDetailsAllowableValues();
        if (!is_null($this->container['bank_details']) && !in_array($this->container['bank_details'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'bank_details', must be one of '%s'",
                $this->container['bank_details'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getHeaderAllowableValues();
        if (!is_null($this->container['header']) && !in_array($this->container['header'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'header', must be one of '%s'",
                $this->container['header'],
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
     * Gets progress_bar
     *
     * @return string|null
     */
    public function getProgressBar()
    {
        return $this->container['progress_bar'];
    }

    /**
     * Sets progress_bar
     *
     * @param string|null $progress_bar Whether a progress bar is shown on the web form, letting the user know on which step he is.<br/>&bull; <code>RENDER</code> - the progress bar will be shown;<br/>&bull; <code>HIDDEN</code> - the progress bar will NOT be shown.<br/><strong>NOTE:</strong> If no value is provided, then the following value will be applied by default when web form is opened: <code>RENDER</code>.
     *
     * @return self
     */
    public function setProgressBar($progress_bar)
    {
        $allowedValues = $this->getProgressBarAllowableValues();
        if (!is_null($progress_bar) && !in_array($progress_bar, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'progress_bar', must be one of '%s'",
                    $progress_bar,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['progress_bar'] = $progress_bar;

        return $this;
    }

    /**
     * Gets bank_login_hint
     *
     * @return string|null
     */
    public function getBankLoginHint()
    {
        return $this->container['bank_login_hint'];
    }

    /**
     * Sets bank_login_hint
     *
     * @param string|null $bank_login_hint How the bank login hint will be shown to the end user<br/>&bull; <code>EXPENDED</code> - the user will see the login hint and will have the option to collapse it;<br/>&bull; <code>COLLAPSED</code> - the login hint will be collapsed and the user can see it if he expands the field;<br/>&bull; <code>HIDDEN</code> - the login hint is hidden and the user cannot see it.<br/><strong>NOTE:</strong> If no value is provided, then the following value will be applied by default when web form is opened: <code>EXPANDED</code>.
     *
     * @return self
     */
    public function setBankLoginHint($bank_login_hint)
    {
        $allowedValues = $this->getBankLoginHintAllowableValues();
        if (!is_null($bank_login_hint) && !in_array($bank_login_hint, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'bank_login_hint', must be one of '%s'",
                    $bank_login_hint,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['bank_login_hint'] = $bank_login_hint;

        return $this;
    }

    /**
     * Gets store_secrets
     *
     * @return string|null
     */
    public function getStoreSecrets()
    {
        return $this->container['store_secrets'];
    }

    /**
     * Sets store_secrets
     *
     * @param string|null $store_secrets Whether the user will have a checkbox to ask for storing login secrets (like a PIN) in finAPI or not.<br/>&bull; <code>RENDER</code> - the checkbox will be shown;<br/>&bull; <code>HIDDEN</code> - the checkbox will NOT be shown;<br/>&bull; <code>IMPLICIT_APPROVAL</code> - the checkbox will NOT be shown but login secrets will nevertheless be stored.<br/>&nbsp;&nbsp;&nbsp;&nbsp;<strong>NOTE:</strong> This value can be applied ONLY by our support team. Please contact support@finapi.io with the profileId as soon as you have finalized the customization for other parameters.<br/><strong>NOTE:</strong> If no value is provided, then the following value will be applied by default when web form is opened: <code>RENDER</code>.
     *
     * @return self
     */
    public function setStoreSecrets($store_secrets)
    {
        $allowedValues = $this->getStoreSecretsAllowableValues();
        if (!is_null($store_secrets) && !in_array($store_secrets, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'store_secrets', must be one of '%s'",
                    $store_secrets,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['store_secrets'] = $store_secrets;

        return $this;
    }

    /**
     * Gets bank_details
     *
     * @return string|null
     */
    public function getBankDetails()
    {
        return $this->container['bank_details'];
    }

    /**
     * Sets bank_details
     *
     * @param string|null $bank_details Whether the user will be allowed to change the selected bank, in case a BLZ/BIC/IBAN was sent in the API request by the client.<br/>&bull; <code>LOCKED</code> - the user will be directly routed to login to the pre-selected bank;<br/>&bull; <code>EDITABLE</code> - the user will see the pre-selected bank and have the option to change it.<br/><strong>NOTE:</strong> If no value is provided, then the following value will be applied by default when web form is opened: <code>LOCKED</code>.
     *
     * @return self
     */
    public function setBankDetails($bank_details)
    {
        $allowedValues = $this->getBankDetailsAllowableValues();
        if (!is_null($bank_details) && !in_array($bank_details, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'bank_details', must be one of '%s'",
                    $bank_details,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['bank_details'] = $bank_details;

        return $this;
    }

    /**
     * Gets header
     *
     * @return string|null
     */
    public function getHeader()
    {
        return $this->container['header'];
    }

    /**
     * Sets header
     *
     * @param string|null $header Whether the header will be displayed on the web form.<br/>&bull; <code>RENDER</code> - the header will be shown;<br/>&bull; <code>HIDDEN</code> - the header will NOT be shown.<br/><strong>NOTE:</strong> If no value is provided, then the following value will be applied by default when web form is opened: <code>RENDER</code>.
     *
     * @return self
     */
    public function setHeader($header)
    {
        $allowedValues = $this->getHeaderAllowableValues();
        if (!is_null($header) && !in_array($header, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'header', must be one of '%s'",
                    $header,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['header'] = $header;

        return $this;
    }

    /**
     * Gets language
     *
     * @return \OpenAPIWebForm\Client\Model\Language|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param \OpenAPIWebForm\Client\Model\Language|null $language language
     *
     * @return self
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

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


