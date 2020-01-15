<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Checkouts\ValueObject\Payment;

class ResponseThreeDSecure
{
    /**
     * @var string
     */
    private $enrollmentResult;

    /**
     * @var string
     */
    private $validationResult;

    /**
     * ResponseThreeDSecure constructor.
     *
     * @param string $enrollmentResult
     * @param string $validationResult
     */
    public function __construct(
        string $enrollmentResult = null,
        string $validationResult = null
    ) {
        $this->enrollmentResult = $enrollmentResult;
        $this->validationResult = $validationResult;
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
