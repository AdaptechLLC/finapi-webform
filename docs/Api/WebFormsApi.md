# OpenAPIWebForm\Client\WebFormsApi

All URIs are relative to https://webform-sandbox.finapi.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteWebForm()**](WebFormsApi.md#deleteWebForm) | **DELETE** /api/webForms/{id} | Delete a web form
[**getWebForm()**](WebFormsApi.md#getWebForm) | **GET** /api/webForms | Get web forms
[**getWebForms()**](WebFormsApi.md#getWebForms) | **GET** /api/webForms/{id} | Get a web form


## `deleteWebForm()`

```php
deleteWebForm($id)
```

Delete a web form

Delete a web form of the user that is authorized by the access token.<br/><br/>Must pass the user's access token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: UserAccessToken
$config = OpenAPIWebForm\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPIWebForm\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPIWebForm\Client\Api\WebFormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier of the web form

try {
    $apiInstance->deleteWebForm($id);
} catch (Exception $e) {
    echo 'Exception when calling WebFormsApi->deleteWebForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier of the web form |

### Return type

void (empty response body)

### Authorization

[UserAccessToken](../../README.md#UserAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebForm()`

```php
getWebForm($page, $per_page): \OpenAPIWebForm\Client\Model\WebFormsPage
```

Get web forms

Get all web forms associated with the authorized user.<br/><br/>Must pass the user's access token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: UserAccessToken
$config = OpenAPIWebForm\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPIWebForm\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPIWebForm\Client\Api\WebFormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page to load
$per_page = 20; // int | The number of items on the page

try {
    $result = $apiInstance->getWebForm($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebFormsApi->getWebForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page to load | [optional] [default to 1]
 **per_page** | **int**| The number of items on the page | [optional] [default to 20]

### Return type

[**\OpenAPIWebForm\Client\Model\WebFormsPage**](../Model/WebFormsPage.md)

### Authorization

[UserAccessToken](../../README.md#UserAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebForms()`

```php
getWebForms($id): \OpenAPIWebForm\Client\Model\WebForm
```

Get a web form

Get a web form of the authorized user.<br/><br/>Must pass the user's access token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: UserAccessToken
$config = OpenAPIWebForm\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPIWebForm\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPIWebForm\Client\Api\WebFormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier of the web form

try {
    $result = $apiInstance->getWebForms($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebFormsApi->getWebForms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier of the web form |

### Return type

[**\OpenAPIWebForm\Client\Model\WebForm**](../Model/WebForm.md)

### Authorization

[UserAccessToken](../../README.md#UserAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
