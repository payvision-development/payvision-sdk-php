<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENSE.txt
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject;

class ErrorObject
{
    /**
     * @var int
     */
    private $code;

    /**
     * @var string
     */
    private $message;

    /**
     * ErrorObject constructor.
     *
     * @param int $code
     * @param string $message
     */
    public function __construct(
        int $code = null,
        string $message = null
    ) {
        $this->code = $code;
        $this->message = $message;
    }

    /**
    * @return int|null
    */
    public function getCode()
    {
        return $this->code;
    }

    /**
    * @return string|null
    */
    public function getMessage()
    {
        return $this->message;
    }
}
