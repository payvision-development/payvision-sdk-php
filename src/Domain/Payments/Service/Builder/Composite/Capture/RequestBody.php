<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Composite\Capture;

use Payvision\SDK\Domain\Payments\ValueObject\Capture\RequestBody as RequestBodyObject;
use Payvision\SDK\Domain\Payments\Service\Builder\Capture\RequestTransaction as RequestTransactionBuilder;
use Payvision\SDK\Domain\Service\Builder\Basic;

class RequestBody extends Basic
{
    /**
     * @var RequestTransactionBuilder
     */
    private $transactionBuilder;

    /**
     * @var bool
     */
    private $isTransactionBuilderTouched = false;

    public function __construct()
    {
        $this->transactionBuilder = new RequestTransactionBuilder();
    }

    /**
     * @return RequestBodyObject
     */
    public function build(): RequestBodyObject
    {
        return $this->buildAndReset();
    }

    /**
     * @return RequestTransactionBuilder
     */
    public function transaction(): RequestTransactionBuilder
    {
        $this->isTransactionBuilderTouched = true;
        return $this->transactionBuilder;
    }

    /**
     * @return RequestBodyObject
     */
    protected function buildObject(): RequestBodyObject
    {
        return new RequestBodyObject(
            $this->isTransactionBuilderTouched ? $this->transactionBuilder->build() : null
        );
    }
}
