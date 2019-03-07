<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder;

use Payvision\SDK\Domain\Payments\ValueObject\ThreeDSecure as ThreeDSecureObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class ThreeDSecure extends Basic
{
    public function build(): ThreeDSecureObject
    {
        return $this->buildAndReset();
    }

    public function setAvv(string $avv): self
    {
        return $this->set('avv', $avv);
    }

    public function setCheckEnrollment(bool $checkEnrollment): self
    {
        return $this->set('checkEnrollment', $checkEnrollment);
    }

    public function setEci(int $eci): self
    {
        return $this->set('eci', $eci);
    }

    public function setSignedPares(string $signedPares): self
    {
        return $this->set('signedPares', $signedPares);
    }

    public function setXid(string $xid): self
    {
        return $this->set('xid', $xid);
    }

    protected function buildObject(): ThreeDSecureObject
    {
        return new ThreeDSecureObject(
            $this->get('avv'),
            $this->get('checkEnrollment'),
            $this->get('eci'),
            $this->get('signedPares'),
            $this->get('xid')
        );
    }
}
