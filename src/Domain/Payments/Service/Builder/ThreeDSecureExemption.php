<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder;

use Payvision\SDK\Domain\Payments\ValueObject\ThreeDSecureExemption as ThreeDSecureExemptionObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class ThreeDSecureExemption extends Basic
{
    /**
     * @return ThreeDSecureExemptionObject
     */
    public function build(): ThreeDSecureExemptionObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param bool $lowValue
     * @return ThreeDSecureExemption
     */
    public function setLowValue(bool $lowValue): ThreeDSecureExemption
    {
        return $this->set('lowValue', $lowValue);
    }

    /**
     * @param bool $secureCoorporate
     * @return ThreeDSecureExemption
     */
    public function setSecureCoorporate(bool $secureCoorporate): ThreeDSecureExemption
    {
        return $this->set('secureCoorporate', $secureCoorporate);
    }

    /**
     * @param bool $transactionRiskAnalysis
     * @return ThreeDSecureExemption
     */
    public function setTransactionRiskAnalysis(bool $transactionRiskAnalysis): ThreeDSecureExemption
    {
        return $this->set('transactionRiskAnalysis', $transactionRiskAnalysis);
    }

    /**
     * @param bool $trustedBeneficiary
     * @return ThreeDSecureExemption
     */
    public function setTrustedBeneficiary(bool $trustedBeneficiary): ThreeDSecureExemption
    {
        return $this->set('trustedBeneficiary', $trustedBeneficiary);
    }

    /**
     * @param string $vmid
     * @return ThreeDSecureExemption
     */
    public function setVmid(string $vmid): ThreeDSecureExemption
    {
        return $this->set('vmid', $vmid);
    }

    /**
     * @return ThreeDSecureExemptionObject
     */
    protected function buildObject(): ThreeDSecureExemptionObject
    {
        return new ThreeDSecureExemptionObject(
            $this->get('lowValue'),
            $this->get('secureCoorporate'),
            $this->get('transactionRiskAnalysis'),
            $this->get('trustedBeneficiary'),
            $this->get('vmid')
        );
    }
}
