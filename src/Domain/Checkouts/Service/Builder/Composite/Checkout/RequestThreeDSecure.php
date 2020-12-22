<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Checkouts\Service\Builder\Composite\Checkout;

use Payvision\SDK\Domain\Checkouts\ValueObject\Checkout\RequestThreeDSecure as RequestThreeDSecureObject;
use Payvision\SDK\Domain\Checkouts\Service\Builder\ThreeDSecureAdditionalInfo as ThreeDSecureAdditionalInfoBuilder;
use Payvision\SDK\Domain\Checkouts\Service\Builder\ThreeDSecureExemption as ThreeDSecureExemptionBuilder;
use Payvision\SDK\Domain\Checkouts\Service\Builder\ThreeDSecureRecurringInfo as ThreeDSecureRecurringInfoBuilder;
use Payvision\SDK\Domain\Service\Builder\Basic;

class RequestThreeDSecure extends Basic
{
    /**
     * @var ThreeDSecureAdditionalInfoBuilder
     */
    private $additionalInfoBuilder;

    /**
     * @var bool
     */
    private $isAdditionalInfoBuilderTouched = false;

    /**
     * @var ThreeDSecureExemptionBuilder
     */
    private $exemptionBuilder;

    /**
     * @var bool
     */
    private $isExemptionBuilderTouched = false;

    /**
     * @var ThreeDSecureRecurringInfoBuilder
     */
    private $recurringInfoBuilder;

    /**
     * @var bool
     */
    private $isRecurringInfoBuilderTouched = false;

    public function __construct()
    {
        $this->additionalInfoBuilder = new ThreeDSecureAdditionalInfoBuilder();
        $this->exemptionBuilder = new ThreeDSecureExemptionBuilder();
        $this->recurringInfoBuilder = new ThreeDSecureRecurringInfoBuilder();
    }

    /**
     * @return RequestThreeDSecureObject
     */
    public function build(): RequestThreeDSecureObject
    {
        return $this->buildAndReset();
    }

    /**
     * @return ThreeDSecureAdditionalInfoBuilder
     */
    public function additionalInfo(): ThreeDSecureAdditionalInfoBuilder
    {
        $this->isAdditionalInfoBuilderTouched = true;
        return $this->additionalInfoBuilder;
    }

    /**
     * @return ThreeDSecureExemptionBuilder
     */
    public function exemption(): ThreeDSecureExemptionBuilder
    {
        $this->isExemptionBuilderTouched = true;
        return $this->exemptionBuilder;
    }

    /**
     * @return ThreeDSecureRecurringInfoBuilder
     */
    public function recurringInfo(): ThreeDSecureRecurringInfoBuilder
    {
        $this->isRecurringInfoBuilderTouched = true;
        return $this->recurringInfoBuilder;
    }

    /**
     * @param string $version
     * @return RequestThreeDSecure
     */
    public function setVersion(string $version): RequestThreeDSecure
    {
        return $this->set('version', $version);
    }

    /**
     * @return RequestThreeDSecureObject
     */
    protected function buildObject(): RequestThreeDSecureObject
    {
        return new RequestThreeDSecureObject(
            $this->isAdditionalInfoBuilderTouched ? $this->additionalInfoBuilder->build() : null,
            $this->isExemptionBuilderTouched ? $this->exemptionBuilder->build() : null,
            $this->isRecurringInfoBuilderTouched ? $this->recurringInfoBuilder->build() : null,
            $this->get('version')
        );
    }
}
