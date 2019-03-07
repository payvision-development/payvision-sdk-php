<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder;

use Payvision\SDK\Domain\Payments\ValueObject\BasicResponseTransaction as BasicResponseTransactionObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class BasicResponseTransaction extends Basic
{
    public function build(): BasicResponseTransactionObject
    {
        return $this->buildAndReset();
    }

    public function setAction(string $action): self
    {
        return $this->set('action', $action);
    }

    public function setId(string $id): self
    {
        return $this->set('id', $id);
    }

    public function setTrackingCode(string $trackingCode): self
    {
        return $this->set('trackingCode', $trackingCode);
    }

    public function setBrandId(int $brandId): self
    {
        return $this->set('brandId', $brandId);
    }

    public function setDescriptor(string $descriptor): self
    {
        return $this->set('descriptor', $descriptor);
    }

    protected function buildObject(): BasicResponseTransactionObject
    {
        return new BasicResponseTransactionObject(
            $this->get('action'),
            $this->get('id'),
            $this->get('trackingCode'),
            $this->get('brandId'),
            $this->get('descriptor')
        );
    }
}
