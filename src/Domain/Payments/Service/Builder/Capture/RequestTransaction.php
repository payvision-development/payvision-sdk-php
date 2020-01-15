<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Capture;

use Payvision\SDK\Domain\Payments\ValueObject\Capture\RequestTransaction as RequestTransactionObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class RequestTransaction extends Basic
{
    /**
     * @return RequestTransactionObject
     */
    public function build(): RequestTransactionObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param float $amount
     * @return self
     */
    public function setAmount(float $amount): self
    {
        return $this->set('amount', $amount);
    }

    /**
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode(string $currencyCode): self
    {
        return $this->set('currencyCode', $currencyCode);
    }

    /**
     * @param string $trackingCode
     * @return self
     */
    public function setTrackingCode(string $trackingCode): self
    {
        return $this->set('trackingCode', $trackingCode);
    }

    /**
     * @param string $invoiceId
     * @return self
     */
    public function setInvoiceId(string $invoiceId): self
    {
        return $this->set('invoiceId', $invoiceId);
    }

    /**
     * @return RequestTransactionObject
     */
    protected function buildObject(): RequestTransactionObject
    {
        return new RequestTransactionObject(
            $this->get('amount'),
            $this->get('currencyCode'),
            $this->get('trackingCode'),
            $this->get('invoiceId')
        );
    }
}
