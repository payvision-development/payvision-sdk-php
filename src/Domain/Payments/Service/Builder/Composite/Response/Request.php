<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENSE.txt
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Composite\Response;

use Payvision\SDK\Domain\Payments\ValueObject\Response\Request as RequestObject;
use Payvision\SDK\Domain\Payments\Service\Builder\Composite\Response\Body as BodyBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Response\Header as HeaderBuilder;
use Payvision\SDK\Domain\Service\Builder\Basic;

class Request extends Basic
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

    public function build(): RequestObject
    {
        return $this->buildAndReset();
    }

    public function body(): BodyBuilder
    {
        $this->isBodyBuilderTouched = true;
        return $this->bodyBuilder;
    }

    public function setDescription(string $description): self
    {
        return $this->set('description', $description);
    }

    public function header(): HeaderBuilder
    {
        $this->isHeaderBuilderTouched = true;
        return $this->headerBuilder;
    }

    public function setResult(int $result): self
    {
        return $this->set('result', $result);
    }

    protected function buildObject(): RequestObject
    {
        return new RequestObject(
            $this->isBodyBuilderTouched ? $this->bodyBuilder->build() : null,
            $this->get('description'),
            $this->isHeaderBuilderTouched ? $this->headerBuilder->build() : null,
            $this->get('result')
        );
    }
}
