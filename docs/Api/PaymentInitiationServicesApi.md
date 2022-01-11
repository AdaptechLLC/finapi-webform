# OpenAPIWebForm\Client\PaymentInitiationServicesApi

All URIs are relative to https://webform-live.finapi.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createForDirectDebitWithAccountId()**](PaymentInitiationServicesApi.md#createForDirectDebitWithAccountId) | **POST** /api/webForms/directDebitWithAccountId | Create a direct debit with account ID
[**createForPaymentWithAccountId()**](PaymentInitiationServicesApi.md#createForPaymentWithAccountId) | **POST** /api/webForms/paymentWithAccountId | Create a payment with account ID
[**createForStandalonePayment()**](PaymentInitiationServicesApi.md#createForStandalonePayment) | **POST** /api/webForms/standalonePayment | Create a standalone payment


## `createForDirectDebitWithAccountId()`

```php
createForDirectDebitWithAccountId($direct_debit_with_account_details): \OpenAPIWebForm\Client\Model\WebForm
```

Create a direct debit with account ID

Initiates a direct debit from a specific account using an account ID. A pre-requisite for using this service is, the payment account must already be imported and stored in Access and associated with an account ID.<br/><br/>In case the API request is syntactically correct, the service will respond with HTTP return code 201 and a unique URL. You must direct your user to our web form with the URL.<br/><br/>A collective direct debit contains more than one order in the 'orders' list. It is specially handled by the bank and can be booked by the bank either as a single booking for each order or as a single cumulative booking. The preferred booking type can be given with the 'singleBooking' flag, but it is not guaranteed each bank will regard this flag.<br/><br/>Must pass the user's access token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: BearerAccessToken
$config = OpenAPIWebForm\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPIWebForm\Client\Api\PaymentInitiationServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$direct_debit_with_account_details = new \OpenAPIWebForm\Client\Model\DirectDebitWithAccountDetails(); // \OpenAPIWebForm\Client\Model\DirectDebitWithAccountDetails

try {
    $result = $apiInstance->createForDirectDebitWithAccountId($direct_debit_with_account_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentInitiationServicesApi->createForDirectDebitWithAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **direct_debit_with_account_details** | [**\OpenAPIWebForm\Client\Model\DirectDebitWithAccountDetails**](../Model/DirectDebitWithAccountDetails.md)|  |

### Return type

[**\OpenAPIWebForm\Client\Model\WebForm**](../Model/WebForm.md)

### Authorization

[BearerAccessToken](../../README.md#BearerAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createForPaymentWithAccountId()`

```php
createForPaymentWithAccountId($payment_with_account_details): \OpenAPIWebForm\Client\Model\WebForm
```

Create a payment with account ID

Initiates payment from a specific checking account using an account ID. A pre-requisite for using this service is, the payment account must already be imported and stored in Access and associated with an account ID. This is ideal for customers who's use case might involve monitoring and managing payment accounts and also recurring possible payment initiations from the same account.<br/><br/>In case the API request is syntactically correct, the service will respond with HTTP return code 201 and a unique URL. You must direct your user to our web form with the URL.<br/><br/>Must pass the user's access token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: BearerAccessToken
$config = OpenAPIWebForm\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


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

[BearerAccessToken](../../README.md#BearerAccessToken)

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

Initiates a payment from a specific checking account. If you don't need end users to connect their account and download their bank data to our database before requesting payment initiation, then this is the service to use. Ideal for use cases that need one-time payment initiation.<br/><br/>In order to test the API, you can initiate a payment with our Demo banks. For more details, please see the associated <a href='https://documentation.finapi.io/access/finAPI-Test-Banks.2556264541.html' target='_blank'>documentation</a>.<br/><br/>In case the API request is syntactically correct, the service will respond with HTTP return code 201 and a unique URL. You must direct your user to our web form with the URL.<br/><br/>Must pass the user's access token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: BearerAccessToken
$config = OpenAPIWebForm\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


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

[BearerAccessToken](../../README.md#BearerAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
