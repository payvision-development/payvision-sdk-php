<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENSE.txt
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder;

use Payvision\SDK\Domain\Payments\ValueObject\Wallet as WalletObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class Wallet extends Basic
{
    public function build(): WalletObject
    {
        return $this->buildAndReset();
    }

    public function setAccountIdentifier(string $accountIdentifier): self
    {
        return $this->set('accountIdentifier', $accountIdentifier);
    }

    public function setAccountKey(string $accountKey): self
    {
        return $this->set('accountKey', $accountKey);
    }

    protected function buildObject(): WalletObject
    {
        return new WalletObject(
            $this->get('accountIdentifier'),
            $this->get('accountKey')
        );
    }
}
