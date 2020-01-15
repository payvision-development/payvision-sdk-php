<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Checkouts\ValueObject\Payment;

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
    private $parentId;

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
     * @param string $parentId
     */
    public function __construct(
        string $action,
        float $amount,
        string $currencyCode,
        string $id,
        string $trackingCode,
        int $brandId = null,
        string $descriptor = null,
        string $parentId = null
    ) {
        $this->action = $action;
        $this->amount = $amount;
        $this->currencyCode = $currencyCode;
        $this->id = $id;
        $this->trackingCode = $trackingCode;
        $this->brandId = $brandId;
        $this->descriptor = $descriptor;
        $this->parentId = $parentId;
    }

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTrackingCode()
    {
        return $this->trackingCode;
    }

    /**
     * @return int|null
     */
    public function getBrandId()
    {
        return $this->brandId;
    }

    /**
     * @return string|null
     */
    public function getDescriptor()
    {
        return $this->descriptor;
    }

    /**
     * @return string|null
     */
    public function getParentId()
    {
        return $this->parentId;
    }
}
