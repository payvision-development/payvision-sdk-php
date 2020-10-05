<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Paymentlinks\ValueObject\Link;

class ResponseLink
{
    const READY = 'READY';
    const PAID = 'PAID';
    const CANCELLED = 'CANCELLED';
    const DECLINED = 'DECLINED';
    const DECLINEDBYCUSTOMER = 'DECLINEDBYCUSTOMER';
    const EXPIRED = 'EXPIRED';
    const PENDING = 'PENDING';

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
     * ResponseLink constructor.
     *
     * @param int[] $brandIds
     * @param \Payvision\SDK\DataType\DateTime $expirationTime
     * @param string $linkId
     * @param ResponseRedirect $redirect
     * @param string $status
     */
    public function __construct(
        array $brandIds,
        \Payvision\SDK\DataType\DateTime $expirationTime,
        string $linkId,
        ResponseRedirect $redirect,
        string $status
    ) {
        $this->brandIds = $brandIds;
        $this->expirationTime = $expirationTime;
        $this->linkId = $linkId;
        $this->redirect = $redirect;
        $this->status = $status;
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
}
