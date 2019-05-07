<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENSE.txt
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject\Response;

class ThreeDSecure
{
    /**
     * @var bool
     */
    private $checkEnrollment;

    /**
     * @var string
     */
    private $enrollmentResult;

    /**
     * @var string
     */
    private $validationResult;

    /**
     * ThreeDSecure constructor.
     *
     * @param bool $checkEnrollment
     * @param string $enrollmentResult
     * @param string $validationResult
     */
    public function __construct(
        bool $checkEnrollment = null,
        string $enrollmentResult = null,
        string $validationResult = null
    ) {
        $this->checkEnrollment = $checkEnrollment;
        $this->enrollmentResult = $enrollmentResult;
        $this->validationResult = $validationResult;
    }

    /**
    * @return bool|null
    */
    public function getCheckEnrollment()
    {
        return $this->checkEnrollment;
    }

    /**
    * @return string|null
    */
    public function getEnrollmentResult()
    {
        return $this->enrollmentResult;
    }

    /**
    * @return string|null
    */
    public function getValidationResult()
    {
        return $this->validationResult;
    }
}
