<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENSE.txt
 */

namespace Payvision\SDK\Domain\Webhook\Service;

// phpcs:disable ObjectCalisthenics.Metrics.MethodPerClassLimit.ObjectCalisthenics\Sniffs\Metrics\MethodPerClassLimitSniff

use DateTime;
use Payvision\SDK\Domain\Payments\ValueObject\Cancel\ResponseRequest as CancelResponseRequest;
use Payvision\SDK\Domain\Payments\ValueObject\Capture\ResponseRequest as CaptureResponseRequest;
use Payvision\SDK\Domain\Payments\ValueObject\Refund\ResponseRequest as RefundResponseRequest;
use Payvision\SDK\Domain\Payments\ValueObject\Response\Request as ResponseRequest;
use Payvision\SDK\Domain\Webhook\ValueObject\Event;
use Payvision\SDK\Exception\WebhookException;

class EventDecorator
{
    const TYPE_CANCEL = 'cancel';
    const TYPE_CAPTURE = 'capture';
    const TYPE_REFUND = 'refund';
    const TYPE_REQUEST = 'request';

    /**
     * @var Event
     */
    private $event;

    public function __construct(Event $event)
    {
        $this->event = $event;
    }

    /**
     * @return string
     * @throws WebhookException
     */
    public function getPayloadType(): string
    {
        if ($this->event->getPayload() instanceof CaptureResponseRequest) {
            return self::TYPE_CAPTURE;
        }

        if ($this->event->getPayload() instanceof CancelResponseRequest) {
            return self::TYPE_CANCEL;
        }

        if ($this->event->getPayload() instanceof RefundResponseRequest) {
            return self::TYPE_REFUND;
        }

        if ($this->event->getPayload() instanceof ResponseRequest) {
            return self::TYPE_REQUEST;
        }

        throw new WebhookException('unknown payload', WebhookException::UNKNOWN_PAYLOAD);
    }

    /**
     * @return CaptureResponseRequest
     * @throws WebhookException
     */
    public function getCaptureResponse(): CaptureResponseRequest
    {
        return $this->getResponse(self::TYPE_CAPTURE);
    }

    /**
     * @return CancelResponseRequest
     * @throws WebhookException
     */
    public function getCancelResponse(): CancelResponseRequest
    {
        return $this->getResponse(self::TYPE_CANCEL);
    }

    /**
     * @return RefundResponseRequest
     * @throws WebhookException
     */
    public function getRefundResponse(): RefundResponseRequest
    {
        return $this->getResponse(self::TYPE_REFUND);
    }

    /**
     * @return ResponseRequest
     * @throws WebhookException
     */
    public function getRequestResponse(): ResponseRequest
    {
        return $this->getResponse(self::TYPE_REQUEST);
    }

    /**
     * @param string $type
     * @return CancelResponseRequest|CaptureResponseRequest|RefundResponseRequest|ResponseRequest
     * @throws WebhookException
     */
    private function getResponse(string $type)
    {
        if ($this->getPayloadType() === $type) {
            return $this->event->getPayload();
        }

        throw new WebhookException('payload is not the expected type', WebhookException::UNEXPECTED_PAYLOAD);
    }

    // Methods inherited by decorating:

    /**
     * @return DateTime
     */
    public function getCreateTime(): DateTime
    {
        return $this->event->getCreateTime();
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->event->getId();
    }

    /**
     * @return CancelResponseRequest|CaptureResponseRequest|RefundResponseRequest|ResponseRequest
     */
    public function getPayload()
    {
        return $this->event->getPayload();
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->event->getType();
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->event->getMessage();
    }
}
