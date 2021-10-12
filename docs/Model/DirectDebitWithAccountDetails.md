# # DirectDebitWithAccountDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**execution_date** | [**\DateTime**](\DateTime.md) | Execution date for the direct debit(s), in the format \&quot;YYYY-MM-DD\&quot;. May not be in the past. |
**batch_booking_preferred** | **bool** | This field is only relevant when you pass multiple orders. It determines whether the orders should be processed by the bank as one collective booking (in case of &lt;code&gt;true&lt;/code&gt;), or as separate bookings (in case of &lt;code&gt;false&lt;/code&gt;). Note that it is subject to the bank whether it will regard the field. | [optional] [default to true]
**profile_id** | **string** | The profile to be applied to the web form.&lt;br/&gt;This will overwrite the default profile, if such a profile exists. | [optional]
**callbacks** | [**\OpenAPIWebForm\Client\Model\Callbacks**](Callbacks.md) |  | [optional]
**orders** | [**\OpenAPIWebForm\Client\Model\DirectDebitOrder[]**](DirectDebitOrder.md) | Direct debit orders |
**receiver** | [**\OpenAPIWebForm\Client\Model\DirectDebitWithAccountReceiver**](DirectDebitWithAccountReceiver.md) |  |
**direct_debit_type** | **string** | Type of the direct debit; either &lt;code&gt;BASIC&lt;/code&gt; or &lt;code&gt;B2B&lt;/code&gt; (Business-To-Business). |
**sequence_type** | **string** | Sequence type of the direct debit. Possible values:&lt;br/&gt;&amp;bull; &lt;code&gt;OOFF&lt;/code&gt; - means that this is a one-time direct debit order;&lt;br/&gt;&amp;bull; &lt;code&gt;FRST&lt;/code&gt; - means that this is the first in a row of multiple direct debit orders;&lt;br/&gt;&amp;bull; &lt;code&gt;RCUR&lt;/code&gt; - means that this is one (but not the first or final) within a row of multiple direct debit orders;&lt;br/&gt;&amp;bull; &lt;code&gt;FNAL&lt;/code&gt; - means that this is the final in a row of multiple direct debit orders. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
