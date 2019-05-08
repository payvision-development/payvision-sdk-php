<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENSE.txt
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Composite\Request;

use Payvision\SDK\Domain\Payments\ValueObject\Request\Refund as RefundObject;
use Payvision\SDK\Domain\Payments\Service\Builder\Composite\Refund\Body as BodyBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Payment\Header as HeaderBuilder;
use Payvision\SDK\Domain\Service\Builder\Basic;

class Refund extends Basic
{
    /**
     * @var BodyBuilder
     */
    private $bodyBuilder;

    /**
     * @var bool
     */
    private $isBodyBuilderTouched = false;

    /**
     * @var HeaderBuilder
     */
    private $headerBuilder;

    /**
     * @var bool
     */
    private $isHeaderBuilderTouched = false;

    public function __construct()
    {
        $this->bodyBuilder = new BodyBuilder();
        $this->headerBuilder = new HeaderBuilder();
    }

    public function build(): RefundObject
    {
        return $this->buildAndReset();
    }

    public function body(): BodyBuilder
    {
        $this->isBodyBuilderTouched = true;
        return $this->bodyBuilder;
    }

    public function header(): HeaderBuilder
    {
        $this->isHeaderBuilderTouched = true;
        return $this->headerBuilder;
    }

    protected function buildObject(): RefundObject
    {
        return new RefundObject(
            $this->isBodyBuilderTouched ? $this->bodyBuilder->build() : null,
            $this->isHeaderBuilderTouched ? $this->headerBuilder->build() : null
        );
    }
}
