<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Response;

use Payvision\SDK\Domain\Payments\ValueObject\Response\Error as ErrorObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class Error extends Basic
{
    public function build(): ErrorObject
    {
        return $this->buildAndReset();
    }

    public function setBody(ErrorBody $body): self
    {
        return $this->set('body', $body);
    }

    public function setDescription(string $description): self
    {
        return $this->set('description', $description);
    }

    public function setHeader(Header $header): self
    {
        return $this->set('header', $header);
    }

    public function setResult(int $result): self
    {
        return $this->set('result', $result);
    }

    protected function buildObject(): ErrorObject
    {
        return new ErrorObject(
            $this->get('body'),
            $this->get('description'),
            $this->get('header'),
            $this->get('result')
        );
    }
}
