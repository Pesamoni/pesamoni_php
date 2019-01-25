<?php
/**
 * DefaultApi
 * PHP version 5
 *
 * @category Class
 * @package  psm
 * @author   Pesamoni team
 * @link     https://github.com/Pesamoni/pesamoni_php
 */

/**
 * Pesaway Pesamoni API Documentation
 *
 * OpenAPI spec version: 1.0.3
 * 
 */


namespace psm\pesamoni_php;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use psm\ApiException;
use psm\Configuration;
use psm\HeaderSelector;
use psm\ObjectSerializer;

/**
 * DefaultApi Class Doc Comment
 *
 * @category Class
 * @package  psm
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DefaultApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation transactionsPost
     *
     * @param  string $method Enter a request method. To check for request methods &lt;a href&#x3D;&#39;&#39;&gt;click here&lt;/a&gt; (required)
     * @param  string $amount Enter the amount you would like to request for. &lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;acreceive, acreceivekeac, acsend, acsendkeac, acsendbank, pesab2c, sendairtime, cardaccept&lt;/b&gt;&lt;/p&gt; (required)
     * @param  string $mobile Enter the mobile number you would like to execute the above method in format 256.... or 254...&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;acreceive, acreceivekeac, acsend, acsendkeac, senderid, sendsms, sendairtime&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $holdername Enter name of payer for Visa/MasterCard transactions&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request method &lt;b&gt;cardaccept&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $cardnumber Enter the Visa/MasterCard cardnumber&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request method &lt;b&gt;cardaccept&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $cvv Enter the Visa/MasterCard cvv&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request method &lt;b&gt;cardaccept&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $exp Enter the Visa/MasterCard expiry date in the format MM/YYYY e.g 07/2030&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request method &lt;b&gt;cardaccept&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $currency Enter the currency you intend to make the transaction for Visa/MasterCard based transactions&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request method &lt;b&gt;cardaccept&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $account Enter the Pesamoni account you would like to use for this transaction&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request method &lt;b&gt;paybills&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $reference Enter your user generated transaction reference&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;acreceive, acreceivekeac, acsend, acsendkeac, sendsms, transactionstatus, sendairtime, pesab2c, sendsms, cardaccept&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $genericmsg Enter your user generated generic message for the requested transaction&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;acreceive, acreceivekeac, acsend, acsendkeac, sendsms, sendairtime, pesab2c, sendsms, cardaccept&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $token Enter your user generated token for the above mentioned method&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;acreceive, acreceivekeac, acsend, acsendkeac, sendsms, sendairtime, pesab2c, sendsms, cardaccept&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $bouquet Enter the bouquet or package you would like to pay for&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;paybills&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $payoption Enter your prefered payment option&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;paybills&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $meternumber Enter the meter number for the intended payment&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;paybills&lt;/b&gt;&lt;/p&gt; (optional)
     *
     * @throws \psm\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \psm\pesamoni\InlineResponse200
     */
    public function transactionsPost($method, $amount, $mobile = null, $holdername = null, $cardnumber = null, $cvv = null, $exp = null, $currency = null, $account = null, $reference = null, $genericmsg = null, $token = null, $bouquet = null, $payoption = null, $meternumber = null)
    {
        list($response) = $this->transactionsPostWithHttpInfo($method, $amount, $mobile, $holdername, $cardnumber, $cvv, $exp, $currency, $account, $reference, $genericmsg, $token, $bouquet, $payoption, $meternumber);
        return $response;
    }

    /**
     * Operation transactionsPostWithHttpInfo
     *
     * @param  string $method Enter a request method. To check for request methods &lt;a href&#x3D;&#39;&#39;&gt;click here&lt;/a&gt; (required)
     * @param  string $amount Enter the amount you would like to request for. &lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;acreceive, acreceivekeac, acsend, acsendkeac, acsendbank, pesab2c, sendairtime, cardaccept&lt;/b&gt;&lt;/p&gt; (required)
     * @param  string $mobile Enter the mobile number you would like to execute the above method in format 256.... or 254...&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;acreceive, acreceivekeac, acsend, acsendkeac, senderid, sendsms, sendairtime&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $holdername Enter name of payer for Visa/MasterCard transactions&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request method &lt;b&gt;cardaccept&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $cardnumber Enter the Visa/MasterCard cardnumber&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request method &lt;b&gt;cardaccept&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $cvv Enter the Visa/MasterCard cvv&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request method &lt;b&gt;cardaccept&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $exp Enter the Visa/MasterCard expiry date in the format MM/YYYY e.g 07/2030&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request method &lt;b&gt;cardaccept&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $currency Enter the currency you intend to make the transaction for Visa/MasterCard based transactions&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request method &lt;b&gt;cardaccept&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $account Enter the Pesamoni account you would like to use for this transaction&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request method &lt;b&gt;paybills&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $reference Enter your user generated transaction reference&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;acreceive, acreceivekeac, acsend, acsendkeac, sendsms, transactionstatus, sendairtime, pesab2c, sendsms, cardaccept&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $genericmsg Enter your user generated generic message for the requested transaction&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;acreceive, acreceivekeac, acsend, acsendkeac, sendsms, sendairtime, pesab2c, sendsms, cardaccept&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $token Enter your user generated token for the above mentioned method&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;acreceive, acreceivekeac, acsend, acsendkeac, sendsms, sendairtime, pesab2c, sendsms, cardaccept&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $bouquet Enter the bouquet or package you would like to pay for&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;paybills&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $payoption Enter your prefered payment option&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;paybills&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $meternumber Enter the meter number for the intended payment&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;paybills&lt;/b&gt;&lt;/p&gt; (optional)
     *
     * @throws \psm\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \psm\pesamoni\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     */
    public function transactionsPostWithHttpInfo($method, $amount, $mobile = null, $holdername = null, $cardnumber = null, $cvv = null, $exp = null, $currency = null, $account = null, $reference = null, $genericmsg = null, $token = null, $bouquet = null, $payoption = null, $meternumber = null)
    {
        $returnType = '\psm\pesamoni\InlineResponse200';
        $request = $this->transactionsPostRequest($method, $amount, $mobile, $holdername, $cardnumber, $cvv, $exp, $currency, $account, $reference, $genericmsg, $token, $bouquet, $payoption, $meternumber);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\psm\pesamoni\InlineResponse200',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation transactionsPostAsync
     *
     * 
     *
     * @param  string $method Enter a request method. To check for request methods &lt;a href&#x3D;&#39;&#39;&gt;click here&lt;/a&gt; (required)
     * @param  string $amount Enter the amount you would like to request for. &lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;acreceive, acreceivekeac, acsend, acsendkeac, acsendbank, pesab2c, sendairtime, cardaccept&lt;/b&gt;&lt;/p&gt; (required)
     * @param  string $mobile Enter the mobile number you would like to execute the above method in format 256.... or 254...&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;acreceive, acreceivekeac, acsend, acsendkeac, senderid, sendsms, sendairtime&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $holdername Enter name of payer for Visa/MasterCard transactions&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request method &lt;b&gt;cardaccept&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $cardnumber Enter the Visa/MasterCard cardnumber&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request method &lt;b&gt;cardaccept&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $cvv Enter the Visa/MasterCard cvv&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request method &lt;b&gt;cardaccept&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $exp Enter the Visa/MasterCard expiry date in the format MM/YYYY e.g 07/2030&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request method &lt;b&gt;cardaccept&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $currency Enter the currency you intend to make the transaction for Visa/MasterCard based transactions&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request method &lt;b&gt;cardaccept&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $account Enter the Pesamoni account you would like to use for this transaction&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request method &lt;b&gt;paybills&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $reference Enter your user generated transaction reference&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;acreceive, acreceivekeac, acsend, acsendkeac, sendsms, transactionstatus, sendairtime, pesab2c, sendsms, cardaccept&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $genericmsg Enter your user generated generic message for the requested transaction&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;acreceive, acreceivekeac, acsend, acsendkeac, sendsms, sendairtime, pesab2c, sendsms, cardaccept&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $token Enter your user generated token for the above mentioned method&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;acreceive, acreceivekeac, acsend, acsendkeac, sendsms, sendairtime, pesab2c, sendsms, cardaccept&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $bouquet Enter the bouquet or package you would like to pay for&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;paybills&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $payoption Enter your prefered payment option&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;paybills&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $meternumber Enter the meter number for the intended payment&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;paybills&lt;/b&gt;&lt;/p&gt; (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function transactionsPostAsync($method, $amount, $mobile = null, $holdername = null, $cardnumber = null, $cvv = null, $exp = null, $currency = null, $account = null, $reference = null, $genericmsg = null, $token = null, $bouquet = null, $payoption = null, $meternumber = null)
    {
        return $this->transactionsPostAsyncWithHttpInfo($method, $amount, $mobile, $holdername, $cardnumber, $cvv, $exp, $currency, $account, $reference, $genericmsg, $token, $bouquet, $payoption, $meternumber)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation transactionsPostAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $method Enter a request method. To check for request methods &lt;a href&#x3D;&#39;&#39;&gt;click here&lt;/a&gt; (required)
     * @param  string $amount Enter the amount you would like to request for. &lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;acreceive, acreceivekeac, acsend, acsendkeac, acsendbank, pesab2c, sendairtime, cardaccept&lt;/b&gt;&lt;/p&gt; (required)
     * @param  string $mobile Enter the mobile number you would like to execute the above method in format 256.... or 254...&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;acreceive, acreceivekeac, acsend, acsendkeac, senderid, sendsms, sendairtime&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $holdername Enter name of payer for Visa/MasterCard transactions&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request method &lt;b&gt;cardaccept&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $cardnumber Enter the Visa/MasterCard cardnumber&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request method &lt;b&gt;cardaccept&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $cvv Enter the Visa/MasterCard cvv&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request method &lt;b&gt;cardaccept&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $exp Enter the Visa/MasterCard expiry date in the format MM/YYYY e.g 07/2030&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request method &lt;b&gt;cardaccept&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $currency Enter the currency you intend to make the transaction for Visa/MasterCard based transactions&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request method &lt;b&gt;cardaccept&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $account Enter the Pesamoni account you would like to use for this transaction&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request method &lt;b&gt;paybills&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $reference Enter your user generated transaction reference&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;acreceive, acreceivekeac, acsend, acsendkeac, sendsms, transactionstatus, sendairtime, pesab2c, sendsms, cardaccept&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $genericmsg Enter your user generated generic message for the requested transaction&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;acreceive, acreceivekeac, acsend, acsendkeac, sendsms, sendairtime, pesab2c, sendsms, cardaccept&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $token Enter your user generated token for the above mentioned method&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;acreceive, acreceivekeac, acsend, acsendkeac, sendsms, sendairtime, pesab2c, sendsms, cardaccept&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $bouquet Enter the bouquet or package you would like to pay for&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;paybills&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $payoption Enter your prefered payment option&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;paybills&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $meternumber Enter the meter number for the intended payment&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;paybills&lt;/b&gt;&lt;/p&gt; (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function transactionsPostAsyncWithHttpInfo($method, $amount, $mobile = null, $holdername = null, $cardnumber = null, $cvv = null, $exp = null, $currency = null, $account = null, $reference = null, $genericmsg = null, $token = null, $bouquet = null, $payoption = null, $meternumber = null)
    {
        $returnType = '\psm\pesamoni\InlineResponse200';
        $request = $this->transactionsPostRequest($method, $amount, $mobile, $holdername, $cardnumber, $cvv, $exp, $currency, $account, $reference, $genericmsg, $token, $bouquet, $payoption, $meternumber);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'transactionsPost'
     *
     * @param  string $method Enter a request method. To check for request methods &lt;a href&#x3D;&#39;&#39;&gt;click here&lt;/a&gt; (required)
     * @param  string $amount Enter the amount you would like to request for. &lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;acreceive, acreceivekeac, acsend, acsendkeac, acsendbank, pesab2c, sendairtime, cardaccept&lt;/b&gt;&lt;/p&gt; (required)
     * @param  string $mobile Enter the mobile number you would like to execute the above method in format 256.... or 254...&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;acreceive, acreceivekeac, acsend, acsendkeac, senderid, sendsms, sendairtime&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $holdername Enter name of payer for Visa/MasterCard transactions&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request method &lt;b&gt;cardaccept&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $cardnumber Enter the Visa/MasterCard cardnumber&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request method &lt;b&gt;cardaccept&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $cvv Enter the Visa/MasterCard cvv&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request method &lt;b&gt;cardaccept&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $exp Enter the Visa/MasterCard expiry date in the format MM/YYYY e.g 07/2030&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request method &lt;b&gt;cardaccept&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $currency Enter the currency you intend to make the transaction for Visa/MasterCard based transactions&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request method &lt;b&gt;cardaccept&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $account Enter the Pesamoni account you would like to use for this transaction&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request method &lt;b&gt;paybills&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $reference Enter your user generated transaction reference&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;acreceive, acreceivekeac, acsend, acsendkeac, sendsms, transactionstatus, sendairtime, pesab2c, sendsms, cardaccept&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $genericmsg Enter your user generated generic message for the requested transaction&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;acreceive, acreceivekeac, acsend, acsendkeac, sendsms, sendairtime, pesab2c, sendsms, cardaccept&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $token Enter your user generated token for the above mentioned method&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;acreceive, acreceivekeac, acsend, acsendkeac, sendsms, sendairtime, pesab2c, sendsms, cardaccept&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $bouquet Enter the bouquet or package you would like to pay for&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;paybills&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $payoption Enter your prefered payment option&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;paybills&lt;/b&gt;&lt;/p&gt; (optional)
     * @param  string $meternumber Enter the meter number for the intended payment&lt;p style&#x3D;\&quot;color:red\&quot;&gt;This method applies for request methods &lt;b&gt;paybills&lt;/b&gt;&lt;/p&gt; (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function transactionsPostRequest($method, $amount, $mobile = null, $holdername = null, $cardnumber = null, $cvv = null, $exp = null, $currency = null, $account = null, $reference = null, $genericmsg = null, $token = null, $bouquet = null, $payoption = null, $meternumber = null)
    {
        // verify the required parameter 'method' is set
        if ($method === null || (is_array($method) && count($method) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $method when calling transactionsPost'
            );
        }
        if ($method < 1) {
            throw new \InvalidArgumentException('invalid value for "$method" when calling DefaultApi.transactionsPost, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'amount' is set
        if ($amount === null || (is_array($amount) && count($amount) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $amount when calling transactionsPost'
            );
        }
        if ($amount < 1) {
            throw new \InvalidArgumentException('invalid value for "$amount" when calling DefaultApi.transactionsPost, must be bigger than or equal to 1.');
        }

        if ($mobile !== null && $mobile < 1) {
            throw new \InvalidArgumentException('invalid value for "$mobile" when calling DefaultApi.transactionsPost, must be bigger than or equal to 1.');
        }

        if ($holdername !== null && $holdername < 1) {
            throw new \InvalidArgumentException('invalid value for "$holdername" when calling DefaultApi.transactionsPost, must be bigger than or equal to 1.');
        }

        if ($cardnumber !== null && $cardnumber < 1) {
            throw new \InvalidArgumentException('invalid value for "$cardnumber" when calling DefaultApi.transactionsPost, must be bigger than or equal to 1.');
        }

        if ($cvv !== null && $cvv < 1) {
            throw new \InvalidArgumentException('invalid value for "$cvv" when calling DefaultApi.transactionsPost, must be bigger than or equal to 1.');
        }

        if ($exp !== null && $exp < 1) {
            throw new \InvalidArgumentException('invalid value for "$exp" when calling DefaultApi.transactionsPost, must be bigger than or equal to 1.');
        }

        if ($currency !== null && $currency < 1) {
            throw new \InvalidArgumentException('invalid value for "$currency" when calling DefaultApi.transactionsPost, must be bigger than or equal to 1.');
        }

        if ($account !== null && $account < 1) {
            throw new \InvalidArgumentException('invalid value for "$account" when calling DefaultApi.transactionsPost, must be bigger than or equal to 1.');
        }

        if ($reference !== null && $reference < 1) {
            throw new \InvalidArgumentException('invalid value for "$reference" when calling DefaultApi.transactionsPost, must be bigger than or equal to 1.');
        }

        if ($genericmsg !== null && $genericmsg < 1) {
            throw new \InvalidArgumentException('invalid value for "$genericmsg" when calling DefaultApi.transactionsPost, must be bigger than or equal to 1.');
        }

        if ($token !== null && $token < 1) {
            throw new \InvalidArgumentException('invalid value for "$token" when calling DefaultApi.transactionsPost, must be bigger than or equal to 1.');
        }

        if ($bouquet !== null && $bouquet < 1) {
            throw new \InvalidArgumentException('invalid value for "$bouquet" when calling DefaultApi.transactionsPost, must be bigger than or equal to 1.');
        }

        if ($payoption !== null && $payoption < 1) {
            throw new \InvalidArgumentException('invalid value for "$payoption" when calling DefaultApi.transactionsPost, must be bigger than or equal to 1.');
        }

        if ($meternumber !== null && $meternumber < 1) {
            throw new \InvalidArgumentException('invalid value for "$meternumber" when calling DefaultApi.transactionsPost, must be bigger than or equal to 1.');
        }


        $resourcePath = '/transactions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($method !== null) {
            $queryParams['method'] = ObjectSerializer::toQueryValue($method);
        }
        // query params
        if ($amount !== null) {
            $queryParams['amount'] = ObjectSerializer::toQueryValue($amount);
        }
        // query params
        if ($mobile !== null) {
            $queryParams['mobile'] = ObjectSerializer::toQueryValue($mobile);
        }
        // query params
        if ($holdername !== null) {
            $queryParams['holdername'] = ObjectSerializer::toQueryValue($holdername);
        }
        // query params
        if ($cardnumber !== null) {
            $queryParams['cardnumber'] = ObjectSerializer::toQueryValue($cardnumber);
        }
        // query params
        if ($cvv !== null) {
            $queryParams['cvv'] = ObjectSerializer::toQueryValue($cvv);
        }
        // query params
        if ($exp !== null) {
            $queryParams['exp'] = ObjectSerializer::toQueryValue($exp);
        }
        // query params
        if ($currency !== null) {
            $queryParams['currency'] = ObjectSerializer::toQueryValue($currency);
        }
        // query params
        if ($account !== null) {
            $queryParams['account'] = ObjectSerializer::toQueryValue($account);
        }
        // query params
        if ($reference !== null) {
            $queryParams['reference'] = ObjectSerializer::toQueryValue($reference);
        }
        // query params
        if ($genericmsg !== null) {
            $queryParams['genericmsg'] = ObjectSerializer::toQueryValue($genericmsg);
        }
        // query params
        if ($token !== null) {
            $queryParams['token'] = ObjectSerializer::toQueryValue($token);
        }
        // query params
        if ($bouquet !== null) {
            $queryParams['bouquet'] = ObjectSerializer::toQueryValue($bouquet);
        }
        // query params
        if ($payoption !== null) {
            $queryParams['payoption'] = ObjectSerializer::toQueryValue($payoption);
        }
        // query params
        if ($meternumber !== null) {
            $queryParams['meternumber'] = ObjectSerializer::toQueryValue($meternumber);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('apipassword');
        if ($apiKey !== null) {
            $queryParams['apipassword'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('apiusername');
        if ($apiKey !== null) {
            $queryParams['apiusername'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
