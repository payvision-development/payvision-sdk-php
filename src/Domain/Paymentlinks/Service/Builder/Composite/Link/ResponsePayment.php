<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Paymentlinks\Service\Builder\Composite\Link;

use Payvision\SDK\Domain\Paymentlinks\ValueObject\Link\ResponsePayment as ResponsePaymentObject;
use Payvision\SDK\Domain\Paymentlinks\Service\Builder\Composite\Link\ResponsePaymentBody as ResponsePaymentBodyBuilder;
use Payvision\SDK\Domain\Paymentlinks\Service\Builder\Link\ResponsePaymentHeader as ResponsePaymentHeaderBuilder;
use Payvision\SDK\Domain\Service\Builder\Basic;

class ResponsePayment extends Basic
{
    /**
     * @var ResponsePaymentBodyBuilder
     */
    private $bodyBuilder;

    /**
     * @var bool
     */
    private $isBodyBuilderTouched = false;

    /**
     * @var ResponsePaymentHeaderBuilder
     */
    private $headerBuilder;

    /**
     * @var bool
     */
    private $isHeaderBuilderTouched = false;

    public function __construct()
    {
        $this->bodyBuilder = new ResponsePaymentBodyBuilder();
        $this->headerBuilder = new ResponsePaymentHeaderBuilder();
    }

    /**
     * @return ResponsePaymentObject
     */
    public function build(): ResponsePaymentObject
    {
        return $this->buildAndReset();
    }

    /**
     * @return ResponsePaymentBodyBuilder
     */
    public function body(): ResponsePaymentBodyBuilder
    {
        $this->isBodyBuilderTouched = true;
        return $this->bodyBuilder;
    }

    /**
     * @param string $description
     * @return self
     */
    public function setDescription(string $description): self
    {
        return $this->set('description', $description);
    }

    /**
     * @return ResponsePaymentHeaderBuilder
     */
    public function header(): ResponsePaymentHeaderBuilder
    {
        $this->isHeaderBuilderTouched = true;
        return $this->headerBuilder;
    }

    /**
     * @param int $result
     * @return self
     */
    public function setResult(int $result): self
    {
        return $this->set('result', $result);
    }

    /**
     * @return ResponsePaymentObject
     */
    protected function buildObject(): ResponsePaymentObject
    {
        return new ResponsePaymentObject(
            $this->isBodyBuilderTouched ? $this->bodyBuilder->build() : null,
            $this->get('description'),
            $this->isHeaderBuilderTouched ? $this->headerBuilder->build() : null,
            $this->get('result')
        );
    }
}
