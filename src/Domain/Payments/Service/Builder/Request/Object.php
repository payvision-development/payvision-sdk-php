<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Request;

use Payvision\SDK\Domain\Payments\ValueObject\Request\Object as ObjectObject;
use Payvision\SDK\Domain\Payments\ValueObject\Payment\Header;
use Payvision\SDK\Domain\Payments\ValueObject\Payment\Body;
use Payvision\SDK\Domain\Service\Builder\Basic;

class Object extends Basic
{
    public function build(): ObjectObject
    {
        return $this->buildAndReset();
    }

    public function setHeader(Header $header): self
    {
        return $this->set('header', $header);
    }

    public function setBody(Body $body): self
    {
        return $this->set('body', $body);
    }

    public function setAction(string $action): self
    {
        return $this->set('action', $action);
    }

    protected function buildObject(): ObjectObject
    {
        return new ObjectObject(
            $this->get('header'),
            $this->get('body'),
            $this->get('action')
        );
    }
}
