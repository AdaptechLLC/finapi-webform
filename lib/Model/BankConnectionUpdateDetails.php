<?php
/**
 * BankConnectionUpdateDetails
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
 * The following pages give you some general information on how to use our APIs.<br>The actual API services documentation then follows further below. You can use the menu to jump between API sections.<br><br>This page has a built-in HTTP(S) client, so you can test the services directly from within this page, by filling in the request parameters and/or body in the respective services, and then hitting the TRY button. Note that you need to be authorized to make a successful API call. To authorize, refer to the '<a target=\"_blank\" href=\"https://docs.finapi.io/?product=access#tag--Authorization\">Authorization</a>' section of Access, or in case you already have a valid user token, just use the QUICK AUTH on the left.<br>Please also remember that all user management functions should be looked up in <a target=\"_blank\" href=\"https://docs.finapi.io/?product=access\">Access</a>.<br><br>You should also check out the <a href=\"https://finapi.zendesk.com/hc/en-us\">Developer Portal</a> for more information. If you need any help with the API, contact <a href=\"mailto:support@finapi.io\">support@finapi.io</a>.
 *
 * The version of the OpenAPI document: 2.92.0
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
 * BankConnectionUpdateDetails Class Doc Comment
 *
 * @category Class
 * @package  OpenAPIWebForm\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BankConnectionUpdateDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BankConnectionUpdateDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bank' => '\OpenAPIWebForm\Client\Model\UpdateBankDetails',
        'import_new_accounts' => 'bool',
        'account_types' => 'string[]',
        'skip_positions_download' => 'bool',
        'load_owner_data' => 'bool',
        'edit_saved_settings' => 'string[]',
        'callbacks' => '\OpenAPIWebForm\Client\Model\Callbacks',
        'profile_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bank' => null,
        'import_new_accounts' => null,
        'account_types' => null,
        'skip_positions_download' => null,
        'load_owner_data' => null,
        'edit_saved_settings' => null,
        'callbacks' => null,
        'profile_id' => null
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
        'bank' => 'bank',
        'import_new_accounts' => 'importNewAccounts',
        'account_types' => 'accountTypes',
        'skip_positions_download' => 'skipPositionsDownload',
        'load_owner_data' => 'loadOwnerData',
        'edit_saved_settings' => 'editSavedSettings',
        'callbacks' => 'callbacks',
        'profile_id' => 'profileId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bank' => 'setBank',
        'import_new_accounts' => 'setImportNewAccounts',
        'account_types' => 'setAccountTypes',
        'skip_positions_download' => 'setSkipPositionsDownload',
        'load_owner_data' => 'setLoadOwnerData',
        'edit_saved_settings' => 'setEditSavedSettings',
        'callbacks' => 'setCallbacks',
        'profile_id' => 'setProfileId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bank' => 'getBank',
        'import_new_accounts' => 'getImportNewAccounts',
        'account_types' => 'getAccountTypes',
        'skip_positions_download' => 'getSkipPositionsDownload',
        'load_owner_data' => 'getLoadOwnerData',
        'edit_saved_settings' => 'getEditSavedSettings',
        'callbacks' => 'getCallbacks',
        'profile_id' => 'getProfileId'
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

    const ACCOUNT_TYPES_BAUSPAREN = 'BAUSPAREN';
    const ACCOUNT_TYPES_CHECKING = 'CHECKING';
    const ACCOUNT_TYPES_CREDIT_CARD = 'CREDIT_CARD';
    const ACCOUNT_TYPES_LOAN = 'LOAN';
    const ACCOUNT_TYPES_MEMBERSHIP = 'MEMBERSHIP';
    const ACCOUNT_TYPES_SAVINGS = 'SAVINGS';
    const ACCOUNT_TYPES_SECURITY = 'SECURITY';
    const EDIT_SAVED_SETTINGS_CREDENTIALS = 'CREDENTIALS';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAccountTypesAllowableValues()
    {
        return [
            self::ACCOUNT_TYPES_BAUSPAREN,
            self::ACCOUNT_TYPES_CHECKING,
            self::ACCOUNT_TYPES_CREDIT_CARD,
            self::ACCOUNT_TYPES_LOAN,
            self::ACCOUNT_TYPES_MEMBERSHIP,
            self::ACCOUNT_TYPES_SAVINGS,
            self::ACCOUNT_TYPES_SECURITY,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEditSavedSettingsAllowableValues()
    {
        return [
            self::EDIT_SAVED_SETTINGS_CREDENTIALS,
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
        $this->container['bank'] = $data['bank'] ?? null;
        $this->container['import_new_accounts'] = $data['import_new_accounts'] ?? false;
        $this->container['account_types'] = $data['account_types'] ?? null;
        $this->container['skip_positions_download'] = $data['skip_positions_download'] ?? false;
        $this->container['load_owner_data'] = $data['load_owner_data'] ?? false;
        $this->container['edit_saved_settings'] = $data['edit_saved_settings'] ?? null;
        $this->container['callbacks'] = $data['callbacks'] ?? null;
        $this->container['profile_id'] = $data['profile_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['bank'] === null) {
            $invalidProperties[] = "'bank' can't be null";
        }
        if (!is_null($this->container['profile_id']) && (mb_strlen($this->container['profile_id']) > 36)) {
            $invalidProperties[] = "invalid value for 'profile_id', the character length must be smaller than or equal to 36.";
        }

        if (!is_null($this->container['profile_id']) && (mb_strlen($this->container['profile_id']) < 36)) {
            $invalidProperties[] = "invalid value for 'profile_id', the character length must be bigger than or equal to 36.";
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
     * Gets bank
     *
     * @return \OpenAPIWebForm\Client\Model\UpdateBankDetails
     */
    public function getBank()
    {
        return $this->container['bank'];
    }

    /**
     * Sets bank
     *
     * @param \OpenAPIWebForm\Client\Model\UpdateBankDetails $bank bank
     *
     * @return self
     */
    public function setBank($bank)
    {
        $this->container['bank'] = $bank;

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
     * @param bool|null $import_new_accounts Whether new accounts that have not yet been imported will be imported or not. Default is false.  By setting this parameter to true, we will try to get new accounts the user might have at the bank. The user will have a possibility to stop the process once he finds the accounts he is interested in have been imported. The set of newly imported accounts can be limited by using \"accountTypes\" parameter.
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
     * @return string[]|null
     */
    public function getAccountTypes()
    {
        return $this->container['account_types'];
    }

    /**
     * Sets account_types
     *
     * @param string[]|null $account_types A set of account types that are considered for the adding. If no values is given, then all accounts will be imported. Only applied if \"importNewAccounts\" is set to \"true\" and ignored otherwise. This parameter refers to the same parameters of \"Update a bank connection\" and  \"Connect a new interface\" services in the finAPI Access API.
     *
     * @return self
     */
    public function setAccountTypes($account_types)
    {
        $allowedValues = $this->getAccountTypesAllowableValues();
        if (!is_null($account_types) && array_diff($account_types, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'account_types', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
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
     * @param bool|null $skip_positions_download Whether to skip the download of transactions and securities or not. This parameter refers to the same parameter of the \"Import a new bank connection\" service in the finAPI Access API.
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
     * @param bool|null $load_owner_data Whether to load information about the bank connection owner(s). This parameter refers to the same parameter of the \"Import a new bank connection\" service in the finAPI Access API.
     *
     * @return self
     */
    public function setLoadOwnerData($load_owner_data)
    {
        $this->container['load_owner_data'] = $load_owner_data;

        return $this;
    }

    /**
     * Gets edit_saved_settings
     *
     * @return string[]|null
     */
    public function getEditSavedSettings()
    {
        return $this->container['edit_saved_settings'];
    }

    /**
     * Sets edit_saved_settings
     *
     * @param string[]|null $edit_saved_settings If the user has stored credentials in finAPI for the selected bank connection, then the finAPI web form will automatically use those to login to the bank. If a previous update failed because of invalid credentials or you want to allow the user to change his stored data, you can set this field. It will force the web form flow for the user and allow him to make changes to the data that he has stored in finAPI.<br/>Default value is 'null'.<br/>&bull; <code>CREDENTIALS</code> - the end user can edit his stored credentials.
     *
     * @return self
     */
    public function setEditSavedSettings($edit_saved_settings)
    {
        $allowedValues = $this->getEditSavedSettingsAllowableValues();
        if (!is_null($edit_saved_settings) && array_diff($edit_saved_settings, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'edit_saved_settings', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['edit_saved_settings'] = $edit_saved_settings;

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
            throw new \InvalidArgumentException('invalid length for $profile_id when calling BankConnectionUpdateDetails., must be smaller than or equal to 36.');
        }
        if (!is_null($profile_id) && (mb_strlen($profile_id) < 36)) {
            throw new \InvalidArgumentException('invalid length for $profile_id when calling BankConnectionUpdateDetails., must be bigger than or equal to 36.');
        }

        $this->container['profile_id'] = $profile_id;

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

