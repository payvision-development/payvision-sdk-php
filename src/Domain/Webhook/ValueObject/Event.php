<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Domain\Webhook\ValueObject;

use DateTime;
use Payvision\SDK\Domain\Payments\ValueObject\Cancel\Response as CancelResponse;
use Payvision\SDK\Domain\Payments\ValueObject\Capture\Response as CaptureResponse;
use Payvision\SDK\Domain\Payments\ValueObject\Payment\Response as PaymentResponse;
use Payvision\SDK\Domain\Payments\ValueObject\Refund\Response as RefundResponse;

class Event
{
    /**
     * @var DateTime
     */
    private $createTime;

    /**
     * @var string
     */
    private $id;

    /**
     * @var PaymentResponse|CancelResponse|CaptureResponse|RefundResponse
     */
    private $payload;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $message;

    /**
     * Event constructor.
     *
     * @param DateTime $createTime
     * @param string $id
     * @param PaymentResponse|CancelResponse|CaptureResponse|RefundResponse $payload
     * @param string $type
     * @param string|null $message
     */
    public function __construct(
        DateTime $createTime,
        string $id,
        $payload,
        string $type,
        string $message = null
    ) {
        $this->createTime = $createTime;
        $this->id = $id;
        $this->payload = $payload;
        $this->type = $type;
        $this->message = $message;
    }

    /**
     * @return DateTime
     */
    public function getCreateTime(): DateTime
    {
        return $this->createTime;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return CancelResponse|CaptureResponse|RefundResponse|PaymentResponse
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
}
