<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENSE.txt
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Response;

use Payvision\SDK\Domain\Payments\ValueObject\Response\Token as TokenObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class Token extends Basic
{
    public function build(): TokenObject
    {
        return $this->buildAndReset();
    }

    public function setDisplayHint(string $displayHint): self
    {
        return $this->set('displayHint', $displayHint);
    }

    public function setNewToken(bool $newToken): self
    {
        return $this->set('newToken', $newToken);
    }

    public function setToken(string $token): self
    {
        return $this->set('token', $token);
    }

    protected function buildObject(): TokenObject
    {
        return new TokenObject(
            $this->get('displayHint'),
            $this->get('newToken'),
            $this->get('token')
        );
    }
}
