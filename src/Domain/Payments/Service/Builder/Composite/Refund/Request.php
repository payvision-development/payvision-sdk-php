<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Composite\Refund;

use Payvision\SDK\Domain\Payments\ValueObject\Refund\Request as RequestObject;
use Payvision\SDK\Domain\Payments\Service\Builder\Composite\Refund\RequestBody as RequestBodyBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Request\Header as HeaderBuilder;
use Payvision\SDK\Domain\Service\Builder\Basic;

class Request extends Basic
{
    /**
     * @var RequestBodyBuilder
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
        $this->bodyBuilder = new RequestBodyBuilder();
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
     * @return RequestBodyBuilder
     */
    public function body(): RequestBodyBuilder
    {
        $this->isBodyBuilderTouched = true;
        return $this->bodyBuilder;
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
            $this->isBodyBuilderTouched ? $this->bodyBuilder->build() : null,
            $this->isHeaderBuilderTouched ? $this->headerBuilder->build() : null
        );
    }
}
