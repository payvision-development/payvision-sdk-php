<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Paymentlink\Service\Builder\Link;

use Payvision\SDK\Domain\Paymentlink\ValueObject\Link\ResponsePaymentError as ResponsePaymentErrorObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class ResponsePaymentError extends Basic
{
    /**
     * @return ResponsePaymentErrorObject
     */
    public function build(): ResponsePaymentErrorObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param int $code
     * @return self
     */
    public function setCode(int $code): self
    {
        return $this->set('code', $code);
    }

    /**
     * @param string $message
     * @return self
     */
    public function setMessage(string $message): self
    {
        return $this->set('message', $message);
    }

    /**
     * @return ResponsePaymentErrorObject
     */
    protected function buildObject(): ResponsePaymentErrorObject
    {
        return new ResponsePaymentErrorObject(
            $this->get('code'),
            $this->get('message')
        );
    }
}