<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENSE.txt
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Response;

use Payvision\SDK\Domain\Payments\ValueObject\Response\ThreeDSecure as ThreeDSecureObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class ThreeDSecure extends Basic
{
    public function build(): ThreeDSecureObject
    {
        return $this->buildAndReset();
    }

    public function setCheckEnrollment(bool $checkEnrollment): self
    {
        return $this->set('checkEnrollment', $checkEnrollment);
    }

    public function setEnrollmentResult(string $enrollmentResult): self
    {
        return $this->set('enrollmentResult', $enrollmentResult);
    }

    public function setValidationResult(string $validationResult): self
    {
        return $this->set('validationResult', $validationResult);
    }

    protected function buildObject(): ThreeDSecureObject
    {
        return new ThreeDSecureObject(
            $this->get('checkEnrollment'),
            $this->get('enrollmentResult'),
            $this->get('validationResult')
        );
    }
}
