# # BankConnectionUpdateDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bank** | [**\OpenAPIWebForm\Client\Model\UpdateBankDetails**](UpdateBankDetails.md) |  |
**import_new_accounts** | **bool** | Whether new accounts that have not yet been imported will be imported or not. Default is false.  By setting this parameter to true, we will try to get new accounts the user might have at the bank. The user will have a possibility to stop the process once he finds the accounts he is interested in have been imported. The set of newly imported accounts can be limited by using \&quot;accountTypes\&quot; parameter. | [optional] [default to false]
**account_types** | **string[]** | A set of account types that are considered for the adding. If no values is given, then all accounts will be imported. Only applied if \&quot;importNewAccounts\&quot; is set to \&quot;true\&quot; and ignored otherwise. This parameter refers to the same parameters of \&quot;Update a bank connection\&quot; and  \&quot;Connect a new interface\&quot; services in the finAPI Access API. | [optional]
**skip_positions_download** | **bool** | Whether to skip the download of transactions and securities or not. This parameter refers to the same parameter of the \&quot;Import a new bank connection\&quot; service in the finAPI Access API. | [optional] [default to false]
**load_owner_data** | **bool** | Whether to load information about the bank connection owner(s). This parameter refers to the same parameter of the \&quot;Import a new bank connection\&quot; service in the finAPI Access API. | [optional] [default to false]
**edit_saved_settings** | **string[]** | If the user has stored credentials in finAPI for the selected bank connection, then the finAPI web form will automatically use those to login to the bank. If a previous update failed because of invalid credentials or you want to allow the user to change his stored data, you can set this field. It will force the web form flow for the user and allow him to make changes to the data that he has stored in finAPI.&lt;br/&gt;Default value is &#39;null&#39;.&lt;br/&gt;&amp;bull; &lt;code&gt;CREDENTIALS&lt;/code&gt; - the end user can edit his stored credentials. | [optional]
**callbacks** | [**\OpenAPIWebForm\Client\Model\Callbacks**](Callbacks.md) |  | [optional]
**profile_id** | **string** | The profile to be applied to the web form.&lt;br/&gt;This will overwrite the default profile, if such a profile exists. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
