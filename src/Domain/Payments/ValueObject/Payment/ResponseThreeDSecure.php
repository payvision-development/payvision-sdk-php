<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject\Payment;

class ResponseThreeDSecure
{
    public const ENROLLMENT_RESULT_AUTHENTICATED = 'Y';
    public const ENROLLMENT_RESULT_ATTEMPTED = 'A';
    public const ENROLLMENT_RESULT_INVALID = 'N';
    public const ENROLLMENT_RESULT_BYPASSED = 'B';

    public const VALIDATION_RESULT_AUTHENTICATED = 'Y';
    public const VALIDATION_RESULT_ATTEMPTED = 'A';
    public const VALIDATION_RESULT_UNAVAILABLE = 'U';
    public const VALIDATION_RESULT_INVALID = 'N';

    public const AUTHENTICATION_RESULT_AUTHENTICATED = 'Y';
    public const AUTHENTICATION_RESULT_ATTEMPTED = 'A';
    public const AUTHENTICATION_RESULT_FAILED = 'N';
    public const AUTHENTICATION_RESULT_UNAVAILABLE = 'U';
    public const AUTHENTICATION_RESULT_REJECTED = 'R';

    public const FLOW_FRICTIONLESS = 'FRICTIONLESS';
    public const FLOW_CHALLENGE = 'CHALLENGE';

    /**
     * @var string
     */
    private $authenticationResult;

    /**
     * @var string
     */
    private $enrollmentResult;

    /**
     * @var string
     */
    private $flow;

    /**
     * @var string
     */
    private $validationResult;

    /**
     * @var string
     */
    private $version;

    /**
     * ResponseThreeDSecure constructor.
     *
     * @param string $authenticationResult
     * @param string $enrollmentResult
     * @param string $flow
     * @param string $validationResult
     * @param string $version
     */
    public function __construct(
        string $authenticationResult = null,
        string $enrollmentResult = null,
        string $flow = null,
        string $validationResult = null,
        string $version = null
    ) {
        $this->authenticationResult = $authenticationResult;
        $this->enrollmentResult = $enrollmentResult;
        $this->flow = $flow;
        $this->validationResult = $validationResult;
        $this->version = $version;
    }

    /**
     * @return string|null
     */
    public function getAuthenticationResult(): ?string
    {
        return $this->authenticationResult;
    }

    /**
     * @return string|null
     */
    public function getEnrollmentResult(): ?string
    {
        return $this->enrollmentResult;
    }

    /**
     * @return string|null
     */
    public function getFlow(): ?string
    {
        return $this->flow;
    }

    /**
     * @return string|null
     */
    public function getValidationResult(): ?string
    {
        return $this->validationResult;
    }

    /**
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }
}
