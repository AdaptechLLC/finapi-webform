# # WebForm

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Globally unique web form&#39;s identifier |
**url** | **string** | Full web form&#39;s URL (including the hostname).&lt;br&gt;You can enhance the given URL with the following query parameters: &lt;code&gt;redirectUrl&lt;/code&gt;, &lt;code&gt;errorRedirectUrl&lt;/code&gt;, &lt;code&gt;customerSupportUrl&lt;/code&gt;.&lt;br&gt;Find more info in the &lt;a href&#x3D;&#39;https://finapi.jira.com/l/c/Hek3Qv9o&#39; target&#x3D;&#39;_blank&#39;&gt;Web Form 2.0 Public Documentation.&lt;/a&gt; |
**created_at** | [**\DateTime**](\DateTime.md) | The timestamp when the web form was created |
**expires_at** | [**\DateTime**](\DateTime.md) | The timestamp when the web form expires |
**type** | **string** | Type of the web form:&lt;br/&gt;&amp;bull; &lt;code&gt;BANK_CONNECTION_IMPORT&lt;/code&gt; - web form was created for importing a bank connection (service \&quot;Import a bank connection\&quot;);&lt;br&gt;&amp;bull; &lt;code&gt;BANK_CONNECTION_UPDATE&lt;/code&gt; - web form was created for updating a bank connection (service \&quot;Update a bank connection\&quot;);&lt;br&gt;&amp;bull; &lt;code&gt;PAYMENT_WITH_ACCOUNT_ID&lt;/code&gt; - web form was created for a payment from an account that already exists in Access (service \&quot;Create a payment with account ID\&quot;);&lt;br&gt;&amp;bull; &lt;code&gt;STANDALONE_PAYMENT&lt;/code&gt; - web form was created for a standalone payment (service \&quot;Create a standalone payment\&quot;). |
**status** | **string** | Status of the web form:&lt;br/&gt;&amp;bull; &lt;code&gt;NOT_YET_OPENED&lt;/code&gt; - the web form was not yet opened by the end user;&lt;br/&gt;&amp;bull; &lt;code&gt;IN_PROGRESS&lt;/code&gt; - the web form has already been opened by the end user and is currently in progress;&lt;br/&gt;&amp;bull; &lt;code&gt;COMPLETED&lt;/code&gt; - the web form has been successfully completed (final status);&lt;br/&gt;&amp;bull; &lt;code&gt;COMPLETED_WITH_ERROR&lt;/code&gt; - the web form has been completed with an error (final status);&lt;br/&gt;&amp;bull; &lt;code&gt;EXPIRED&lt;/code&gt; - the web form has expired (final status);&lt;br/&gt;&amp;bull; &lt;code&gt;ABORTED&lt;/code&gt; - the web form has been cancelled by the end user (final status). |
**payload** | [**\OpenAPIWebForm\Client\Model\Payload**](Payload.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)