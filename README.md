# Pesamoni php client sdk

The Pesamoni Pesaway php Library provides integration access to Pesamoni services. You can view API features by clicking the link https://pesamoni.com/developers#features-intro.

## Requirements

PHP 5.5 and later

## Installation

### Using Composer

Download the Pesamoni github repository by [clicking here](https://github.com/Pesamoni/pesamoni_php) and once your done simply run `composer install` on the files root directory. You can also 
```php
require 'pesamoni_php'
```
or 
`composer require pesamoni/composer`
without further specifying where Composer should look for the package.

### Manual Installation

Download the files from the Pesamoni github repository by [clicking here](https://github.com/Pesamoni/pesamoni_php) and include `autoload.php`:

```php
    require_once('/path/to/pesamoni/vendor/autoload.php');
```

## Quick Start Example

The SDK needs to be instantiated using your API username and API password, which you can get from your [Pesamoni business account](https://pesamoni.com/business/dash).

You can register a new Pesamoni business account [Here](https://pesamoni.com/businesses/sign_up) or Sign in [Here](https://pesamoni.com/businesses/sign_in)

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
```

### Accepting funds from mobile subscriber
```php
//  you can either use method acreceive or acreceivekeac as explained below
//  method acreceive
// This method enables you receive funds from a mobile subscriber in your registered native currency on the Pesamoni platform. If for instance your account is registered in currency UGX and you request money from a Kenyan number e.g 254712346789, a Pesamoni exchange rate will automatically be applied and money deposited into your Pesamoni wallet in your default currency
//  method acreceivekeac
//  You can have two native currencies on your Pesamoni account on request. If you would like to deposit funds from a mobile subscriber to your Kenyan Pesamoni wallet account then this is the method you use.
//  example
$method = "acreceive"; // string | Enter a request method. To check for request methodsref=''>click here</a>
$amount = "amount_example"; // string | Enter the amount you would like to request for. <p style=\"color:red\">This method applies for request methods <b>acreceive, acreceivekeac, acsend, acsendkeac, acsendbank, pesab2c, sendairtime, cardaccept</b></p>
$mobile = "mobile_example"; // string | Enter the mobile number you would like to execute the above method in format 256.... or 254...<p style=\"color:red\">This method applies for request methods <b>acreceive, acreceivekeac, acsend, acsendkeac, senderid, sendsms, sendairtime</b></p>
$reference = "reference_example"; // string | Enter your user generated transaction reference<p style=\"color:red\">This method applies for request methods <b>acreceive, acreceivekeac, acsend, acsendkeac, sendsms, transactionstatus, sendairtime, pesab2c, sendsms, cardaccept</b></p>
$genericmsg = "genericmsg_example"; // string | Enter your user generated generic message for the requested transaction<p style=\"color:red\">This method applies for request methods <b>acreceive, acreceivekeac, acsend, acsendkeac, sendsms, sendairtime, pesab2c, sendsms, cardaccept</b></p>
$token = "token_example"; // string | Enter your user generated token for the above mentioned method<p style=\"color:red\">This method applies for request methods <b>acreceive, acreceivekeac, acsend, acsendkeac, sendsms, sendairtime, pesab2c, sendsms, cardaccept</b></p>

try {
    $result = $apiInstance->transactionsPost($method, $amount, $mobile, $holdername, $cardnumber, $cvv, $exp, $currency, $account, $reference, $genericmsg, $token, $bouquet, $payoption, $meternumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->transactionsPost: ', $e->getMessage(), PHP_EOL;
}

?>
```
### Sending funds to a mobile subscriber

```php
// you can either use method acreceive or acreceivekeac as explained below
// acsend
// This method enables you send funds to a mobile subscriber in your registered native currency on the Pesamoni platform. If for instance your account is registered in currency UGX and you send money to a kenyan number e.g 254712346789, a Pesamoni exchange rate will automatically be applied and the equivalent exchange amount deducted from your Pesamoni wallet in your default currency
// acsendkeac
// You can have two native currencies on your Pesamoni account on request. If you would like to send funds from your Pesamoni wallet to a mobile subscriber from your Kenyan Pesamoni wallet account then this is the method you use.
$method = "acsend"; // string | Enter a request method. To check for request methodsref=''>click here</a>
$amount = "amount_example"; // string | Enter the amount you would like to send funds to. <p style=\"color:red\">This method applies for request methods <b>acreceive, acreceivekeac, acsend, acsendkeac, acsendbank, pesab2c, sendairtime, cardaccept</b></p>
$mobile = "mobile_example"; // string | Enter the mobile number you would like to execute the above method in format 256.... or 254...<p style=\"color:red\">This method applies for request methods <b>acreceive, acreceivekeac, acsend, acsendkeac, senderid, sendsms, sendairtime</b></p>
$reference = "reference_example"; // string | Enter your user generated transaction reference<p style=\"color:red\">This method applies for request methods <b>acreceive, acreceivekeac, acsend, acsendkeac, sendsms, transactionstatus, sendairtime, pesab2c, sendsms, cardaccept</b></p>
$genericmsg = "genericmsg_example"; // string | Enter your user generated generic message for the requested transaction<p style=\"color:red\">This method applies for request methods <b>acreceive, acreceivekeac, acsend, acsendkeac, sendsms, sendairtime, pesab2c, sendsms, cardaccept</b></p>
$token = "token_example"; // string | Enter your user generated token for the above mentioned method<p style=\"color:red\">This method applies for request methods <b>acreceive, acreceivekeac, acsend, acsendkeac, sendsms, sendairtime, pesab2c, sendsms, cardaccept</b></p>
try {
    $result = $apiInstance->transactionsPost($method, $amount, $mobile, $holdername, $cardnumber, $cvv, $exp, $currency, $account, $reference, $genericmsg, $token, $bouquet, $payoption, $meternumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->transactionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```
### Accepting Card Payments e.g VISA/MASTERCARD

```php
$method = "cardaccept"; // string | Enter a request method. To check for request methods <a href=''>click here</a>
$holdername = "holdername_example"; // string | Enter name of payer for Visa/MasterCard transactions<p style=\"color:red\">This method applies for request method <b>cardaccept</b></p>
$cardnumber = "cardnumber_example"; // string | Enter the Visa/MasterCard cardnumber<p style=\"color:red\">This method applies for request method <b>cardaccept</b></p>
$cvv = "cvv_example"; // string | Enter the Visa/MasterCard cvv<p style=\"color:red\">This method applies for request method <b>cardaccept</b></p>
$exp = "exp_example"; // string | Enter the Visa/MasterCard expiry date in the format MM/YYYY e.g 07/2030<p style=\"color:red\">This method applies for request method <b>cardaccept</b></p>
$currency = "currency_example"; // string | Enter the currency you intend to make the transaction for Visa/MasterCard based transactions<p style=\"color:red\">This method applies for request method <b>cardaccept</b></p>
$reference = "reference_example"; // string | Enter your user generated transaction reference<p style=\"color:red\">This method applies for request methods <b>acreceive, acreceivekeac, acsend, acsendkeac, sendsms, transactionstatus, sendairtime, pesab2c, sendsms, cardaccept</b></p>
$genericmsg = "genericmsg_example"; // string | Enter your user generated generic message for the requested transaction<p style=\"color:red\">This method applies for request methods <b>acreceive, acreceivekeac, acsend, acsendkeac, sendsms, sendairtime, pesab2c, sendsms, cardaccept</b></p>
$token = "token_example"; // string | Enter your user generated token for the above mentioned method<p style=\"color:red\">This method applies for request methods <b>acreceive, acreceivekeac, acsend, acsendkeac, sendsms, sendairtime, pesab2c, sendsms, cardaccept</b></p>
try {
    $result = $apiInstance->transactionsPost($method, $amount, $mobile, $holdername, $cardnumber, $cvv, $exp, $currency, $account, $reference, $genericmsg, $token, $bouquet, $payoption, $meternumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->transactionsPost: ', $e->getMessage(), PHP_EOL;
}
?>

```
### Bank Transfers

```php
// you can either use method acsendbank or acsendbankeac as explained below
// acsendbank
// This method enables you send funds to a users bank account. A Pesamoni exchange rate will automatically be applied and the equivalent exchange amount deposited to your bank account dependent on your default currency.
// acsendbankeac
// You can have two native currencies on your Pesamoni account on request. If you would like to send funds from your Pesamoni wallet to a mobile subscriber from your Kenyan Pesamoni wallet account then this is the method you use.
$method = "acsendbank"; // string | Enter a request method. To check for request methods <a href=''>click here</a>
$amount = "amount_example"; // string | Enter the amount you would like to send to. <p style=\"color:red\">This method applies for request methods <b>acreceive, acreceivekeac, acsend, acsendkeac, acsendbank, pesab2c, sendairtime, cardaccept</b></p>
$account = "account_example"; // string | Enter the Pesamoni account you would like to use for this transaction<p style=\"color:red\">This method applies for request method <b>paybills</b></p>
$reference = "reference_example"; // string | Enter your user generated transaction reference<p style=\"color:red\">This method applies for request methods <b>acreceive, acreceivekeac, acsend, acsendkeac, sendsms, transactionstatus, sendairtime, pesab2c, sendsms, cardaccept</b></p>
$genericmsg = "genericmsg_example"; // string | Enter your user generated generic message for the requested transaction<p style=\"color:red\">This method applies for request methods <b>acreceive, acreceivekeac, acsend, acsendkeac, sendsms, sendairtime, pesab2c, sendsms, cardaccept</b></p>
$token = "token_example"; // string | Enter your user generated token for the above mentioned method<p style=\"color:red\">This method applies for request methods <b>acreceive, acreceivekeac, acsend, acsendkeac, sendsms, sendairtime, pesab2c, sendsms, cardaccept</b></p>
try {
    $result = $apiInstance->transactionsPost($method, $amount, $mobile, $holdername, $cardnumber, $cvv, $exp, $currency, $account, $reference, $genericmsg, $token, $bouquet, $payoption, $meternumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->transactionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Sending Airtime to a mobile subsriber

```php
$method = "sendairtime"; // string | Enter a request method. To check for request methods <a href=''>click here</a>
$amount = "amount_example"; // string | Enter the amount you would like to send funds to. <p style=\"color:red\">This method applies for request methods <b>acreceive, acreceivekeac, acsend, acsendkeac, acsendbank, pesab2c, sendairtime, cardaccept</b></p>
$mobile = "mobile_example"; // string | Enter the mobile number you would like to execute the above method in format 256.... or 254...<p style=\"color:red\">This method applies for request methods <b>acreceive, acreceivekeac, acsend, acsendkeac, senderid, sendsms, sendairtime</b></p>
$reference = "reference_example"; // string | Enter your user generated transaction reference<p style=\"color:red\">This method applies for request methods <b>acreceive, acreceivekeac, acsend, acsendkeac, sendsms, transactionstatus, sendairtime, pesab2c, sendsms, cardaccept</b></p>
$genericmsg = "genericmsg_example"; // string | Enter your user generated generic message for the requested transaction<p style=\"color:red\">This method applies for request methods <b>acreceive, acreceivekeac, acsend, acsendkeac, sendsms, sendairtime, pesab2c, sendsms, cardaccept</b></p>
$token = "token_example"; // string | Enter your user generated token for the above mentioned method<p style=\"color:red\">This method applies for request methods <b>acreceive, acreceivekeac, acsend, acsendkeac, sendsms, sendairtime, pesab2c, sendsms, cardaccept</b></p>
try {
    $result = $apiInstance->transactionsPost($method, $amount, $mobile, $holdername, $cardnumber, $cvv, $exp, $currency, $account, $reference, $genericmsg, $token, $bouquet, $payoption, $meternumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->transactionsPost: ', $e->getMessage(), PHP_EOL;
}
?>

```

### Sending to a Pesamoni users wallet

```php
$method = "pesab2c"; // string | Enter a request method. To check for request methods <a href=''>click here</a>
$amount = "amount_example"; // string | Enter the amount you would like to send funds to. <p style=\"color:red\">This method applies for request methods <b>acreceive, acreceivekeac, acsend, acsendkeac, acsendbank, pesab2c, sendairtime, cardaccept</b></p>
$account = "account_example"; // string | Enter the Pesamoni account you would like to use for this transaction<p style=\"color:red\">This method applies for request method <b>paybills</b></p>
$reference = "reference_example"; // string | Enter your user generated transaction reference<p style=\"color:red\">This method applies for request methods <b>acreceive, acreceivekeac, acsend, acsendkeac, sendsms, transactionstatus, sendairtime, pesab2c, sendsms, cardaccept</b></p>
$genericmsg = "genericmsg_example"; // string | Enter your user generated generic message for the requested transaction<p style=\"color:red\">This method applies for request methods <b>acreceive, acreceivekeac, acsend, acsendkeac, sendsms, sendairtime, pesab2c, sendsms, cardaccept</b></p>
$token = "token_example"; // string | Enter your user generated token for the above mentioned method<p style=\"color:red\">This method applies for request methods <b>acreceive, acreceivekeac, acsend, acsendkeac, sendsms, sendairtime, pesab2c, sendsms, cardaccept</b></p>
try {
    $result = $apiInstance->transactionsPost($method, $amount, $mobile, $holdername, $cardnumber, $cvv, $exp, $currency, $account, $reference, $genericmsg, $token, $bouquet, $payoption, $meternumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->transactionsPost: ', $e->getMessage(), PHP_EOL;
}
?>

```
### Paying Utility Bills


```php
$method = "paybills"; // string | Enter a request method. To check for request methods <a href=''>click here</a>
$amount = "amount_example"; // string | Enter the amount you would like to request for. <p style=\"color:red\">This method applies for request methods <b>acreceive, acreceivekeac, acsend, acsendkeac, acsendbank, pesab2c, sendairtime, cardaccept</b></p>
$mobile = "mobile_example"; // string | Enter the mobile number you would like to execute the above method in format 256.... or 254...<p style=\"color:red\">This method applies for request methods <b>acreceive, acreceivekeac, acsend, acsendkeac, senderid, sendsms, sendairtime</b></p>
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

### Checking transaction status

```php
$method = "transactionstatus"; // string | Enter a request method. To check for request methods <a href=''>click here</a>
$reference = "reference_example"; // string | Enter your user generated transaction reference<p style=\"color:red\">This method applies for request methods <b>acreceive, acreceivekeac, acsend, acsendkeac, sendsms, transactionstatus, sendairtime, pesab2c, sendsms, cardaccept</b></p>
try {
    $result = $apiInstance->transactionsPost($method, $amount, $mobile, $holdername, $cardnumber, $cvv, $exp, $currency, $account, $reference, $genericmsg, $token, $bouquet, $payoption, $meternumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->transactionsPost: ', $e->getMessage(), PHP_EOL;
}

?>
```

### Checking your Pesamoni Business Wallet Balance

```php
$method = "acbalance"; // string | Enter a request method. To check for request methods <a href=''>click here</a>
ry {
    $result = $apiInstance->transactionsPost($method, $amount, $mobile, $holdername, $cardnumber, $cvv, $exp, $currency, $account, $reference, $genericmsg, $token, $bouquet, $payoption, $meternumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->transactionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Sending SMS to a mobile subscriber

```php
$method = "sendsms"; // string | Enter a request method. To check for request methods <a href=''>click here</a>

$mobile = "mobile_example"; // string | Enter the mobile number you would like to execute the above method in format 256.... or 254...<p style=\"color:red\">This method applies for request methods <b>acreceive, acreceivekeac, acsend, acsendkeac, senderid, sendsms, sendairtime</b></p>
$message = "message_example"; // # String | Enter your message <p style=\"color:red\">This method applies for request methods <b>sendsms</b></p>
$reference = "reference_example"; // string | Enter your user generated transaction reference<p style=\"color:red\">This method applies for request methods <b>acreceive, acreceivekeac, acsend, acsendkeac, sendsms, transactionstatus, sendairtime, pesab2c, sendsms, cardaccept</b></p>
$genericmsg = "genericmsg_example"; // string | Enter your user generated generic message for the requested transaction<p style=\"color:red\">This method applies for request methods <b>acreceive, acreceivekeac, acsend, acsendkeac, sendsms, sendairtime, pesab2c, sendsms, cardaccept</b></p>
$token = "token_example"; // string | Enter your user generated token for the above mentioned method<p style=\"color:red\">This method applies for request methods <b>acreceive, acreceivekeac, acsend, acsendkeac, sendsms, sendairtime, pesab2c, sendsms, cardaccept</b></p>
try {
    $result = $apiInstance->transactionsPost($method, $amount, $mobile, $holdername, $cardnumber, $cvv, $exp, $currency, $account, $reference, $genericmsg, $token, $bouquet, $payoption, $meternumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->transactionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to *https://pesamoni.com/api/live/v1*

## Contributing

Bug reports and pull requests are welcome on GitHub at https://github.com/Pesamoni.

## License

The Pesamoni php Api library is available as open source under the terms of the [Apache License 2.0](https://www.apache.org/licenses/LICENSE-2.0).


