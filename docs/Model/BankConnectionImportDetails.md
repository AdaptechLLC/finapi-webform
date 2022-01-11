# # BankConnectionImportDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bank** | [**\OpenAPIWebForm\Client\Model\ImportBankDetails**](ImportBankDetails.md) |  | [optional]
**bank_connection_name** | **string** | Custom name for the bank connection | [optional]
**skip_positions_download** | **bool** | Whether to skip the download of transactions and securities or not.&lt;br/&gt;This parameter refers to the same parameter of the \&quot;&lt;a target&#x3D;&#39;_blank&#39; href&#x3D;&#39;https://docs.finapi.io/?product&#x3D;access#post-/api/v1/bankConnections/import&#39;&gt;Import a new bank connection&lt;/a&gt;\&quot; service in the finAPI Access API.&lt;br/&gt;Default is &#39;false&#39;. | [optional] [default to false]
**load_owner_data** | **bool** | Whether to load information about the bank connection owner(s).&lt;br/&gt;This parameter refers to the same parameter of the \&quot;&lt;a target&#x3D;&#39;_blank&#39; href&#x3D;&#39;https://docs.finapi.io/?product&#x3D;access#post-/api/v1/bankConnections/import&#39;&gt;Import a new bank connection&lt;/a&gt;\&quot; service in the finAPI Access API.&lt;br/&gt;Default is &#39;false&#39;. | [optional] [default to false]
**max_days_for_download** | **int** | Defines the limit of how many days of the transaction history will be requested from the bank.&lt;br/&gt;This parameter refers to the same parameter of the \&quot;&lt;a target&#x3D;&#39;_blank&#39; href&#x3D;&#39;https://docs.finapi.io/?product&#x3D;access#post-/api/v1/bankConnections/import&#39;&gt;Import a new bank connection&lt;/a&gt;\&quot; service in the finAPI Access API. | [optional] [default to 0]
**account_types** | [**\OpenAPIWebForm\Client\Model\AccountType[]**](AccountType.md) | A set of account types that are considered for the import. If no values is given, then all accounts will be imported.&lt;br/&gt;This parameter refers to the same parameter of the \&quot;&lt;a target&#x3D;&#39;_blank&#39; href&#x3D;&#39;https://docs.finapi.io/?product&#x3D;access#post-/api/v1/bankConnections/import&#39;&gt;Import a new bank connection&lt;/a&gt;\&quot; service in the finAPI Access API. | [optional]
**callbacks** | [**\OpenAPIWebForm\Client\Model\Callbacks**](Callbacks.md) |  | [optional]
**profile_id** | **string** | The profile to be applied to the web form.&lt;br/&gt;This will overwrite the default profile, if such a profile exists. | [optional]
**redirect_url** | **string** | The URL where the end-user will be redirected to after completing the bank login and (possibly) the SCA on the bank&#39;s website. Must always be provided by mandators with &lt;code&gt;FULLY_LICENSED&lt;/code&gt; or &lt;code&gt;AISP&lt;/code&gt; license type, and may not be provided by mandators with other license types. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
