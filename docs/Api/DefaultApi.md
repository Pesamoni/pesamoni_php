# psm\DefaultApi

All URIs are relative to *https://pesamoni.com/api/live/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**transactionsPost**](DefaultApi.md#transactionsPost) | **POST** /transactions | 


# **transactionsPost**
> \psm\pesamoni\InlineResponse200 transactionsPost($method, $amount, $mobile, $holdername, $cardnumber, $cvv, $exp, $currency, $account, $reference, $genericmsg, $token, $bouquet, $payoption, $meternumber)



Below are parameters and their respective expected responses. In order to try out the service, simply click Try it out.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apipassword
$config = psm\Configuration::getDefaultConfiguration()->setApiKey('apipassword', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = psm\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apipassword', 'Bearer');
// Configure API key authorization: apiusername
$config = psm\Configuration::getDefaultConfiguration()->setApiKey('apiusername', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = psm\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiusername', 'Bearer');

$apiInstance = new psm\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$method = "method_example"; // string | Enter a request method. To check for request methods <a href=''>click here</a>
$amount = "amount_example"; // string | Enter the amount you would like to request for. <p style=\"color:red\">This method applies for request methods <b>acreceive, acreceivekeac, acsend, acsendkeac, acsendbank, pesab2c, sendairtime, cardaccept</b></p>
$mobile = "mobile_example"; // string | Enter the mobile number you would like to execute the above method in format 256.... or 254...<p style=\"color:red\">This method applies for request methods <b>acreceive, acreceivekeac, acsend, acsendkeac, senderid, sendsms, sendairtime</b></p>
$holdername = "holdername_example"; // string | Enter name of payer for Visa/MasterCard transactions<p style=\"color:red\">This method applies for request method <b>cardaccept</b></p>
$cardnumber = "cardnumber_example"; // string | Enter the Visa/MasterCard cardnumber<p style=\"color:red\">This method applies for request method <b>cardaccept</b></p>
$cvv = "cvv_example"; // string | Enter the Visa/MasterCard cvv<p style=\"color:red\">This method applies for request method <b>cardaccept</b></p>
$exp = "exp_example"; // string | Enter the Visa/MasterCard expiry date in the format MM/YYYY e.g 07/2030<p style=\"color:red\">This method applies for request method <b>cardaccept</b></p>
$currency = "currency_example"; // string | Enter the currency you intend to make the transaction for Visa/MasterCard based transactions<p style=\"color:red\">This method applies for request method <b>cardaccept</b></p>
$account = "account_example"; // string | Enter the Pesamoni account you would like to use for this transaction<p style=\"color:red\">This method applies for request method <b>paybills</b></p>
$reference = "reference_example"; // string | Enter your user generated transaction reference<p style=\"color:red\">This method applies for request methods <b>acreceive, acreceivekeac, acsend, acsendkeac, sendsms, transactionstatus, sendairtime, pesab2c, sendsms, cardaccept</b></p>
$genericmsg = "genericmsg_example"; // string | Enter your user generated generic message for the requested transaction<p style=\"color:red\">This method applies for request methods <b>acreceive, acreceivekeac, acsend, acsendkeac, sendsms, sendairtime, pesab2c, sendsms, cardaccept</b></p>
$token = "token_example"; // string | Enter your user generated token for the above mentioned method<p style=\"color:red\">This method applies for request methods <b>acreceive, acreceivekeac, acsend, acsendkeac, sendsms, sendairtime, pesab2c, sendsms, cardaccept</b></p>
$bouquet = "bouquet_example"; // string | Enter the bouquet or package you would like to pay for<p style=\"color:red\">This method applies for request methods <b>paybills</b></p>
$payoption = "payoption_example"; // string | Enter your prefered payment option<p style=\"color:red\">This method applies for request methods <b>paybills</b></p>
$meternumber = "meternumber_example"; // string | Enter the meter number for the intended payment<p style=\"color:red\">This method applies for request methods <b>paybills</b></p>

try {
    $result = $apiInstance->transactionsPost($method, $amount, $mobile, $holdername, $cardnumber, $cvv, $exp, $currency, $account, $reference, $genericmsg, $token, $bouquet, $payoption, $meternumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->transactionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **method** | **string**| Enter a request method. To check for request methods &lt;a href&#x3D;&#39;&#39;&gt;click here&lt;/a&gt; |
 **amount** | **string**| Enter the amount you would like to request for. &lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;acreceive, acreceivekeac, acsend, acsendkeac, acsendbank, pesab2c, sendairtime, cardaccept&lt;/b&gt;&lt;/p&gt; |
 **mobile** | **string**| Enter the mobile number you would like to execute the above method in format 256.... or 254...&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;acreceive, acreceivekeac, acsend, acsendkeac, senderid, sendsms, sendairtime&lt;/b&gt;&lt;/p&gt; | [optional]
 **holdername** | **string**| Enter name of payer for Visa/MasterCard transactions&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request method &lt;b&gt;cardaccept&lt;/b&gt;&lt;/p&gt; | [optional]
 **cardnumber** | **string**| Enter the Visa/MasterCard cardnumber&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request method &lt;b&gt;cardaccept&lt;/b&gt;&lt;/p&gt; | [optional]
 **cvv** | **string**| Enter the Visa/MasterCard cvv&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request method &lt;b&gt;cardaccept&lt;/b&gt;&lt;/p&gt; | [optional]
 **exp** | **string**| Enter the Visa/MasterCard expiry date in the format MM/YYYY e.g 07/2030&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request method &lt;b&gt;cardaccept&lt;/b&gt;&lt;/p&gt; | [optional]
 **currency** | **string**| Enter the currency you intend to make the transaction for Visa/MasterCard based transactions&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request method &lt;b&gt;cardaccept&lt;/b&gt;&lt;/p&gt; | [optional]
 **account** | **string**| Enter the Pesamoni account you would like to use for this transaction&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request method &lt;b&gt;paybills&lt;/b&gt;&lt;/p&gt; | [optional]
 **reference** | **string**| Enter your user generated transaction reference&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;acreceive, acreceivekeac, acsend, acsendkeac, sendsms, transactionstatus, sendairtime, pesab2c, sendsms, cardaccept&lt;/b&gt;&lt;/p&gt; | [optional]
 **genericmsg** | **string**| Enter your user generated generic message for the requested transaction&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;acreceive, acreceivekeac, acsend, acsendkeac, sendsms, sendairtime, pesab2c, sendsms, cardaccept&lt;/b&gt;&lt;/p&gt; | [optional]
 **token** | **string**| Enter your user generated token for the above mentioned method&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;acreceive, acreceivekeac, acsend, acsendkeac, sendsms, sendairtime, pesab2c, sendsms, cardaccept&lt;/b&gt;&lt;/p&gt; | [optional]
 **bouquet** | **string**| Enter the bouquet or package you would like to pay for&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;paybills&lt;/b&gt;&lt;/p&gt; | [optional]
 **payoption** | **string**| Enter your prefered payment option&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;paybills&lt;/b&gt;&lt;/p&gt; | [optional]
 **meternumber** | **string**| Enter the meter number for the intended payment&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;paybills&lt;/b&gt;&lt;/p&gt; | [optional]

### Return type

[**\psm\pesamoni\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apipassword](../../README.md#apipassword), [apiusername](../../README.md#apiusername)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

