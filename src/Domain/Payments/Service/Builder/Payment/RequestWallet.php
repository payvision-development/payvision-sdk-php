<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Payment;

use Payvision\SDK\Domain\Payments\ValueObject\Payment\RequestWallet as RequestWalletObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class RequestWallet extends Basic
{
    /**
     * @return RequestWalletObject
     */
    public function build(): RequestWalletObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param string $accountIdentifier
     * @return self
     */
    public function setAccountIdentifier(string $accountIdentifier): self
    {
        return $this->set('accountIdentifier', $accountIdentifier);
    }

    /**
     * @param string $accountKey
     * @return self
     */
    public function setAccountKey(string $accountKey): self
    {
        return $this->set('accountKey', $accountKey);
    }

    /**
     * @return RequestWalletObject
     */
    protected function buildObject(): RequestWalletObject
    {
        return new RequestWalletObject(
            $this->get('accountIdentifier'),
            $this->get('accountKey')
        );
    }
}
