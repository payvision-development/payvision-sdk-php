<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder;

use Payvision\SDK\Domain\Payments\ValueObject\ErrorObject as ErrorObjectObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class ErrorObject extends Basic
{
    public function build(): ErrorObjectObject
    {
        return $this->buildAndReset();
    }

    public function setCode(int $code): self
    {
        return $this->set('code', $code);
    }

    public function setMessage(string $message): self
    {
        return $this->set('message', $message);
    }

    protected function buildObject(): ErrorObjectObject
    {
        return new ErrorObjectObject(
            $this->get('code'),
            $this->get('message')
        );
    }
}
