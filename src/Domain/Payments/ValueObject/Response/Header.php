<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject\Response;

use DateTime;

class Header
{
    /**
     * @var string
     */
    private $requestCode;

    /**
     * @var DateTime
     */
    private $requestTimestamp;

    /**
     * Header constructor.
     *
     * @param string $requestCode
     * @param DateTime $requestTimestamp
     */
    public function __construct(
        string $requestCode = null,
        DateTime $requestTimestamp = null
    ) {
        $this->requestCode = $requestCode;
        $this->requestTimestamp = $requestTimestamp;
    }

    /**
    * @return string|null
    */
    public function getRequestCode()
    {
        return $this->requestCode;
    }

    /**
    * @return DateTime|null
    */
    public function getRequestTimestamp()
    {
        return $this->requestTimestamp;
    }
}
