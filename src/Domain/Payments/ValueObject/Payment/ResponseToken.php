<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject\Payment;

class ResponseToken
{
    /**
     * @var string
     */
    private $displayHint;

    /**
     * @var string
     */
    private $token;

    /**
     * ResponseToken constructor.
     *
     * @param string $displayHint
     * @param string $token
     */
    public function __construct(
        string $displayHint,
        string $token
    ) {
        $this->displayHint = $displayHint;
        $this->token = $token;
    }

    /**
     * @return string
     */
    public function getDisplayHint()
    {
        return $this->displayHint;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }
}
