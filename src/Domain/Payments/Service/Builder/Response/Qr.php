<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Response;

use Payvision\SDK\Domain\Payments\ValueObject\Response\Qr as QrObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class Qr extends Basic
{
    public function build(): QrObject
    {
        return $this->buildAndReset();
    }

    public function setResource(string $resource): self
    {
        return $this->set('resource', $resource);
    }

    protected function buildObject(): QrObject
    {
        return new QrObject(
            $this->get('resource')
        );
    }
}
