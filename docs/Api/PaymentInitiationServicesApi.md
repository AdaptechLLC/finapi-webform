# OpenAPIWebForm\Client\PaymentInitiationServicesApi

All URIs are relative to https://webform-sandbox.finapi.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createForPaymentWithAccountId()**](PaymentInitiationServicesApi.md#createForPaymentWithAccountId) | **POST** /api/webForms/paymentWithAccountId | Create a payment with account ID
[**createForStandalonePayment()**](PaymentInitiationServicesApi.md#createForStandalonePayment) | **POST** /api/webForms/standalonePayment | Create a standalone payment


## `createForPaymentWithAccountId()`

```php
createForPaymentWithAccountId($payment_with_account_details): \OpenAPIWebForm\Client\Model\WebForm
```

Create a payment with account ID

Initiates payment from a specific checking account using an account ID. A pre-requisite for using this service is, the payment account must already be imported and stored in Access and associated with an account ID. This is ideal for customers who's use case might involve monitoring and managing payment accounts and also recurring possible payment initiations from the same account.<br><br>In case the API request is syntactically correct, the service will respond with HTTP return code 201 and a unique URL. You must direct your user to our web form with the URL.<br>Must pass the user's access token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: UserAccessToken
$config = OpenAPIWebForm\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPIWebForm\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPIWebForm\Client\Api\PaymentInitiationServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_with_account_details = new \OpenAPIWebForm\Client\Model\PaymentWithAccountDetails(); // \OpenAPIWebForm\Client\Model\PaymentWithAccountDetails

try {
    $result = $apiInstance->createForPaymentWithAccountId($payment_with_account_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentInitiationServicesApi->createForPaymentWithAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_with_account_details** | [**\OpenAPIWebForm\Client\Model\PaymentWithAccountDetails**](../Model/PaymentWithAccountDetails.md)|  |

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

## `createForStandalonePayment()`

```php
createForStandalonePayment($standalone_payment_details): \OpenAPIWebForm\Client\Model\WebForm
```

Create a standalone payment

Initiates a payment from a specific checking account. If you don't need end users to connect their account and download their bank data to our database before requesting payment initiation, then this is the service to use. Ideal for use cases that need one-time payment initiation.<br><br>In case the API request is syntactically correct, the service will respond with HTTP return code 201 and a unique URL. You must direct your user to our web form with the URL.<br><br/><br/>Must pass the user's access token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: UserAccessToken
$config = OpenAPIWebForm\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPIWebForm\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPIWebForm\Client\Api\PaymentInitiationServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$standalone_payment_details = new \OpenAPIWebForm\Client\Model\StandalonePaymentDetails(); // \OpenAPIWebForm\Client\Model\StandalonePaymentDetails

try {
    $result = $apiInstance->createForStandalonePayment($standalone_payment_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentInitiationServicesApi->createForStandalonePayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **standalone_payment_details** | [**\OpenAPIWebForm\Client\Model\StandalonePaymentDetails**](../Model/StandalonePaymentDetails.md)|  |

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
