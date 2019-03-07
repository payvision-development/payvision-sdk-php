<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Composite\Request;

use Payvision\SDK\Domain\Payments\ValueObject\Request\Object as ObjectObject;
use Payvision\SDK\Domain\Payments\Service\Builder\Payment\Header as HeaderBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Composite\Payment\Body as BodyBuilder;
use Payvision\SDK\Domain\Service\Builder\Basic;

class Object extends Basic
{
    /**
     * @var HeaderBuilder
     */
    private $headerBuilder;

    /**
     * @var bool
     */
    private $isHeaderBuilderTouched = false;

    /**
     * @var BodyBuilder
     */
    private $bodyBuilder;

    /**
     * @var bool
     */
    private $isBodyBuilderTouched = false;

    public function __construct()
    {
        $this->headerBuilder = new HeaderBuilder();
        $this->bodyBuilder = new BodyBuilder();
    }

    public function build(): ObjectObject
    {
        return $this->buildAndReset();
    }

    public function header(): HeaderBuilder
    {
        $this->isHeaderBuilderTouched = true;
        return $this->headerBuilder;
    }

    public function body(): BodyBuilder
    {
        $this->isBodyBuilderTouched = true;
        return $this->bodyBuilder;
    }

    public function setAction(string $action): self
    {
        return $this->set('action', $action);
    }

    protected function buildObject(): ObjectObject
    {
        return new ObjectObject(
            $this->isHeaderBuilderTouched ? $this->headerBuilder->build() : null,
            $this->isBodyBuilderTouched ? $this->bodyBuilder->build() : null,
            $this->get('action')
        );
    }
}
