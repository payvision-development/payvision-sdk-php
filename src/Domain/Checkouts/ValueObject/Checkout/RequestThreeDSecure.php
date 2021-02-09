<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Checkouts\ValueObject\Checkout;

use Payvision\SDK\Domain\Checkouts\ValueObject\ThreeDSecureAdditionalInfo;
use Payvision\SDK\Domain\Checkouts\ValueObject\ThreeDSecureExemption;
use Payvision\SDK\Domain\Checkouts\ValueObject\ThreeDSecureRecurringInfo;

class RequestThreeDSecure
{
    /**
     * @var ThreeDSecureAdditionalInfo
     */
    private $additionalInfo;

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
     * RequestThreeDSecure constructor.
     *
     * @param ThreeDSecureAdditionalInfo $additionalInfo
     * @param ThreeDSecureExemption $exemption
     * @param ThreeDSecureRecurringInfo $recurringInfo
     * @param string $version
     */
    public function __construct(
        ThreeDSecureAdditionalInfo $additionalInfo = null,
        ThreeDSecureExemption $exemption = null,
        ThreeDSecureRecurringInfo $recurringInfo = null,
        string $version = null
    ) {
        $this->additionalInfo = $additionalInfo;
        $this->exemption = $exemption;
        $this->recurringInfo = $recurringInfo;
        $this->version = $version;
    }

    /**
     * @return ThreeDSecureAdditionalInfo|null
     */
    public function getAdditionalInfo(): ?ThreeDSecureAdditionalInfo
    {
        return $this->additionalInfo;
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
}
