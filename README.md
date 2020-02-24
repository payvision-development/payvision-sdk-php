# Payvision PHP SDK

> Codebase for Payvision PHP SDK

This is the official PHP SDK for the Payvision payment platform (<https://www.payvision.com>).
It can be used to make use of the following features of the Payvision API:

- Payments
    - Make payment requests
    - Make capture requests
    - Make cancel requests
    - Make refund requests
    - Get transaction status updates
- Paymentlink
    - Make new paymentlink
    - Get status of existing paymentlink
    - Cancel existing paymentlink
- Checkout
    - Initialize new checkout
    - Get checkout status
- Webhooks
    - Convert RAW webhook data to the proper objects

## Install

This package can be installed using Composer:

    composer require payvision/payvision-sdk-php

## Usage

### Initialize the API

To initialize the API Connection, refer to the following code snippet:

    use Payvision\SDK\Infrastructure\ApiConnection;

    $apiConnection = new ApiConnection(
        'username',
        'password',
        ApiConnection::URI_TEST,    // =URL to connect to, optional
        false                       // debug mode, see debugging
    );

#### Debugging the API

The API uses the [Guzzle HTTP Client](http://docs.guzzlephp.org/en/stable/). 
The debug-property is passed through to the Guzzle Client. See 
<http://docs.guzzlephp.org/en/stable/request-options.html#debug> for more 
information about debugging.

### Creating a payment request

The PHP SDK is a direct reflection of how the JSON structure of the requests
and responses are typically built for the Payvision API.

For example, a typical payment request to the Payvision API would require
a JSON body like this:

    {
      "header" : {
        "businessId" : "{businessId}"
      },
      "action" : "authorize",
      "body" : {
        "card" : {
          "holderName" : "John Doe",
          "number" : "4111111111111111",
          "expiryMonth" : "03",
          "expiryYear" : "2020"
        },
        "transaction" : {
          "amount" : "1.00",
          "brandId" : "1010",
          "trackingCode" : "7F4BFD5D-55E4-4775-81F7-0784188876C7",
          "currencyCode" : "EUR"
        }
      }
    }
    
To create this identical request using the PHP SDK, you can use one of
the composite builders:

    use Payvision\SDK\Domain\Payments\Service\Builder\Composite\Payment\Request as PaymentRequestBuilder;
    use Payvision\SDK\Domain\Payments\ValueObject\Payment\Request as PaymentRequest;

    /** @var $paymentRequestBuilder PaymentRequestBuilder */
    $paymentRequestBuilder->header()->setBusinessId('{businessId}');
    $paymentRequestBuilder->body()->card()
        ->setHolderName('John Doe')
        ->setNumber('4111111111111111')
        ->setExpiryMonth(3)
        ->setExpiryYear(2020)
    $paymentRequestBuilder->body()->transaction()
        ->setAmount(1.00)
        ->setBrandId(1010)
        ->setTrackingCode('7F4BFD5D-55E4-4775-81F7-0784188876C7')
        ->setCurrencyCode('EUR');
    $paymentRequestBuilder->setAction(PaymentRequest::ACTION_AUTHORIZE);
    $requestObject = $paymentRequestBuilder->build();
    
At this point, you have a PHP representation of the JSON object that is to
be sent to the API, but it is not yet the actual request. For example: we 
still need to know the URL where it needs to be sent to, and what kind of
response we can expect from the API. 

To do this we need to transform our payment request to an API request:
    
    use Payvision\SDK\Application\Payments\Service\RequestBuilder;    
    $apiRequest = RequestBuilder::newPayment($requestObject);
    
Now we have an API Request that we can execute using our API Connection:

    $requestHeaders = []; // Optional request headers
    $apiResponse = $apiConnection->execute($apiRequest, $requestHeaders);

### Handling the responses

The `$apiResponse` in the above example is an object of the type that is
defined in the request. To know what kind of type this is, you can use 
`$apiRequest->getResponseObjectByStatusCode(200)`.

If the API returns a non-2XX status, an exception is thrown of the type
`Payvision\SDK\Exception\Api\ErrorResponse`. This exception has the 
error object with more information about what went wrong:

    try {
        $apiResponse = $apiConnection->execute($apiRequest);
    } catch (ErrorResponse $errorResponseException) {
        /** \Payvision\SDK\Domain\Payments\ValueObject\Payment\Response $apiResponse */
        $errorResponse = $errorResponseException->getErrorResponse();
    }

## Webhooks

Webhooks can also be handled by the SDK. In order to do so you need the 
following input data:

 - The Event Signature (also known as a Json Web Token (JWT). This is sent in the header)
 - The secret that is used to sign the JWT
 - The body of the webhook (as string).

You can pass this data to the `EventBuilder` service of the webhook:

    use Payvision\SDK\Application\Reflection\JsonToObject;
    use Payvision\SDK\Application\Webhook\Service\EventBuilder;
    use Payvision\SDK\Domain\Webhook\Service\Validator;
    
    $eventBuilderService = new EventBuilder(
        new Validator(),
        new JsonToObject()
    );
    
    $event = $eventBuilderService->generateEvent(
        'event signature',
        'secret',
        'json body'
    );
    
Since the payload of the webhook event can be a variety of objects, the
`Event::getPayload()` cannot be type-hinted. So you might want to do some
extra checks on this:

    $payload = $event->getPayload();
    if ($payload instanceof \Payvision\SDK\Domain\Payments\ValueObject\Response\Request) {
        ...
    } 

If you don't want this (because it might miss auto-completion in your IDE because of this), you
can also use `EventBuilder::generateDecoratedEvent()` to get a `EventDecorator` 
that provides extra functionality so you don't have to guess what the 
payload is:

    $decoratedEvent = $eventBuilderService->generateDecoratedEvent(
        'event signature',
        'secret',
        'json body'
    );

    if ($decoratedEvent->getPayloadType() === \Payvision\SDK\Domain\Webhook\Service\EventDecorator::TYPE_PAYMENT) {
        $payload = $decoratedEvent->getPaymentResponse();
    }

The decorator also has some additional checks to make sure that the payload is known.

## Developer information

If you want to analyze or improve this SDK, it's good to read the following
information, targeted at developers:

### Architecture

The SDK is setup in a Domain Driven way. At the core are Value Objects,
which are the stateless, immutable building blocks that are used in the API. 
Value Objects can have other value objects as child-properties.

Top-level Value Objects (like a Payment Request) are converted to API 
request objects, which are send to the API, which in turn returns a 
response object. Logic goes from bottom to top, dependencies go from top 
to bottom:

    +-------------------+
    |   Value Object    |           Example: Transaction, Bank, Card, etc.
    |                   |           These can be built manually, or by using the (composite) builders
    +-------------------+
              ↓
       Request Builder              Builds request out of aggregate using reflection.
              ↓  
    +-------------------+
    |      Request      |           
    +-------------------+
              ↓
          API Client                Does the request to the external API
              ↓
       Response Builder             Generates a response object out of the API response data using reflection.
              ↓  
    +-------------------+
    |      Response     |           Example: PaymentResponse
    +-------------------+

### Troubleshooting

See Troubleshooting.md

### Contributing

If you have an issue or a feature request, feel free to create an issue.
If you want to contribute to this code, you can send a pull request.

## License

See LICENSE.txt
