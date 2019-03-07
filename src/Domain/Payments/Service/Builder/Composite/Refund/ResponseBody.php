<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Composite\Refund;

use Payvision\SDK\Domain\Payments\ValueObject\Refund\ResponseBody as ResponseBodyObject;
use Payvision\SDK\Domain\Payments\Service\Builder\BasicResponseCard as BasicResponseCardBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Refund\ResponseTransaction as ResponseTransactionBuilder;
use Payvision\SDK\Domain\Service\Builder\Basic;

class ResponseBody extends Basic
{
    /**
     * @var BasicResponseCardBuilder
     */
    private $cardBuilder;

    /**
     * @var bool
     */
    private $isCardBuilderTouched = false;

    /**
     * @var ResponseTransactionBuilder
     */
    private $transactionBuilder;

    /**
     * @var bool
     */
    private $isTransactionBuilderTouched = false;

    public function __construct()
    {
        $this->cardBuilder = new BasicResponseCardBuilder();
        $this->transactionBuilder = new ResponseTransactionBuilder();
    }

    public function build(): ResponseBodyObject
    {
        return $this->buildAndReset();
    }

    public function card(): BasicResponseCardBuilder
    {
        $this->isCardBuilderTouched = true;
        return $this->cardBuilder;
    }

    public function transaction(): ResponseTransactionBuilder
    {
        $this->isTransactionBuilderTouched = true;
        return $this->transactionBuilder;
    }

    protected function buildObject(): ResponseBodyObject
    {
        return new ResponseBodyObject(
            $this->isCardBuilderTouched ? $this->cardBuilder->build() : null,
            $this->isTransactionBuilderTouched ? $this->transactionBuilder->build() : null
        );
    }
}
