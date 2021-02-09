<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
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
     * @return RequestCard
     */
    public function setCvv(string $cvv): RequestCard
    {
        return $this->set('cvv', $cvv);
    }

    /**
     * @param int $expiryMonth
     * @return RequestCard
     */
    public function setExpiryMonth(int $expiryMonth): RequestCard
    {
        return $this->set('expiryMonth', $expiryMonth);
    }

    /**
     * @param int $expiryYear
     * @return RequestCard
     */
    public function setExpiryYear(int $expiryYear): RequestCard
    {
        return $this->set('expiryYear', $expiryYear);
    }

    /**
     * @param string $holderName
     * @return RequestCard
     */
    public function setHolderName(string $holderName): RequestCard
    {
        return $this->set('holderName', $holderName);
    }

    /**
     * @param string $issueNumber
     * @return RequestCard
     */
    public function setIssueNumber(string $issueNumber): RequestCard
    {
        return $this->set('issueNumber', $issueNumber);
    }

    /**
     * @param string $number
     * @return RequestCard
     */
    public function setNumber(string $number): RequestCard
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
