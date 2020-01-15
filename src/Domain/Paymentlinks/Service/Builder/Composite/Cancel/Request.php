<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Paymentlinks\Service\Builder\Composite\Cancel;

use Payvision\SDK\Domain\Paymentlinks\ValueObject\Cancel\Request as RequestObject;
use Payvision\SDK\Domain\Paymentlinks\Service\Builder\Request\Header as HeaderBuilder;
use Payvision\SDK\Domain\Service\Builder\Basic;

class Request extends Basic
{
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
        $this->headerBuilder = new HeaderBuilder();
    }

    /**
     * @return RequestObject
     */
    public function build(): RequestObject
    {
        return $this->buildAndReset();
    }

    /**
     * @return HeaderBuilder
     */
    public function header(): HeaderBuilder
    {
        $this->isHeaderBuilderTouched = true;
        return $this->headerBuilder;
    }

    /**
     * @return RequestObject
     */
    protected function buildObject(): RequestObject
    {
        return new RequestObject(
            $this->isHeaderBuilderTouched ? $this->headerBuilder->build() : null
        );
    }
}
