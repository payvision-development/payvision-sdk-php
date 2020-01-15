<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Checkouts\Service\Builder\Payment;

use Payvision\SDK\Domain\Checkouts\ValueObject\Payment\ResponseToken as ResponseTokenObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class ResponseToken extends Basic
{
    /**
     * @return ResponseTokenObject
     */
    public function build(): ResponseTokenObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param string $displayHint
     * @return self
     */
    public function setDisplayHint(string $displayHint): self
    {
        return $this->set('displayHint', $displayHint);
    }

    /**
     * @param string $token
     * @return self
     */
    public function setToken(string $token): self
    {
        return $this->set('token', $token);
    }

    /**
     * @return ResponseTokenObject
     */
    protected function buildObject(): ResponseTokenObject
    {
        return new ResponseTokenObject(
            $this->get('displayHint'),
            $this->get('token')
        );
    }
}
