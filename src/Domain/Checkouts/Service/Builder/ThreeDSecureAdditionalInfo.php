<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Checkouts\Service\Builder;

use Payvision\SDK\Domain\Checkouts\ValueObject\ThreeDSecureAdditionalInfo as ThreeDSecureAdditionalInfoObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class ThreeDSecureAdditionalInfo extends Basic
{
    /**
     * @return ThreeDSecureAdditionalInfoObject
     */
    public function build(): ThreeDSecureAdditionalInfoObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param string $challengeIndicator
     * @return ThreeDSecureAdditionalInfo
     */
    public function setChallengeIndicator(string $challengeIndicator): ThreeDSecureAdditionalInfo
    {
        return $this->set('challengeIndicator', $challengeIndicator);
    }

    /**
     * @param string $challengeWindowSize
     * @return ThreeDSecureAdditionalInfo
     */
    public function setChallengeWindowSize(string $challengeWindowSize): ThreeDSecureAdditionalInfo
    {
        return $this->set('challengeWindowSize', $challengeWindowSize);
    }

    /**
     * @param string $decoupledIndicator
     * @return ThreeDSecureAdditionalInfo
     */
    public function setDecoupledIndicator(string $decoupledIndicator): ThreeDSecureAdditionalInfo
    {
        return $this->set('decoupledIndicator', $decoupledIndicator);
    }

    /**
     * @param int $decoupledMaxTime
     * @return ThreeDSecureAdditionalInfo
     */
    public function setDecoupledMaxTime(int $decoupledMaxTime): ThreeDSecureAdditionalInfo
    {
        return $this->set('decoupledMaxTime', $decoupledMaxTime);
    }

    /**
     * @param int $merchantFraudRate
     * @return ThreeDSecureAdditionalInfo
     */
    public function setMerchantFraudRate(int $merchantFraudRate): ThreeDSecureAdditionalInfo
    {
        return $this->set('merchantFraudRate', $merchantFraudRate);
    }

    /**
     * @return ThreeDSecureAdditionalInfoObject
     */
    protected function buildObject(): ThreeDSecureAdditionalInfoObject
    {
        return new ThreeDSecureAdditionalInfoObject(
            $this->get('challengeIndicator'),
            $this->get('challengeWindowSize'),
            $this->get('decoupledIndicator'),
            $this->get('decoupledMaxTime'),
            $this->get('merchantFraudRate')
        );
    }
}
