<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject\Cancel;

class RequestTransaction
{
    /**
     * @var string
     */
    private $trackingCode;

    /**
     * RequestTransaction constructor.
     *
     * @param string $trackingCode
     */
    public function __construct(
        string $trackingCode
    ) {
        $this->trackingCode = $trackingCode;
    }

    /**
     * @return string
     */
    public function getTrackingCode()
    {
        return $this->trackingCode;
    }
}
