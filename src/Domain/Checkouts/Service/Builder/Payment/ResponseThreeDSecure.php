<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
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
     * @param string $authenticationResult
     * @return ResponseThreeDSecure
     */
    public function setAuthenticationResult(string $authenticationResult): ResponseThreeDSecure
    {
        return $this->set('authenticationResult', $authenticationResult);
    }

    /**
     * @param string $enrollmentResult
     * @return ResponseThreeDSecure
     */
    public function setEnrollmentResult(string $enrollmentResult): ResponseThreeDSecure
    {
        return $this->set('enrollmentResult', $enrollmentResult);
    }

    /**
     * @param string $flow
     * @return ResponseThreeDSecure
     */
    public function setFlow(string $flow): ResponseThreeDSecure
    {
        return $this->set('flow', $flow);
    }

    /**
     * @param string $validationResult
     * @return ResponseThreeDSecure
     */
    public function setValidationResult(string $validationResult): ResponseThreeDSecure
    {
        return $this->set('validationResult', $validationResult);
    }

    /**
     * @param string $version
     * @return ResponseThreeDSecure
     */
    public function setVersion(string $version): ResponseThreeDSecure
    {
        return $this->set('version', $version);
    }

    /**
     * @return ResponseThreeDSecureObject
     */
    protected function buildObject(): ResponseThreeDSecureObject
    {
        return new ResponseThreeDSecureObject(
            $this->get('authenticationResult'),
            $this->get('enrollmentResult'),
            $this->get('flow'),
            $this->get('validationResult'),
            $this->get('version')
        );
    }
}
