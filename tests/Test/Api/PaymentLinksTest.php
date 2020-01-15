<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Test\Api;

use Payvision\SDK\Application\Paymentlinks\Service\RequestBuilder;
use Payvision\SDK\Domain\Paymentlinks\Service\Builder\Composite\Cancel\Request as CancelRequestBuilder;
use Payvision\SDK\Domain\Paymentlinks\Service\Builder\Composite\Link\Request as LinkRequestBuilder;
use Payvision\SDK\Domain\Paymentlinks\ValueObject\Cancel\Response as CancelResponse;
use Payvision\SDK\Domain\Paymentlinks\ValueObject\Link\Response as LinkResponse;
use Payvision\SDK\Domain\Paymentlinks\ValueObject\Link\ResponseLink as LinkResponseLink;
use Payvision\SDK\Domain\Paymentlinks\ValueObject\Status\Response as StatusResponse;
use Payvision\SDK\Exception\Api\ErrorResponse;
use Payvision\SDK\Exception\ApiException;
use Payvision\SDK\Exception\BuilderException;
use Payvision\SDK\Exception\DataTypeException;

class PaymentLinksTest extends AbstractTestCase
{
    /**
     * @var LinkRequestBuilder
     */
    private $linkRequestBuilder;

    /**
     * @var CancelRequestBuilder
     */
    private $cancelRequestBuilder;

    /**
     * @return null
     * @throws DataTypeException
     */
    protected function setUp()
    {
        parent::setUp();

        $this->linkRequestBuilder = new LinkRequestBuilder();
        $this->cancelRequestBuilder = new CancelRequestBuilder();
    }

    /**
     * @throws ApiException
     * @throws ErrorResponse
     * @throws BuilderException
     * @return LinkResponse
     */
    public function testMakePaymentLinkRequest(): LinkResponse
    {
        $this->linkRequestBuilder->header()->setBusinessId($this->credentials['businessId']);
        $this->linkRequestBuilder->body()->link()
            ->setReturnUrl('https://www.example.com')
            ->setBrandIds([1010, 1011, 1020, 1030, 1050, 3010]);
        $this->linkRequestBuilder->body()->transaction()
            ->setTrackingCode($this->generateTrackingCode())
            ->setAuthorizationMode('payment')
            ->setAmount(10.00)
            ->setCurrencyCode('EUR')
            ->setCountryCode('NL');
        $linkRequestObject = $this->linkRequestBuilder->build();

        $apiRequest = RequestBuilder::newLink($linkRequestObject);
        /** @var LinkResponse $apiResponse */
        $apiResponse = $this->apiConnection->execute($apiRequest);

        self::assertInstanceOf(LinkResponse::class, $apiResponse);
        self::assertSame(LinkResponse::SUCCESS, $apiResponse->getResult());
        self::assertSame(LinkResponseLink::READY, $apiResponse->getBody()->getLink()->getStatus());

        return $apiResponse;
    }

    /**
     * @param LinkResponse $response
     * @throws ApiException
     * @throws BuilderException
     * @throws ErrorResponse
     * @depends testMakePaymentLinkRequest
     * @return null
     */
    public function testGetPaymentLinkStatus(LinkResponse $response)
    {
        $apiRequest = RequestBuilder::getLinkStatus(
            $response->getBody()->getLink()->getLinkId(),
            $this->credentials['businessId']
        );
        /** @var StatusResponse $apiResponse */
        $apiResponse = $this->apiConnection->execute($apiRequest);

        self::assertInstanceOf(StatusResponse::class, $apiResponse);
        self::assertSame(StatusResponse::SUCCESS, $apiResponse->getResult());
        self::assertSame(LinkResponseLink::READY, $apiResponse->getBody()->getLink()->getStatus());
    }

    /**
     * @param LinkResponse $response
     * @throws ApiException
     * @throws BuilderException
     * @throws ErrorResponse
     * @depends testMakePaymentLinkRequest
     * @return null
     */
    public function testCancelPaymentLink(LinkResponse $response)
    {
        $this->cancelRequestBuilder->header()->setBusinessId($this->credentials['businessId']);
        $cancelRequest = $this->cancelRequestBuilder->build();

        $apiRequest = RequestBuilder::cancelLink($cancelRequest, $response->getBody()->getLink()->getLinkId());
        /** @var CancelResponse $apiResponse */
        $apiResponse = $this->apiConnection->execute($apiRequest);

        self::assertInstanceOf(CancelResponse::class, $apiResponse);
        self::assertSame(CancelResponse::SUCCESS, $apiResponse->getResult());
        self::assertSame(LinkResponseLink::CANCELLED, $apiResponse->getBody()->getLink()->getStatus());
    }
}
