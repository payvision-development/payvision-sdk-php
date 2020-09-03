<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Paymentlinks\Service\Builder\Link;

use Payvision\SDK\Domain\Paymentlinks\ValueObject\Link\ResponsePaymentError as ResponsePaymentErrorObject;
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
     * @return ResponsePaymentError
     */
    public function setCode(int $code): ResponsePaymentError
    {
        return $this->set('code', $code);
    }

    /**
     * @param string $message
     * @return ResponsePaymentError
     */
    public function setMessage(string $message): ResponsePaymentError
    {
        return $this->set('message', $message);
    }

    /**
     * @param string $detailedMessage
     * @return ResponsePaymentError
     */
    public function setDetailedMessage(string $detailedMessage): ResponsePaymentError
    {
        return $this->set('detailedMessage', $detailedMessage);
    }

    /**
     * @return ResponsePaymentErrorObject
     */
    protected function buildObject(): ResponsePaymentErrorObject
    {
        return new ResponsePaymentErrorObject(
            $this->get('code'),
            $this->get('message'),
            $this->get('detailedMessage')
        );
    }
}
