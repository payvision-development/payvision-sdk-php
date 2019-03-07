<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder;

use Payvision\SDK\Domain\Payments\ValueObject\Qr as QrObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class Qr extends Basic
{
    public function build(): QrObject
    {
        return $this->buildAndReset();
    }

    public function setGenerate(bool $generate): self
    {
        return $this->set('generate', $generate);
    }

    public function setSize(int $size): self
    {
        return $this->set('size', $size);
    }

    protected function buildObject(): QrObject
    {
        return new QrObject(
            $this->get('generate'),
            $this->get('size')
        );
    }
}
