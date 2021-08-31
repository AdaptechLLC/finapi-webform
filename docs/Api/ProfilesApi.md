# OpenAPIWebForm\Client\ProfilesApi

All URIs are relative to https://webform-sandbox.finapi.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProfile()**](ProfilesApi.md#createProfile) | **POST** /api/profiles | Create a profile (BETA)
[**deleteProfile()**](ProfilesApi.md#deleteProfile) | **DELETE** /api/profiles/{id} | Delete a profile
[**editProfile()**](ProfilesApi.md#editProfile) | **PATCH** /api/profiles/{id} | Edit a profile (BETA)
[**getProfile()**](ProfilesApi.md#getProfile) | **GET** /api/profiles/{id} | Get a profile (BETA)
[**getProfiles()**](ProfilesApi.md#getProfiles) | **GET** /api/profiles | Get profiles (BETA)


## `createProfile()`

```php
createProfile($create_profile_details): \OpenAPIWebForm\Client\Model\Profile
```

Create a profile (BETA)

The end point provides a list of parameters which customers can personalize to be in line with their brand's styling.<br/>The end point triggered with a list of values, will create a profile with a unique <code>profileId</code>. When the customer passes the <code>profileId</code> on an API call, the values from the profile are applied on the web form while rendering to end-users. We welcome customers to set up a default profile, so that they do not need to pass the <code>profileId</code> as a parameter for every API call.<br/><br/>In case the API request is syntactically correct, the service will respond with HTTP return code 201 and a profile object.<br/><br/>Must pass the <a href='https://finapi.zendesk.com/hc/en-us/articles/115003661827-Difference-between-app-clients-and-mandator-admin-client' target='_blank'>mandator admin client</a>'s access_token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: UserAccessToken
$config = OpenAPIWebForm\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPIWebForm\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPIWebForm\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_profile_details = new \OpenAPIWebForm\Client\Model\CreateProfileDetails(); // \OpenAPIWebForm\Client\Model\CreateProfileDetails

try {
    $result = $apiInstance->createProfile($create_profile_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->createProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_profile_details** | [**\OpenAPIWebForm\Client\Model\CreateProfileDetails**](../Model/CreateProfileDetails.md)|  |

### Return type

[**\OpenAPIWebForm\Client\Model\Profile**](../Model/Profile.md)

### Authorization

[UserAccessToken](../../README.md#UserAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProfile()`

```php
deleteProfile($id)
```

Delete a profile

Delete a single profile by its id.<br/>Must pass the <a href='https://finapi.zendesk.com/hc/en-us/articles/115003661827-Difference-between-app-clients-and-mandator-admin-client' target='_blank'>mandator admin client</a>'s access_token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: UserAccessToken
$config = OpenAPIWebForm\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPIWebForm\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPIWebForm\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier of the profile

try {
    $apiInstance->deleteProfile($id);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->deleteProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier of the profile |

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

## `editProfile()`

```php
editProfile($id, $edit_profile_details): \OpenAPIWebForm\Client\Model\Profile
```

Edit a profile (BETA)

Edit a single profile by its id.<br/>Must pass the <a href='https://finapi.zendesk.com/hc/en-us/articles/115003661827-Difference-between-app-clients-and-mandator-admin-client' target='_blank'>mandator admin client</a>'s access_token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: UserAccessToken
$config = OpenAPIWebForm\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPIWebForm\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPIWebForm\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier of the profile
$edit_profile_details = new \OpenAPIWebForm\Client\Model\EditProfileDetails(); // \OpenAPIWebForm\Client\Model\EditProfileDetails

try {
    $result = $apiInstance->editProfile($id, $edit_profile_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->editProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier of the profile |
 **edit_profile_details** | [**\OpenAPIWebForm\Client\Model\EditProfileDetails**](../Model/EditProfileDetails.md)|  |

### Return type

[**\OpenAPIWebForm\Client\Model\Profile**](../Model/Profile.md)

### Authorization

[UserAccessToken](../../README.md#UserAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfile()`

```php
getProfile($id): \OpenAPIWebForm\Client\Model\Profile
```

Get a profile (BETA)

Get a single profile by its id.<br/>Must pass the <a href='https://finapi.zendesk.com/hc/en-us/articles/115003661827-Difference-between-app-clients-and-mandator-admin-client' target='_blank'>mandator admin client</a>'s access_token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: UserAccessToken
$config = OpenAPIWebForm\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPIWebForm\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPIWebForm\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier of the profile

try {
    $result = $apiInstance->getProfile($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier of the profile |

### Return type

[**\OpenAPIWebForm\Client\Model\Profile**](../Model/Profile.md)

### Authorization

[UserAccessToken](../../README.md#UserAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfiles()`

```php
getProfiles($page, $per_page): \OpenAPIWebForm\Client\Model\ProfilesPage
```

Get profiles (BETA)

Get all profiles.<br/>Must pass the <a href='https://finapi.zendesk.com/hc/en-us/articles/115003661827-Difference-between-app-clients-and-mandator-admin-client' target='_blank'>mandator admin client</a>'s access_token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: UserAccessToken
$config = OpenAPIWebForm\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPIWebForm\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPIWebForm\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page to load
$per_page = 20; // int | The number of items on the page

try {
    $result = $apiInstance->getProfiles($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page to load | [optional] [default to 1]
 **per_page** | **int**| The number of items on the page | [optional] [default to 20]

### Return type

[**\OpenAPIWebForm\Client\Model\ProfilesPage**](../Model/ProfilesPage.md)

### Authorization

[UserAccessToken](../../README.md#UserAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
