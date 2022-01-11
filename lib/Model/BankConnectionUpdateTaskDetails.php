<?php
/**
 * BankConnectionUpdateTaskDetails
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
 * BankConnectionUpdateTaskDetails Class Doc Comment
 *
 * @category Class
 * @package  OpenAPIWebForm\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BankConnectionUpdateTaskDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BankConnectionUpdateTaskDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bank_connection_id' => 'int',
        'import_new_accounts' => 'bool',
        'account_types' => '\OpenAPIWebForm\Client\Model\AccountType[]',
        'skip_positions_download' => 'bool',
        'load_owner_data' => 'bool',
        'manage_saved_settings' => '\OpenAPIWebForm\Client\Model\ManageSavedSettings[]',
        'callbacks' => '\OpenAPIWebForm\Client\Model\TaskCallbacks',
        'profile_id' => 'string',
        'redirect_url' => 'string',
        'user_metadata' => '\OpenAPIWebForm\Client\Model\UserMetadata'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bank_connection_id' => 'int64',
        'import_new_accounts' => null,
        'account_types' => null,
        'skip_positions_download' => null,
        'load_owner_data' => null,
        'manage_saved_settings' => null,
        'callbacks' => null,
        'profile_id' => null,
        'redirect_url' => null,
        'user_metadata' => null
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
        'bank_connection_id' => 'bankConnectionId',
        'import_new_accounts' => 'importNewAccounts',
        'account_types' => 'accountTypes',
        'skip_positions_download' => 'skipPositionsDownload',
        'load_owner_data' => 'loadOwnerData',
        'manage_saved_settings' => 'manageSavedSettings',
        'callbacks' => 'callbacks',
        'profile_id' => 'profileId',
        'redirect_url' => 'redirectUrl',
        'user_metadata' => 'userMetadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bank_connection_id' => 'setBankConnectionId',
        'import_new_accounts' => 'setImportNewAccounts',
        'account_types' => 'setAccountTypes',
        'skip_positions_download' => 'setSkipPositionsDownload',
        'load_owner_data' => 'setLoadOwnerData',
        'manage_saved_settings' => 'setManageSavedSettings',
        'callbacks' => 'setCallbacks',
        'profile_id' => 'setProfileId',
        'redirect_url' => 'setRedirectUrl',
        'user_metadata' => 'setUserMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bank_connection_id' => 'getBankConnectionId',
        'import_new_accounts' => 'getImportNewAccounts',
        'account_types' => 'getAccountTypes',
        'skip_positions_download' => 'getSkipPositionsDownload',
        'load_owner_data' => 'getLoadOwnerData',
        'manage_saved_settings' => 'getManageSavedSettings',
        'callbacks' => 'getCallbacks',
        'profile_id' => 'getProfileId',
        'redirect_url' => 'getRedirectUrl',
        'user_metadata' => 'getUserMetadata'
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
        $this->container['bank_connection_id'] = $data['bank_connection_id'] ?? null;
        $this->container['import_new_accounts'] = $data['import_new_accounts'] ?? false;
        $this->container['account_types'] = $data['account_types'] ?? null;
        $this->container['skip_positions_download'] = $data['skip_positions_download'] ?? false;
        $this->container['load_owner_data'] = $data['load_owner_data'] ?? false;
        $this->container['manage_saved_settings'] = $data['manage_saved_settings'] ?? null;
        $this->container['callbacks'] = $data['callbacks'] ?? null;
        $this->container['profile_id'] = $data['profile_id'] ?? null;
        $this->container['redirect_url'] = $data['redirect_url'] ?? null;
        $this->container['user_metadata'] = $data['user_metadata'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['bank_connection_id'] === null) {
            $invalidProperties[] = "'bank_connection_id' can't be null";
        }
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
     * Gets bank_connection_id
     *
     * @return int
     */
    public function getBankConnectionId()
    {
        return $this->container['bank_connection_id'];
    }

    /**
     * Sets bank_connection_id
     *
     * @param int $bank_connection_id Bank connection identifier.
     *
     * @return self
     */
    public function setBankConnectionId($bank_connection_id)
    {
        $this->container['bank_connection_id'] = $bank_connection_id;

        return $this;
    }

    /**
     * Gets import_new_accounts
     *
     * @return bool|null
     */
    public function getImportNewAccounts()
    {
        return $this->container['import_new_accounts'];
    }

    /**
     * Sets import_new_accounts
     *
     * @param bool|null $import_new_accounts Whether new accounts that have not yet been imported will be imported or not. <br/>Default is 'false'.<br/><br/>By setting this parameter to true, we will try to get new accounts the user might have at the bank. The user will have a possibility to stop the process once he finds the accounts he is interested in have been imported. The set of newly imported accounts can be limited by using \"accountTypes\" parameter.
     *
     * @return self
     */
    public function setImportNewAccounts($import_new_accounts)
    {
        $this->container['import_new_accounts'] = $import_new_accounts;

        return $this;
    }

    /**
     * Gets account_types
     *
     * @return \OpenAPIWebForm\Client\Model\AccountType[]|null
     */
    public function getAccountTypes()
    {
        return $this->container['account_types'];
    }

    /**
     * Sets account_types
     *
     * @param \OpenAPIWebForm\Client\Model\AccountType[]|null $account_types It defines the account types to be added on the bank connection. If no value is given, then all new available accounts will be imported.<br/>Only applied if \"importNewAccounts\" is set to \"true\" and ignored otherwise.<br/>This parameter refers to the same parameters of \"<a target='_blank' href='https://docs.finapi.io/?product=access#post-/api/v1/bankConnections/update'>Update a bank connection</a>\" and \"<a target='_blank' href='https://docs.finapi.io/?product=access#post-/api/v1/bankConnections/connectInterface'>Connect a new interface</a>\" services in the finAPI Access API.
     *
     * @return self
     */
    public function setAccountTypes($account_types)
    {


        $this->container['account_types'] = $account_types;

        return $this;
    }

    /**
     * Gets skip_positions_download
     *
     * @return bool|null
     */
    public function getSkipPositionsDownload()
    {
        return $this->container['skip_positions_download'];
    }

    /**
     * Sets skip_positions_download
     *
     * @param bool|null $skip_positions_download Whether to skip the download of transactions and securities or not.<br/>This parameter refers to the same parameters of \"<a target='_blank' href='https://docs.finapi.io/?product=access#post-/api/v1/bankConnections/update'>Update a bank connection</a>\" and \"<a target='_blank' href='https://docs.finapi.io/?product=access#post-/api/v1/bankConnections/connectInterface'>Connect a new interface</a>\" services in the finAPI Access API.<br/>Default is 'false'.
     *
     * @return self
     */
    public function setSkipPositionsDownload($skip_positions_download)
    {
        $this->container['skip_positions_download'] = $skip_positions_download;

        return $this;
    }

    /**
     * Gets load_owner_data
     *
     * @return bool|null
     */
    public function getLoadOwnerData()
    {
        return $this->container['load_owner_data'];
    }

    /**
     * Sets load_owner_data
     *
     * @param bool|null $load_owner_data Whether to load information about the bank connection owner(s).<br/>This parameter refers to the same parameters of \"<a target='_blank' href='https://docs.finapi.io/?product=access#post-/api/v1/bankConnections/update'>Update a bank connection</a>\" and \"<a target='_blank' href='https://docs.finapi.io/?product=access#post-/api/v1/bankConnections/connectInterface'>Connect a new interface</a>\" services in the finAPI Access API.<br/>Default is 'false'.<br/><strong>NOTE:</strong> This feature is supported only by the WEB_SCRAPER interface.
     *
     * @return self
     */
    public function setLoadOwnerData($load_owner_data)
    {
        $this->container['load_owner_data'] = $load_owner_data;

        return $this;
    }

    /**
     * Gets manage_saved_settings
     *
     * @return \OpenAPIWebForm\Client\Model\ManageSavedSettings[]|null
     */
    public function getManageSavedSettings()
    {
        return $this->container['manage_saved_settings'];
    }

    /**
     * Sets manage_saved_settings
     *
     * @param \OpenAPIWebForm\Client\Model\ManageSavedSettings[]|null $manage_saved_settings If users have stored bank credentials or their preferred TAN procedure in finAPI, then each time it is necessary, the web form will automatically apply the saved settings. This field will force the web form to be presented. Depending on the value you provide in the API, the end-user will have the possibility to provide new credentials, decide if he wants to store the new credentials in finAPI or delete the stored TAN procedure. He might also be able to save a different TAN procedure as preference if the workflow requires it. Use this parameter, for example, if a previous update failed because of invalid credentials, or you want to allow the end-user to reset his stored TAN preference.<br/>Default value is 'null'.<br/>&bull; <code>CREDENTIALS</code> - the end user can edit his stored credentials;<br/>&bull; <code>DEFAULT_TWO_STEP_PROCEDURE</code> - the end user can edit his stored default two step procedure.
     *
     * @return self
     */
    public function setManageSavedSettings($manage_saved_settings)
    {


        $this->container['manage_saved_settings'] = $manage_saved_settings;

        return $this;
    }

    /**
     * Gets callbacks
     *
     * @return \OpenAPIWebForm\Client\Model\TaskCallbacks|null
     */
    public function getCallbacks()
    {
        return $this->container['callbacks'];
    }

    /**
     * Sets callbacks
     *
     * @param \OpenAPIWebForm\Client\Model\TaskCallbacks|null $callbacks callbacks
     *
     * @return self
     */
    public function setCallbacks($callbacks)
    {
        $this->container['callbacks'] = $callbacks;

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
            throw new \InvalidArgumentException('invalid length for $profile_id when calling BankConnectionUpdateTaskDetails., must be smaller than or equal to 36.');
        }
        if (!is_null($profile_id) && (mb_strlen($profile_id) < 36)) {
            throw new \InvalidArgumentException('invalid length for $profile_id when calling BankConnectionUpdateTaskDetails., must be bigger than or equal to 36.');
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
     * @param string|null $redirect_url The URL where the end-user will be redirected to after completing the bank login and (possibly) the SCA on the bank's website. Must always be provided by mandators with <code>FULLY_LICENSED</code> or <code>AISP</code> license type, and may not be provided by mandators with other license types.
     *
     * @return self
     */
    public function setRedirectUrl($redirect_url)
    {
        if (!is_null($redirect_url) && (mb_strlen($redirect_url) > 2048)) {
            throw new \InvalidArgumentException('invalid length for $redirect_url when calling BankConnectionUpdateTaskDetails., must be smaller than or equal to 2048.');
        }
        if (!is_null($redirect_url) && (mb_strlen($redirect_url) < 0)) {
            throw new \InvalidArgumentException('invalid length for $redirect_url when calling BankConnectionUpdateTaskDetails., must be bigger than or equal to 0.');
        }
        if (!is_null($redirect_url) && (!preg_match("/https:\/\/(www\\.)?[-a-zA-Z0-9@:%._+~#=]{1,256}\\.[a-zA-Z0-9()]{1,6}\\b([-a-zA-Z0-9()@:%_+.~#?&\/=]*)/", $redirect_url))) {
            throw new \InvalidArgumentException("invalid value for $redirect_url when calling BankConnectionUpdateTaskDetails., must conform to the pattern /https:\/\/(www\\.)?[-a-zA-Z0-9@:%._+~#=]{1,256}\\.[a-zA-Z0-9()]{1,6}\\b([-a-zA-Z0-9()@:%_+.~#?&\/=]*)/.");
        }

        $this->container['redirect_url'] = $redirect_url;

        return $this;
    }

    /**
     * Gets user_metadata
     *
     * @return \OpenAPIWebForm\Client\Model\UserMetadata|null
     */
    public function getUserMetadata()
    {
        return $this->container['user_metadata'];
    }

    /**
     * Sets user_metadata
     *
     * @param \OpenAPIWebForm\Client\Model\UserMetadata|null $user_metadata user_metadata
     *
     * @return self
     */
    public function setUserMetadata($user_metadata)
    {
        $this->container['user_metadata'] = $user_metadata;

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


