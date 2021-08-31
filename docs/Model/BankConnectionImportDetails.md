# # BankConnectionImportDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bank** | [**\OpenAPIWebForm\Client\Model\ImportBankDetails**](ImportBankDetails.md) |  | [optional]
**bank_connection_name** | **string** | Custom name for the bank connection | [optional]
**skip_positions_download** | **bool** | Whether to skip the download of transactions and securities or not. This parameter refers to the same parameter of the \&quot;Import a new bank connection\&quot; service in the finAPI Access API. | [optional] [default to false]
**load_owner_data** | **bool** | Whether to load information about the bank connection owner(s). This parameter refers to the same parameter of the \&quot;Import a new bank connection\&quot; service in the finAPI Access API. | [optional] [default to false]
**max_days_for_download** | **int** | Defines the limit of how many days of the transaction history will be requested from the bank. This parameter refers to the same parameter of the \&quot;Import a new bank connection\&quot; service in the finAPI Access API. | [optional] [default to 0]
**account_types** | **string[]** | A set of account types that are considered for the import. If no values is given, then all accounts will be imported. This parameter refers to the same parameter of the \&quot;Import a new bank connection\&quot; service in the finAPI Access API. | [optional]
**callbacks** | [**\OpenAPIWebForm\Client\Model\Callbacks**](Callbacks.md) |  | [optional]
**profile_id** | **string** | The profile to be applied to the web form.&lt;br/&gt;This will overwrite the default profile, if such a profile exists. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
