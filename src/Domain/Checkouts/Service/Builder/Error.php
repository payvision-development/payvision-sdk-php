<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Checkouts\Service\Builder;

use Payvision\SDK\Domain\Checkouts\ValueObject\Error as ErrorObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class Error extends Basic
{
    /**
     * @return ErrorObject
     */
    public function build(): ErrorObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param int $code
     * @return self
     */
    public function setCode(int $code): self
    {
        return $this->set('code', $code);
    }

    /**
     * @param string $message
     * @return self
     */
    public function setMessage(string $message): self
    {
        return $this->set('message', $message);
    }

    /**
     * @return ErrorObject
     */
    protected function buildObject(): ErrorObject
    {
        return new ErrorObject(
            $this->get('code'),
            $this->get('message')
        );
    }
}
