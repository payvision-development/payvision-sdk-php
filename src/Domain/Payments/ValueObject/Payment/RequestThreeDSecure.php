<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject\Payment;

use Payvision\SDK\Domain\Payments\ValueObject\ThreeDSecureAdditionalInfo;
use Payvision\SDK\Domain\Payments\ValueObject\ThreeDSecureExemption;
use Payvision\SDK\Domain\Payments\ValueObject\ThreeDSecureRecurringInfo;

class RequestThreeDSecure
{
    /**
     * @var ThreeDSecureAdditionalInfo
     */
    private $additionalInfo;

    /**
     * @var string
     */
    private $avv;

    /**
     * @var bool
     */
    private $checkEnrollment;

    /**
     * @var string
     */
    private $dsTransactionId;

    /**
     * @var string
     */
    private $eci;

    /**
     * @var ThreeDSecureExemption
     */
    private $exemption;

    /**
     * @var ThreeDSecureRecurringInfo
     */
    private $recurringInfo;

    /**
     * @var string
     */
    private $version;

    /**
     * @var string
     */
    private $xid;

    /**
     * RequestThreeDSecure constructor.
     *
     * @param ThreeDSecureAdditionalInfo $additionalInfo
     * @param string $avv
     * @param bool $checkEnrollment
     * @param string $dsTransactionId
     * @param string $eci
     * @param ThreeDSecureExemption $exemption
     * @param ThreeDSecureRecurringInfo $recurringInfo
     * @param string $version
     * @param string $xid
     */
    public function __construct(
        ThreeDSecureAdditionalInfo $additionalInfo = null,
        string $avv = null,
        bool $checkEnrollment = null,
        string $dsTransactionId = null,
        string $eci = null,
        ThreeDSecureExemption $exemption = null,
        ThreeDSecureRecurringInfo $recurringInfo = null,
        string $version = null,
        string $xid = null
    ) {
        $this->additionalInfo = $additionalInfo;
        $this->avv = $avv;
        $this->checkEnrollment = $checkEnrollment;
        $this->dsTransactionId = $dsTransactionId;
        $this->eci = $eci;
        $this->exemption = $exemption;
        $this->recurringInfo = $recurringInfo;
        $this->version = $version;
        $this->xid = $xid;
    }

    /**
     * @return ThreeDSecureAdditionalInfo|null
     */
    public function getAdditionalInfo(): ?ThreeDSecureAdditionalInfo
    {
        return $this->additionalInfo;
    }

    /**
     * @return string|null
     */
    public function getAvv(): ?string
    {
        return $this->avv;
    }

    /**
     * @return bool|null
     */
    public function getCheckEnrollment(): ?bool
    {
        return $this->checkEnrollment;
    }

    /**
     * @return string|null
     */
    public function getDsTransactionId(): ?string
    {
        return $this->dsTransactionId;
    }

    /**
     * @return string|null
     */
    public function getEci(): ?string
    {
        return $this->eci;
    }

    /**
     * @return ThreeDSecureExemption|null
     */
    public function getExemption(): ?ThreeDSecureExemption
    {
        return $this->exemption;
    }

    /**
     * @return ThreeDSecureRecurringInfo|null
     */
    public function getRecurringInfo(): ?ThreeDSecureRecurringInfo
    {
        return $this->recurringInfo;
    }

    /**
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }

    /**
     * @return string|null
     */
    public function getXid(): ?string
    {
        return $this->xid;
    }
}
