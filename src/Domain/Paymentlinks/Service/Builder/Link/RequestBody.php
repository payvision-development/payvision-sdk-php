<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Paymentlinks\Service\Builder\Link;

use Payvision\SDK\Domain\Paymentlinks\ValueObject\Link\RequestBody as RequestBodyObject;
use Payvision\SDK\Domain\Paymentlinks\ValueObject\Link\RequestTransaction;
use Payvision\SDK\Domain\Paymentlinks\ValueObject\Link\RequestLink;
use Payvision\SDK\Domain\Paymentlinks\ValueObject\BasicAddress;
use Payvision\SDK\Domain\Paymentlinks\ValueObject\BasicCustomer;
use Payvision\SDK\Domain\Paymentlinks\ValueObject\Link\RequestDba;
use Payvision\SDK\Domain\Paymentlinks\ValueObject\Link\RequestOrder;
use Payvision\SDK\Domain\Service\Builder\Basic;

class RequestBody extends Basic
{
    /**
     * @return RequestBodyObject
     */
    public function build(): RequestBodyObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param RequestTransaction $transaction
     * @return self
     */
    public function setTransaction(RequestTransaction $transaction): self
    {
        return $this->set('transaction', $transaction);
    }

    /**
     * @param RequestLink $link
     * @return self
     */
    public function setLink(RequestLink $link): self
    {
        return $this->set('link', $link);
    }

    /**
     * @param BasicAddress $billingAddress
     * @return self
     */
    public function setBillingAddress(BasicAddress $billingAddress): self
    {
        return $this->set('billingAddress', $billingAddress);
    }

    /**
     * @param BasicCustomer $customer
     * @return self
     */
    public function setCustomer(BasicCustomer $customer): self
    {
        return $this->set('customer', $customer);
    }

    /**
     * @param RequestDba $dba
     * @return self
     */
    public function setDba(RequestDba $dba): self
    {
        return $this->set('dba', $dba);
    }

    /**
     * @param RequestOrder $order
     * @return self
     */
    public function setOrder(RequestOrder $order): self
    {
        return $this->set('order', $order);
    }

    /**
     * @param BasicAddress $shippingAddress
     * @return self
     */
    public function setShippingAddress(BasicAddress $shippingAddress): self
    {
        return $this->set('shippingAddress', $shippingAddress);
    }

    /**
     * @return RequestBodyObject
     */
    protected function buildObject(): RequestBodyObject
    {
        return new RequestBodyObject(
            $this->get('transaction'),
            $this->get('link'),
            $this->get('billingAddress'),
            $this->get('customer'),
            $this->get('dba'),
            $this->get('order'),
            $this->get('shippingAddress')
        );
    }
}
