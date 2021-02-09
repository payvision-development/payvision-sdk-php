<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
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
use ReflectionException;

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

    protected function setUp(): void
    {
        parent::setUp();

        $this->linkRequestBuilder = new LinkRequestBuilder();
        $this->cancelRequestBuilder = new CancelRequestBuilder();
    }

    // phpcs:disable ObjectCalisthenics.Files.FunctionLength.ObjectCalisthenics\Sniffs\Files\FunctionLengthSniff

    /**
     * @return LinkResponse
     * @throws BuilderException
     * @throws ErrorResponse
     * @throws ReflectionException
     * @throws ApiException
     */
    public function testMakePaymentLinkRequest(): LinkResponse
    {
        $this->linkRequestBuilder->header()->setBusinessId($this->credentials['businessId']);
        $this->linkRequestBuilder->body()->link()
            ->setReturnUrl('https://www.example.com')
            ->setBrandIds([1010, 1011, 1020, 1030, 1050, 3010])
            ->setThreeDSecure(false);
        $this->linkRequestBuilder->body()->transaction()
            ->setStoreId(1)
            ->setTrackingCode($this->generateTrackingCode())
            ->setAuthorizationMode('payment')
            ->setAmount(10.00)
            ->setCurrencyCode('EUR')
            ->setCountryCode('NL')
            ->setLanguageCode('nl')
            ->setSource('EC')
            ->setPurchaseId('pid' . $this->generateTrackingCode());
        $linkRequestObject = $this->linkRequestBuilder->build();

        $apiRequest = RequestBuilder::newLink($linkRequestObject);
        /** @var LinkResponse $apiResponse */
        $apiResponse = $this->apiConnection->execute($apiRequest);

        self::assertInstanceOf(LinkResponse::class, $apiResponse);
        self::assertSame(LinkResponse::SUCCESS, $apiResponse->getResult());
        self::assertSame(LinkResponseLink::READY, $apiResponse->getBody()->getLink()->getStatus());

        return $apiResponse;
    }

    // phpcs:enable ObjectCalisthenics.Files.FunctionLength.ObjectCalisthenics\Sniffs\Files\FunctionLengthSniff

    /**
     * @param LinkResponse $response
     * @throws ApiException
     * @throws BuilderException
     * @throws ErrorResponse
     * @throws ReflectionException
     * @depends testMakePaymentLinkRequest
     */
    public function testGetPaymentLinkStatus(LinkResponse $response): void
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
     * @throws ReflectionException
     * @depends testMakePaymentLinkRequest
     */
    public function testCancelPaymentLink(LinkResponse $response): void
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
