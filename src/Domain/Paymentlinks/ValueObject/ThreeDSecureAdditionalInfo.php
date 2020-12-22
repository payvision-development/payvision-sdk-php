<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Paymentlinks\ValueObject;

class ThreeDSecureAdditionalInfo
{
    /**
     * @var string
     */
    private $challengeIndicator;

    /**
     * @var string
     */
    private $challengeWindowSize;

    /**
     * @var string
     */
    private $decoupledIndicator;

    /**
     * @var int
     */
    private $decoupledMaxTime;

    /**
     * @var int
     */
    private $merchantFraudRate;

    /**
     * ThreeDSecureAdditionalInfo constructor.
     *
     * @param string $challengeIndicator
     * @param string $challengeWindowSize
     * @param string $decoupledIndicator
     * @param int $decoupledMaxTime
     * @param int $merchantFraudRate
     */
    public function __construct(
        string $challengeIndicator = null,
        string $challengeWindowSize = null,
        string $decoupledIndicator = null,
        int $decoupledMaxTime = null,
        int $merchantFraudRate = null
    ) {
        $this->challengeIndicator = $challengeIndicator;
        $this->challengeWindowSize = $challengeWindowSize;
        $this->decoupledIndicator = $decoupledIndicator;
        $this->decoupledMaxTime = $decoupledMaxTime;
        $this->merchantFraudRate = $merchantFraudRate;
    }

    /**
     * @return string|null
     */
    public function getChallengeIndicator(): ?string
    {
        return $this->challengeIndicator;
    }

    /**
     * @return string|null
     */
    public function getChallengeWindowSize(): ?string
    {
        return $this->challengeWindowSize;
    }

    /**
     * @return string|null
     */
    public function getDecoupledIndicator(): ?string
    {
        return $this->decoupledIndicator;
    }

    /**
     * @return int|null
     */
    public function getDecoupledMaxTime(): ?int
    {
        return $this->decoupledMaxTime;
    }

    /**
     * @return int|null
     */
    public function getMerchantFraudRate(): ?int
    {
        return $this->merchantFraudRate;
    }
}
