<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Paymentlinks\ValueObject;

class ThreeDSecureExemption
{
    /**
     * @var bool
     */
    private $lowValue;

    /**
     * @var bool
     */
    private $secureCoorporate;

    /**
     * @var bool
     */
    private $transactionRiskAnalysis;

    /**
     * @var bool
     */
    private $trustedBeneficiary;

    /**
     * @var string
     */
    private $vmid;

    /**
     * ThreeDSecureExemption constructor.
     *
     * @param bool $lowValue
     * @param bool $secureCoorporate
     * @param bool $transactionRiskAnalysis
     * @param bool $trustedBeneficiary
     * @param string $vmid
     */
    public function __construct(
        bool $lowValue = null,
        bool $secureCoorporate = null,
        bool $transactionRiskAnalysis = null,
        bool $trustedBeneficiary = null,
        string $vmid = null
    ) {
        $this->lowValue = $lowValue;
        $this->secureCoorporate = $secureCoorporate;
        $this->transactionRiskAnalysis = $transactionRiskAnalysis;
        $this->trustedBeneficiary = $trustedBeneficiary;
        $this->vmid = $vmid;
    }

    /**
     * @return bool|null
     */
    public function getLowValue(): ?bool
    {
        return $this->lowValue;
    }

    /**
     * @return bool|null
     */
    public function getSecureCoorporate(): ?bool
    {
        return $this->secureCoorporate;
    }

    /**
     * @return bool|null
     */
    public function getTransactionRiskAnalysis(): ?bool
    {
        return $this->transactionRiskAnalysis;
    }

    /**
     * @return bool|null
     */
    public function getTrustedBeneficiary(): ?bool
    {
        return $this->trustedBeneficiary;
    }

    /**
     * @return string|null
     */
    public function getVmid(): ?string
    {
        return $this->vmid;
    }
}
