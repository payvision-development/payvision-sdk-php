<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Payment;

use Payvision\SDK\Domain\Payments\ValueObject\Payment\RequestThreeDSecure as RequestThreeDSecureObject;
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
     * @param string $avv
     * @return self
     */
    public function setAvv(string $avv): self
    {
        return $this->set('avv', $avv);
    }

    /**
     * @param bool $checkEnrollment
     * @return self
     */
    public function setCheckEnrollment(bool $checkEnrollment): self
    {
        return $this->set('checkEnrollment', $checkEnrollment);
    }

    /**
     * @param int $eci
     * @return self
     */
    public function setEci(int $eci): self
    {
        return $this->set('eci', $eci);
    }

    /**
     * @param string $xid
     * @return self
     */
    public function setXid(string $xid): self
    {
        return $this->set('xid', $xid);
    }

    /**
     * @return RequestThreeDSecureObject
     */
    protected function buildObject(): RequestThreeDSecureObject
    {
        return new RequestThreeDSecureObject(
            $this->get('avv'),
            $this->get('checkEnrollment'),
            $this->get('eci'),
            $this->get('xid')
        );
    }
}
