<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Domain\Webhook\Service;

// phpcs:disable ObjectCalisthenics.Metrics.MethodPerClassLimit.ObjectCalisthenics\Sniffs\Metrics\MethodPerClassLimitSniff

use DateTime;
use Payvision\SDK\Domain\Payments\ValueObject\Cancel\Response as CancelResponse;
use Payvision\SDK\Domain\Payments\ValueObject\Capture\Response as CaptureResponse;
use Payvision\SDK\Domain\Payments\ValueObject\Payment\Response as PaymentResponse;
use Payvision\SDK\Domain\Payments\ValueObject\Refund\Response as RefundResponse;
use Payvision\SDK\Domain\Webhook\ValueObject\Event;
use Payvision\SDK\Exception\WebhookException;

class EventDecorator
{
    const TYPE_CANCEL = 'cancel';
    const TYPE_CAPTURE = 'capture';
    const TYPE_REFUND = 'refund';
    const TYPE_PAYMENT = 'request';

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
        if ($this->event->getPayload() instanceof CaptureResponse) {
            return self::TYPE_CAPTURE;
        }

        if ($this->event->getPayload() instanceof CancelResponse) {
            return self::TYPE_CANCEL;
        }

        if ($this->event->getPayload() instanceof RefundResponse) {
            return self::TYPE_REFUND;
        }

        if ($this->event->getPayload() instanceof PaymentResponse) {
            return self::TYPE_PAYMENT;
        }

        throw new WebhookException('unknown payload', WebhookException::UNKNOWN_PAYLOAD);
    }

    /**
     * @return CaptureResponse
     * @throws WebhookException
     */
    public function getCaptureResponse(): CaptureResponse
    {
        return $this->getResponse(self::TYPE_CAPTURE);
    }

    /**
     * @return CancelResponse
     * @throws WebhookException
     */
    public function getCancelResponse(): CancelResponse
    {
        return $this->getResponse(self::TYPE_CANCEL);
    }

    /**
     * @return RefundResponse
     * @throws WebhookException
     */
    public function getRefundResponse(): RefundResponse
    {
        return $this->getResponse(self::TYPE_REFUND);
    }

    /**
     * @return PaymentResponse
     * @throws WebhookException
     */
    public function getPaymentResponse(): PaymentResponse
    {
        return $this->getResponse(self::TYPE_PAYMENT);
    }

    /**
     * @param string $type
     * @return CancelResponse|CaptureResponse|RefundResponse|PaymentResponse
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
     * @return CancelResponse|CaptureResponse|RefundResponse|PaymentResponse
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
