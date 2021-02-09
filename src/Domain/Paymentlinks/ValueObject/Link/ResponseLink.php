<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Paymentlinks\ValueObject\Link;

class ResponseLink
{
    public const READY = 'READY';
    public const PAID = 'PAID';
    public const CANCELLED = 'CANCELLED';
    public const DECLINED = 'DECLINED';
    public const DECLINEDBYCUSTOMER = 'DECLINEDBYCUSTOMER';
    public const EXPIRED = 'EXPIRED';
    public const PENDING = 'PENDING';

    /**
     * @var int[]
     */
    private $brandIds;

    /**
     * @var \Payvision\SDK\DataType\DateTime
     */
    private $expirationTime;

    /**
     * @var string
     */
    private $linkId;

    /**
     * @var ResponseRedirect
     */
    private $redirect;

    /**
     * @var string
     */
    private $status;

    /**
     * @var bool
     */
    private $threeDSecure;

    /**
     * @var string
     */
    private $tokenize;

    /**
     * ResponseLink constructor.
     *
     * @param int[] $brandIds
     * @param \Payvision\SDK\DataType\DateTime $expirationTime
     * @param string $linkId
     * @param ResponseRedirect $redirect
     * @param string $status
     * @param bool $threeDSecure
     * @param string $tokenize
     */
    public function __construct(
        array $brandIds,
        \Payvision\SDK\DataType\DateTime $expirationTime,
        string $linkId,
        ResponseRedirect $redirect,
        string $status,
        bool $threeDSecure = null,
        string $tokenize = null
    ) {
        $this->brandIds = $brandIds;
        $this->expirationTime = $expirationTime;
        $this->linkId = $linkId;
        $this->redirect = $redirect;
        $this->status = $status;
        $this->threeDSecure = $threeDSecure;
        $this->tokenize = $tokenize;
    }

    /**
     * @return int[]
     */
    public function getBrandIds(): array
    {
        return $this->brandIds;
    }

    /**
     * @return \Payvision\SDK\DataType\DateTime
     */
    public function getExpirationTime(): \Payvision\SDK\DataType\DateTime
    {
        return $this->expirationTime;
    }

    /**
     * @return string
     */
    public function getLinkId(): string
    {
        return $this->linkId;
    }

    /**
     * @return ResponseRedirect
     */
    public function getRedirect(): ResponseRedirect
    {
        return $this->redirect;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return bool|null
     */
    public function getThreeDSecure(): ?bool
    {
        return $this->threeDSecure;
    }

    /**
     * @return string|null
     */
    public function getTokenize(): ?string
    {
        return $this->tokenize;
    }
}
