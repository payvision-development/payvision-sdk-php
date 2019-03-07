<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Domain\Webhook\ValueObject;

use DateTime;
use Payvision\SDK\Domain\Payments\ValueObject\Cancel\ResponseRequest as CancelResponseRequest;
use Payvision\SDK\Domain\Payments\ValueObject\Capture\ResponseRequest as CaptureResponseRequest;
use Payvision\SDK\Domain\Payments\ValueObject\Refund\ResponseRequest as RefundResponseRequest;
use Payvision\SDK\Domain\Payments\ValueObject\Response\Request as ResponseRequest;

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
     * @var ResponseRequest|CancelResponseRequest|CaptureResponseRequest|RefundResponseRequest
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
     * @param ResponseRequest|CancelResponseRequest|CaptureResponseRequest|RefundResponseRequest $payload
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
     * @return CancelResponseRequest|CaptureResponseRequest|RefundResponseRequest|ResponseRequest
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
