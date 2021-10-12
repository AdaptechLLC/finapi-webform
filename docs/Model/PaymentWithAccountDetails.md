# # PaymentWithAccountDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**execution_date** | [**\DateTime**](\DateTime.md) | Execution date for the money transfer(s), in the format \&quot;YYYY-MM-DD\&quot;. May not be in the past. If not specified, then the current date will be used. | [optional]
**batch_booking_preferred** | **bool** | This field is only relevant when you pass multiple orders. It determines whether the orders should be processed by the bank as one collective booking (in case of &lt;code&gt;true&lt;/code&gt;), or as separate bookings (in case of &lt;code&gt;false&lt;/code&gt;). Note that it is subject to the bank whether it will regard the field. | [optional] [default to true]
**profile_id** | **string** | The profile to be applied to the web form.&lt;br/&gt;This will overwrite the default profile, if such a profile exists. | [optional]
**callbacks** | [**\OpenAPIWebForm\Client\Model\Callbacks**](Callbacks.md) |  | [optional]
**sender** | [**\OpenAPIWebForm\Client\Model\PaymentWithAccountSender**](PaymentWithAccountSender.md) |  |
**orders** | [**\OpenAPIWebForm\Client\Model\PaymentOrder[]**](PaymentOrder.md) | Payment orders |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
