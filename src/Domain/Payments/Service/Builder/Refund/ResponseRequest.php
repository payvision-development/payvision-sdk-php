<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENSE.txt
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Refund;

use Payvision\SDK\Domain\Payments\ValueObject\Refund\ResponseRequest as ResponseRequestObject;
use Payvision\SDK\Domain\Payments\ValueObject\Response\Header;
use Payvision\SDK\Domain\Service\Builder\Basic;

class ResponseRequest extends Basic
{
    public function build(): ResponseRequestObject
    {
        return $this->buildAndReset();
    }

    public function setBody(ResponseBody $body): self
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

    protected function buildObject(): ResponseRequestObject
    {
        return new ResponseRequestObject(
            $this->get('body'),
            $this->get('description'),
            $this->get('header'),
            $this->get('result')
        );
    }
}
