# OpenAPIWebForm\Client\AccountInformationServicesApi

All URIs are relative to https://webform-sandbox.finapi.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createForBankConnectionImport()**](AccountInformationServicesApi.md#createForBankConnectionImport) | **POST** /api/webForms/bankConnectionImport | Import a bank connection
[**createForBankConnectionUpdate()**](AccountInformationServicesApi.md#createForBankConnectionUpdate) | **POST** /api/webForms/bankConnectionUpdate | Update a bank connection (BETA)


## `createForBankConnectionImport()`

```php
createForBankConnectionImport($bank_connection_import_details): \OpenAPIWebForm\Client\Model\WebForm
```

Import a bank connection

Imports and groups all the bank data the end user has at the specific bank into a bank connection (identifiable with a bankConnectionId). The end point connects to all available interfaces(XS2A, finTS and Web Scraper) for the bank. Hence, the end user will be prompted for credentials and SCA for every loop over each of the interface. For best results, consider your use case and review the API parameter, accountTypes list before you begin your integration.<br/><br/>All bank accounts will be downloaded and imported with their current balances, transactions and supported two-step-procedures (note that the amount of available transactions may vary between banks, e.g. some banks deliver all transactions from the past year, others only deliver the transactions from the past three months). The balance and transactions download process runs asynchronously, so this service may return before all balances and transactions have been imported. Also, all downloaded transactions will be categorized by a separate background process that runs asynchronously too. To check the status of the balance and transactions download process as well as the background categorization process, see the status flags that are returned by the GET /bankConnections/ service. For a more in-depth understanding of the import process, please also read this article on our Dev Portal: <a target=\"_blank\" href=\"https://finapi.zendesk.com/hc/en-us/articles/115000296607-Import-Update-of-Bank-Connections-Accounts\">Import & Update of Bank Connections / Accounts</a>.<br/><br/>In order to test the API, you can import a \"demo connection\". To import the demo connection, you need to pass the identifier of the \"finAPI Test Bank\". For more details, please see the associated <a target=\"_blank\" href=\"https://finapi.jira.com/wiki/spaces/AAPD/pages/2556264541/Testing+finAPI+Demo+Banks\">documentation</a>.<br/><br/>In case the API request is syntactically correct, the service will respond with HTTP return code 201 and a unique URL. You must direct your user to our web form with the URL.<br/><br/>Must pass the user's access token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: UserAccessToken
$config = OpenAPIWebForm\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPIWebForm\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPIWebForm\Client\Api\AccountInformationServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_connection_import_details = new \OpenAPIWebForm\Client\Model\BankConnectionImportDetails(); // \OpenAPIWebForm\Client\Model\BankConnectionImportDetails

try {
    $result = $apiInstance->createForBankConnectionImport($bank_connection_import_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountInformationServicesApi->createForBankConnectionImport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_connection_import_details** | [**\OpenAPIWebForm\Client\Model\BankConnectionImportDetails**](../Model/BankConnectionImportDetails.md)|  |

### Return type

[**\OpenAPIWebForm\Client\Model\WebForm**](../Model/WebForm.md)

### Authorization

[UserAccessToken](../../README.md#UserAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createForBankConnectionUpdate()`

```php
createForBankConnectionUpdate($bank_connection_update_details): \OpenAPIWebForm\Client\Model\WebForm
```

Update a bank connection (BETA)

This end point serves 3 purposes:<br/><br/>Updates the bank connection to present the most latest snapshot of the accounts connected to it. The update impacts account data and transaction data. The end point will loop over all connected interfaces and update every account (and its related data) on the bank connection. Hence, the end user might be prompted for credentials and SCA for every loop over each of the interface. You can also update the \"demo connection\" if you would like to test the end point.<br/>Note that you cannot trigger an update of a bank connection as long as there is still a previously triggered update running.<br/><br/>For a more in-depth understanding of the update process, please also read this article on our Dev Portal: <a target=\"_blank\" href=\"https://finapi.zendesk.com/hc/en-us/articles/115000296607-Import-Update-of-Bank-Connections-Accounts\">Import & Update of Bank Connections / Accounts</a>.<br/><br/>Looks for and imported any new accounts that the end user (newly) has at the bank. This look up is only possible by setting a specific API parameter.<br/><br/>Allows the end user to manage their preference for bank login credentials storage. Use a specific API parameter in order to allow end users to update credentials in our Database or also to stop saving credentials, if they wish to.<br/><br/>In case the API request is syntactically correct, the service will respond with HTTP return code 201 and a unique URL. You must direct your user to our web form with the URL.<br/><br/>Must pass the user's access token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: UserAccessToken
$config = OpenAPIWebForm\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPIWebForm\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPIWebForm\Client\Api\AccountInformationServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_connection_update_details = new \OpenAPIWebForm\Client\Model\BankConnectionUpdateDetails(); // \OpenAPIWebForm\Client\Model\BankConnectionUpdateDetails

try {
    $result = $apiInstance->createForBankConnectionUpdate($bank_connection_update_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountInformationServicesApi->createForBankConnectionUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_connection_update_details** | [**\OpenAPIWebForm\Client\Model\BankConnectionUpdateDetails**](../Model/BankConnectionUpdateDetails.md)|  |

### Return type

[**\OpenAPIWebForm\Client\Model\WebForm**](../Model/WebForm.md)

### Authorization

[UserAccessToken](../../README.md#UserAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
