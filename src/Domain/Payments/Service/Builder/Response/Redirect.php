<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Response;

use Payvision\SDK\Domain\Payments\ValueObject\Response\Redirect as RedirectObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class Redirect extends Basic
{
    public function build(): RedirectObject
    {
        return $this->buildAndReset();
    }

    public function setFields(Fields $fields): self
    {
        return $this->set('fields', $fields);
    }

    public function setMethod(string $method): self
    {
        return $this->set('method', $method);
    }

    public function setUrl(string $url): self
    {
        return $this->set('url', $url);
    }

    protected function buildObject(): RedirectObject
    {
        return new RedirectObject(
            $this->get('fields'),
            $this->get('method'),
            $this->get('url')
        );
    }
}
