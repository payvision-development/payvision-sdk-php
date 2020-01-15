<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Checkouts\Service\Builder\Payment;

use Payvision\SDK\Domain\Checkouts\ValueObject\Payment\ResponseThreeDSecure as ResponseThreeDSecureObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class ResponseThreeDSecure extends Basic
{
    /**
     * @return ResponseThreeDSecureObject
     */
    public function build(): ResponseThreeDSecureObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param string $enrollmentResult
     * @return self
     */
    public function setEnrollmentResult(string $enrollmentResult): self
    {
        return $this->set('enrollmentResult', $enrollmentResult);
    }

    /**
     * @param string $validationResult
     * @return self
     */
    public function setValidationResult(string $validationResult): self
    {
        return $this->set('validationResult', $validationResult);
    }

    /**
     * @return ResponseThreeDSecureObject
     */
    protected function buildObject(): ResponseThreeDSecureObject
    {
        return new ResponseThreeDSecureObject(
            $this->get('enrollmentResult'),
            $this->get('validationResult')
        );
    }
}
