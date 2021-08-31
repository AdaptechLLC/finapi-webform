# # Amount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**value** | **float** | The amount of the payment. Must be a positive decimal number with at most two decimal places. |
**currency** | **string** | The ISO-4217 currency code of the amount.&lt;br&gt;See https://www.iso.org/iso-4217-currency-codes.html for more information.&lt;br&gt;At the moment, the only possible currency we accept here is:&lt;br&gt;&amp;bull; for standalone payments - &lt;code&gt;EUR&lt;/code&gt; only;&lt;br&gt;&amp;bull; for payments with account - the currency associated with the account (word of caution: we support only SEPA payments, hence for non-EUR accounts, payments will be submitted only on best effort basis). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
