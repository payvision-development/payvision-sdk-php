<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Test\Test\Unit\Application\Webhook\Service;

use Payvision\SDK\Application\Reflection\JsonToObject;
use Payvision\SDK\Application\Webhook\Service\EventBuilder;
use Payvision\SDK\Domain\Payments\ValueObject\Payment\Response as PaymentResponse;
use Payvision\SDK\Domain\Webhook\Service\Validator;
use Payvision\SDK\Domain\Webhook\ValueObject\Event;
use Payvision\SDK\Exception\BuilderException;
use Payvision\SDK\Exception\WebhookException;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use ReflectionException;

class EventBuilderTest extends TestCase
{
    /**
     * @var Validator|MockObject $mockedValidator
     */
    protected $mockedValidator;

    /**
     * @var EventBuilder
     */
    protected $subject;

    /**
     * @return null
     */
    protected function setUp()
    {
        $this->mockedValidator = $this->getMockBuilder(Validator::class)->disableOriginalConstructor()->getMock();
        $this->mockedValidator->method('validateWebhook')->willReturn(true);

        $this->subject = new EventBuilder(
            new JsonToObject()
        );
    }

    /**
     * @throws BuilderException
     * @throws ReflectionException
     * @return null
     */
    public function testMissingTransactionShouldThrowException()
    {
        $this->expectException(WebhookException::class);
        $this->expectExceptionCode(WebhookException::UNKNOWN_PAYLOAD);
        $this->subject->generateEvent(
            '{
	"Id": "07be5002-ebd6-4ff6-a7bc-7d1665f656e0",
	"Type": "Transaction.Update",
	"CreateTime": "2019-01-15T13:35:07.9115707Z",
	"Message": "A payment was updated.",
	"Payload": {
		"result": 0,
		"description": "Ok",
		"header": {
			"requestTimestamp": "2019-01-15T13:34:37Z"
		},
		"body": {
			"bank": {
				"accountHolderName": "Hr E G H K\u00fcppers en\/of MW M.J. K\u00fcppers-Veeneman",
				"bic": {},
				"iban": {}
			}
		}
	}
}'
        );
    }

    // phpcs:disable ObjectCalisthenics.Files.FunctionLength.ObjectCalisthenics\Sniffs\Files\FunctionLengthSniff

    /**
     * @throws BuilderException
     * @throws ReflectionException
     * @return null
     */
    public function testBuildResponse()
    {
        /** @var Event $responseObject */
        $responseObject = $this->subject->generateEvent(
            '{
	"Id": "07be5002-ebd6-4ff6-a7bc-7d1665f656e0",
	"Type": "Transaction.Update",
	"CreateTime": "2019-01-15T13:35:07.9115707Z",
	"Message": "A payment was updated.",
	"Payload": {
		"result": 0,
		"description": "Ok",
		"header": {
			"requestTimestamp": "2019-01-15T13:34:37Z"
		},
		"body": {
			"bank": {
				"accountHolderName": "Hr E G H K\u00fcppers en\/of MW M.J. K\u00fcppers-Veeneman",
				"bic": {},
				"iban": {}
			},
			"transaction": {
				"descriptor": "Test Store",
				"amount": 1,
				"currencyCode": "EUR",
				"action": "payment",
				"id": "d837644c-9446-4ec6-9689-6915360b9d82",
				"trackingCode": "5c3de16c-90d100",
				"brandId": 3010
			}
		}
	}
}'
        );

        self::assertInstanceOf(Event::class, $responseObject);
        self::assertSame('07be5002-ebd6-4ff6-a7bc-7d1665f656e0', $responseObject->getId());
        self::assertSame('Transaction.Update', $responseObject->getType());
        self::assertSame('2019-01-15 13:35:07', $responseObject->getCreateTime()->format('Y-m-d H:i:s'));
        self::assertSame('A payment was updated.', $responseObject->getMessage());
        /** @var PaymentResponse $payload */
        $payload = $responseObject->getPayload();
        self::assertInstanceOf(PaymentResponse::class, $payload);
        self::assertSame(0, $payload->getResult());
        self::assertSame('Ok', $payload->getDescription());
        self::assertSame(
            'Hr E G H Küppers en/of MW M.J. Küppers-Veeneman',
            $payload->getBody()->getBank()->getAccountHolderName()
        );
        self::assertNull($payload->getBody()->getBank()->getBic());
        self::assertNull($payload->getBody()->getBank()->getIban());
    }
    // phpcs:enable ObjectCalisthenics.Files.FunctionLength.ObjectCalisthenics\Sniffs\Files\FunctionLengthSniff
}
