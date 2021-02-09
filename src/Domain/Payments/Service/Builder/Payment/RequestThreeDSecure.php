<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Payment;

use Payvision\SDK\Domain\Payments\ValueObject\Payment\RequestThreeDSecure as RequestThreeDSecureObject;
use Payvision\SDK\Domain\Payments\ValueObject\ThreeDSecureAdditionalInfo;
use Payvision\SDK\Domain\Payments\ValueObject\ThreeDSecureExemption;
use Payvision\SDK\Domain\Payments\ValueObject\ThreeDSecureRecurringInfo;
use Payvision\SDK\Domain\Service\Builder\Basic;

class RequestThreeDSecure extends Basic
{
    /**
     * @return RequestThreeDSecureObject
     */
    public function build(): RequestThreeDSecureObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param ThreeDSecureAdditionalInfo $additionalInfo
     * @return RequestThreeDSecure
     */
    public function setAdditionalInfo(ThreeDSecureAdditionalInfo $additionalInfo): RequestThreeDSecure
    {
        return $this->set('additionalInfo', $additionalInfo);
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
     * @param ThreeDSecureExemption $exemption
     * @return RequestThreeDSecure
     */
    public function setExemption(ThreeDSecureExemption $exemption): RequestThreeDSecure
    {
        return $this->set('exemption', $exemption);
    }

    /**
     * @param ThreeDSecureRecurringInfo $recurringInfo
     * @return RequestThreeDSecure
     */
    public function setRecurringInfo(ThreeDSecureRecurringInfo $recurringInfo): RequestThreeDSecure
    {
        return $this->set('recurringInfo', $recurringInfo);
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
            $this->get('additionalInfo'),
            $this->get('avv'),
            $this->get('checkEnrollment'),
            $this->get('dsTransactionId'),
            $this->get('eci'),
            $this->get('exemption'),
            $this->get('recurringInfo'),
            $this->get('version'),
            $this->get('xid')
        );
    }
}
