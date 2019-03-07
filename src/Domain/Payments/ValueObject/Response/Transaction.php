<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject\Response;

class Transaction
{
    /**
     * @var string
     */
    private $action;

    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $trackingCode;

    /**
     * @var float
     */
    private $amount;

    /**
     * @var int
     */
    private $brandId;

    /**
     * @var string
     */
    private $currencyCode;

    /**
     * @var string
     */
    private $descriptor;

    /**
     * @var string
     */
    private $parentId;

    /**
     * Transaction constructor.
     *
     * @param string $action
     * @param string $id
     * @param string $trackingCode
     * @param float $amount
     * @param int $brandId
     * @param string $currencyCode
     * @param string $descriptor
     * @param string $parentId
     */
    public function __construct(
        string $action,
        string $id,
        string $trackingCode,
        float $amount = null,
        int $brandId = null,
        string $currencyCode = null,
        string $descriptor = null,
        string $parentId = null
    ) {
        $this->action = $action;
        $this->id = $id;
        $this->trackingCode = $trackingCode;
        $this->amount = $amount;
        $this->brandId = $brandId;
        $this->currencyCode = $currencyCode;
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
    * @return float|null
    */
    public function getAmount()
    {
        return $this->amount;
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
    public function getCurrencyCode()
    {
        return $this->currencyCode;
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
