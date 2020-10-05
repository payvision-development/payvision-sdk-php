<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject\Payment;

class RequestCard
{
    /**
     * @var string
     */
    private $cvv;

    /**
     * @var int
     */
    private $expiryMonth;

    /**
     * @var int
     */
    private $expiryYear;

    /**
     * @var string
     */
    private $holderName;

    /**
     * @var string
     */
    private $issueNumber;

    /**
     * @var string
     */
    private $number;

    /**
     * RequestCard constructor.
     *
     * @param string $cvv
     * @param int $expiryMonth
     * @param int $expiryYear
     * @param string $holderName
     * @param string $issueNumber
     * @param string $number
     */
    public function __construct(
        string $cvv = null,
        int $expiryMonth = null,
        int $expiryYear = null,
        string $holderName = null,
        string $issueNumber = null,
        string $number = null
    ) {
        $this->cvv = $cvv;
        $this->expiryMonth = $expiryMonth;
        $this->expiryYear = $expiryYear;
        $this->holderName = $holderName;
        $this->issueNumber = $issueNumber;
        $this->number = $number;
    }

    /**
     * @return string|null
     */
    public function getCvv()
    {
        return $this->cvv;
    }

    /**
     * @return int|null
     */
    public function getExpiryMonth()
    {
        return $this->expiryMonth;
    }

    /**
     * @return int|null
     */
    public function getExpiryYear()
    {
        return $this->expiryYear;
    }

    /**
     * @return string|null
     */
    public function getHolderName()
    {
        return $this->holderName;
    }

    /**
     * @return string|null
     */
    public function getIssueNumber()
    {
        return $this->issueNumber;
    }

    /**
     * @return string|null
     */
    public function getNumber()
    {
        return $this->number;
    }
}
