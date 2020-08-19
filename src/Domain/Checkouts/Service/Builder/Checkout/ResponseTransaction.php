<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Checkouts\Service\Builder\Checkout;

use Payvision\SDK\Domain\Checkouts\ValueObject\Checkout\ResponseTransaction as ResponseTransactionObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class ResponseTransaction extends Basic
{
    /**
     * @return ResponseTransactionObject
     */
    public function build(): ResponseTransactionObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param float $amount
     * @return ResponseTransaction
     */
    public function setAmount(float $amount): ResponseTransaction
    {
        return $this->set('amount', $amount);
    }

    /**
     * @param string $authorizationMode
     * @return ResponseTransaction
     */
    public function setAuthorizationMode(string $authorizationMode): ResponseTransaction
    {
        return $this->set('authorizationMode', $authorizationMode);
    }

    /**
     * @param string $currencyCode
     * @return ResponseTransaction
     */
    public function setCurrencyCode(string $currencyCode): ResponseTransaction
    {
        return $this->set('currencyCode', $currencyCode);
    }

    /**
     * @param string $trackingCode
     * @return ResponseTransaction
     */
    public function setTrackingCode(string $trackingCode): ResponseTransaction
    {
        return $this->set('trackingCode', $trackingCode);
    }

    /**
     * @return ResponseTransactionObject
     */
    protected function buildObject(): ResponseTransactionObject
    {
        return new ResponseTransactionObject(
            $this->get('amount'),
            $this->get('authorizationMode'),
            $this->get('currencyCode'),
            $this->get('trackingCode')
        );
    }
}
