<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Composite\Payment;

use Payvision\SDK\Domain\Payments\ValueObject\Payment\RequestThreeDSecure as RequestThreeDSecureObject;
use Payvision\SDK\Domain\Payments\Service\Builder\ThreeDSecureAdditionalInfo as ThreeDSecureAdditionalInfoBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\ThreeDSecureExemption as ThreeDSecureExemptionBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\ThreeDSecureRecurringInfo as ThreeDSecureRecurringInfoBuilder;
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
     * @param string $avv
     * @return RequestThreeDSecure
     */
    public function setAvv(string $avv): RequestThreeDSecure
    {
        return $this->set('avv', $avv);
    }

    /**
     * @param bool $checkEnrollment
     * @return RequestThreeDSecure
     */
    public function setCheckEnrollment(bool $checkEnrollment): RequestThreeDSecure
    {
        return $this->set('checkEnrollment', $checkEnrollment);
    }

    /**
     * @param string $dsTransactionId
     * @return RequestThreeDSecure
     */
    public function setDsTransactionId(string $dsTransactionId): RequestThreeDSecure
    {
        return $this->set('dsTransactionId', $dsTransactionId);
    }

    /**
     * @param string $eci
     * @return RequestThreeDSecure
     */
    public function setEci(string $eci): RequestThreeDSecure
    {
        return $this->set('eci', $eci);
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
     * @param string $xid
     * @return RequestThreeDSecure
     */
    public function setXid(string $xid): RequestThreeDSecure
    {
        return $this->set('xid', $xid);
    }

    /**
     * @return RequestThreeDSecureObject
     */
    protected function buildObject(): RequestThreeDSecureObject
    {
        return new RequestThreeDSecureObject(
            $this->isAdditionalInfoBuilderTouched ? $this->additionalInfoBuilder->build() : null,
            $this->get('avv'),
            $this->get('checkEnrollment'),
            $this->get('dsTransactionId'),
            $this->get('eci'),
            $this->isExemptionBuilderTouched ? $this->exemptionBuilder->build() : null,
            $this->isRecurringInfoBuilderTouched ? $this->recurringInfoBuilder->build() : null,
            $this->get('version'),
            $this->get('xid')
        );
    }
}
