<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject\Response;

class Token
{
    /**
     * @var string
     */
    private $displayHint;

    /**
     * @var bool
     */
    private $newToken;

    /**
     * @var string
     */
    private $token;

    /**
     * Token constructor.
     *
     * @param string $displayHint
     * @param bool $newToken
     * @param string $token
     */
    public function __construct(
        string $displayHint,
        bool $newToken,
        string $token
    ) {
        $this->displayHint = $displayHint;
        $this->newToken = $newToken;
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
    * @return bool
    */
    public function getNewToken()
    {
        return $this->newToken;
    }

    /**
    * @return string
    */
    public function getToken()
    {
        return $this->token;
    }
}
