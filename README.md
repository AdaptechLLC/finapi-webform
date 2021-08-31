# OpenAPIClient-php

The following pages give you some general information on how to use our APIs.<br>The actual API services documentation then follows further below. You can use the menu to jump between API sections.<br><br>This page has a built-in HTTP(S) client, so you can test the services directly from within this page, by filling in the request parameters and/or body in the respective services, and then hitting the TRY button. Note that you need to be authorized to make a successful API call. To authorize, refer to the '<a target=\"_blank\" href=\"https://docs.finapi.io/?product=access#tag--Authorization\">Authorization</a>' section of Access, or in case you already have a valid user token, just use the QUICK AUTH on the left.<br>Please also remember that all user management functions should be looked up in <a target=\"_blank\" href=\"https://docs.finapi.io/?product=access\">Access</a>.<br><br>You should also check out the <a href=\"https://finapi.zendesk.com/hc/en-us\">Developer Portal</a> for more information. If you need any help with the API, contact <a href=\"mailto:support@finapi.io\">support@finapi.io</a>.


## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https:////.git"
    }
  ],
  "require": {
    "/": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://webform-sandbox.finapi.io*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountInformationServicesApi* | [**createForBankConnectionImport**](docs/Api/AccountInformationServicesApi.md#createforbankconnectionimport) | **POST** /api/webForms/bankConnectionImport | Import a bank connection
*AccountInformationServicesApi* | [**createForBankConnectionUpdate**](docs/Api/AccountInformationServicesApi.md#createforbankconnectionupdate) | **POST** /api/webForms/bankConnectionUpdate | Update a bank connection (BETA)
*PaymentInitiationServicesApi* | [**createForPaymentWithAccountId**](docs/Api/PaymentInitiationServicesApi.md#createforpaymentwithaccountid) | **POST** /api/webForms/paymentWithAccountId | Create a payment with account ID
*PaymentInitiationServicesApi* | [**createForStandalonePayment**](docs/Api/PaymentInitiationServicesApi.md#createforstandalonepayment) | **POST** /api/webForms/standalonePayment | Create a standalone payment
*ProfilesApi* | [**createProfile**](docs/Api/ProfilesApi.md#createprofile) | **POST** /api/profiles | Create a profile (BETA)
*ProfilesApi* | [**deleteProfile**](docs/Api/ProfilesApi.md#deleteprofile) | **DELETE** /api/profiles/{id} | Delete a profile
*ProfilesApi* | [**editProfile**](docs/Api/ProfilesApi.md#editprofile) | **PATCH** /api/profiles/{id} | Edit a profile (BETA)
*ProfilesApi* | [**getProfile**](docs/Api/ProfilesApi.md#getprofile) | **GET** /api/profiles/{id} | Get a profile (BETA)
*ProfilesApi* | [**getProfiles**](docs/Api/ProfilesApi.md#getprofiles) | **GET** /api/profiles | Get profiles (BETA)
*WebFormsApi* | [**deleteWebForm**](docs/Api/WebFormsApi.md#deletewebform) | **DELETE** /api/webForms/{id} | Delete a web form
*WebFormsApi* | [**getWebForm**](docs/Api/WebFormsApi.md#getwebform) | **GET** /api/webForms | Get web forms
*WebFormsApi* | [**getWebForms**](docs/Api/WebFormsApi.md#getwebforms) | **GET** /api/webForms/{id} | Get a web form

## Models

- [Amount](docs/Model/Amount.md)
- [Aspect](docs/Model/Aspect.md)
- [BankConnectionImportDetails](docs/Model/BankConnectionImportDetails.md)
- [BankConnectionUpdateDetails](docs/Model/BankConnectionUpdateDetails.md)
- [Brand](docs/Model/Brand.md)
- [Callbacks](docs/Model/Callbacks.md)
- [Color](docs/Model/Color.md)
- [CreateProfileDetails](docs/Model/CreateProfileDetails.md)
- [EditProfileDetails](docs/Model/EditProfileDetails.md)
- [Error](docs/Model/Error.md)
- [Functionality](docs/Model/Functionality.md)
- [ImportBankDetails](docs/Model/ImportBankDetails.md)
- [InvalidFieldError](docs/Model/InvalidFieldError.md)
- [Language](docs/Model/Language.md)
- [Paging](docs/Model/Paging.md)
- [Payload](docs/Model/Payload.md)
- [PaymentOrder](docs/Model/PaymentOrder.md)
- [PaymentRecipient](docs/Model/PaymentRecipient.md)
- [PaymentWithAccountDetails](docs/Model/PaymentWithAccountDetails.md)
- [PaymentWithAccountSender](docs/Model/PaymentWithAccountSender.md)
- [Profile](docs/Model/Profile.md)
- [ProfilesPage](docs/Model/ProfilesPage.md)
- [StandalonePaymentDetails](docs/Model/StandalonePaymentDetails.md)
- [StandalonePaymentSender](docs/Model/StandalonePaymentSender.md)
- [Text](docs/Model/Text.md)
- [TextColor](docs/Model/TextColor.md)
- [UpdateBankDetails](docs/Model/UpdateBankDetails.md)
- [ValidationError](docs/Model/ValidationError.md)
- [WebForm](docs/Model/WebForm.md)
- [WebFormCompletedCallback](docs/Model/WebFormCompletedCallback.md)
- [WebFormsPage](docs/Model/WebFormsPage.md)

## Authorization

### UserAccessToken

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.92.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
