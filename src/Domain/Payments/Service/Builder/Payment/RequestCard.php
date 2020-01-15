<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Payment;

use Payvision\SDK\Domain\Payments\ValueObject\Payment\RequestCard as RequestCardObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class RequestCard extends Basic
{
    /**
     * @return RequestCardObject
     */
    public function build(): RequestCardObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param string $cvv
     * @return self
     */
    public function setCvv(string $cvv): self
    {
        return $this->set('cvv', $cvv);
    }

    /**
     * @param int $expiryMonth
     * @return self
     */
    public function setExpiryMonth(int $expiryMonth): self
    {
        return $this->set('expiryMonth', $expiryMonth);
    }

    /**
     * @param int $expiryYear
     * @return self
     */
    public function setExpiryYear(int $expiryYear): self
    {
        return $this->set('expiryYear', $expiryYear);
    }

    /**
     * @param string $holderName
     * @return self
     */
    public function setHolderName(string $holderName): self
    {
        return $this->set('holderName', $holderName);
    }

    /**
     * @param string $issueNumber
     * @return self
     */
    public function setIssueNumber(string $issueNumber): self
    {
        return $this->set('issueNumber', $issueNumber);
    }

    /**
     * @param string $number
     * @return self
     */
    public function setNumber(string $number): self
    {
        return $this->set('number', $number);
    }

    /**
     * @return RequestCardObject
     */
    protected function buildObject(): RequestCardObject
    {
        return new RequestCardObject(
            $this->get('cvv'),
            $this->get('expiryMonth'),
            $this->get('expiryYear'),
            $this->get('holderName'),
            $this->get('issueNumber'),
            $this->get('number')
        );
    }
}
