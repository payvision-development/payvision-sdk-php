<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Test\Api;

use Payvision\SDK\Application\Checkouts\Service\RequestBuilder;
use Payvision\SDK\Domain\Checkouts\ValueObject\Checkout\Request as CheckoutRequestObject;
use Payvision\SDK\Domain\Checkouts\ValueObject\Checkout\RequestBody as CheckoutRequestBody;
use Payvision\SDK\Domain\Checkouts\ValueObject\Checkout\RequestCheckout as CheckoutRequestCheckout;
use Payvision\SDK\Domain\Checkouts\ValueObject\Checkout\RequestTransaction as CheckoutRequestTransaction;
use Payvision\SDK\Domain\Checkouts\ValueObject\Checkout\Response as CheckoutResponse;
use Payvision\SDK\Domain\Checkouts\ValueObject\Request\Header;
use Payvision\SDK\Domain\Checkouts\ValueObject\Status\Response as StatusResponse;
use Payvision\SDK\Exception\Api\ErrorResponse;
use Payvision\SDK\Exception\ApiException;
use Payvision\SDK\Exception\BuilderException;

class CheckoutTest extends AbstractTestCase
{
    /**
     * @throws ApiException
     * @throws ErrorResponse
     * @throws BuilderException
     */
    public function testCallToCheckoutEndpointReturnsCheckoutResponseObject(): array
    {
        $apiRequest = RequestBuilder::newCheckout($this->createRequestObject());

        /** @var CheckoutResponse $response */
        $response = $this->apiConnection->execute($apiRequest);

        $this->assertInstanceOf(CheckoutResponse::class, $response);
        $this->assertSame(CheckoutResponse::PENDING, $response->getResult());

        return [
            'checkoutId' => $response->getBody()->getCheckout()->getCheckoutId(),
        ];
    }

    /**
     * @param array $input
     * @throws ApiException
     * @throws BuilderException
     * @throws ErrorResponse
     * @depends testCallToCheckoutEndpointReturnsCheckoutResponseObject
     * @return null
     */
    public function testCheckoutStatusIsPending(array $input)
    {
        $apiRequest = RequestBuilder::getCheckoutStatus($input['checkoutId'], $this->credentials['businessId']);
        /** @var StatusResponse $response */
        $response = $this->apiConnection->execute($apiRequest);
        $this->assertInstanceOf(StatusResponse::class, $response);
        $this->assertSame(StatusResponse::PENDING, $response->getResult());
    }

    /**
     * @return CheckoutRequestObject
     */
    private function createRequestObject(): CheckoutRequestObject
    {
        $requestObject = new CheckoutRequestObject(
            new CheckoutRequestBody(
                new CheckoutRequestCheckout(
                    ['1010', '1020', '1030'],
                    'http://www.example.com'
                ),
                new CheckoutRequestTransaction(
                    60.00,
                    CheckoutRequestTransaction::AUTHORIZATION_MODE_PAYMENT,
                    'EUR',
                    $this->generateTrackingCode()
                )
            ),
            new Header($this->credentials['businessId'])
        );
        return $requestObject;
    }
}
