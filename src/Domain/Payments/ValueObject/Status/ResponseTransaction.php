<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject\Status;

class ResponseTransaction
{
    /**
     * @var string
     */
    private $action;

    /**
     * @var float
     */
    private $amount;

    /**
     * @var string
     */
    private $currencyCode;

    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $trackingCode;

    /**
     * @var int
     */
    private $brandId;

    /**
     * @var string
     */
    private $descriptor;

    /**
     * @var string
     */
    private $parentid;

    /**
     * ResponseTransaction constructor.
     *
     * @param string $action
     * @param float $amount
     * @param string $currencyCode
     * @param string $id
     * @param string $trackingCode
     * @param int $brandId
     * @param string $descriptor
     * @param string $parentid
     */
    public function __construct(
        string $action,
        float $amount,
        string $currencyCode,
        string $id,
        string $trackingCode,
        int $brandId = null,
        string $descriptor = null,
        string $parentid = null
    ) {
        $this->action = $action;
        $this->amount = $amount;
        $this->currencyCode = $currencyCode;
        $this->id = $id;
        $this->trackingCode = $trackingCode;
        $this->brandId = $brandId;
        $this->descriptor = $descriptor;
        $this->parentid = $parentid;
    }

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @return string
     */
    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTrackingCode(): string
    {
        return $this->trackingCode;
    }

    /**
     * @return int|null
     */
    public function getBrandId(): ?int
    {
        return $this->brandId;
    }

    /**
     * @return string|null
     */
    public function getDescriptor(): ?string
    {
        return $this->descriptor;
    }

    /**
     * @return string|null
     */
    public function getParentid(): ?string
    {
        return $this->parentid;
    }
}
