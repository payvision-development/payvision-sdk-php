<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Composite\Response;

use Payvision\SDK\Domain\Payments\ValueObject\Response\Error as ErrorObject;
use Payvision\SDK\Domain\Payments\Service\Builder\Composite\Response\ErrorBody as ErrorBodyBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Response\Header as HeaderBuilder;
use Payvision\SDK\Domain\Service\Builder\Basic;

class Error extends Basic
{
    /**
     * @var ErrorBodyBuilder
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
        $this->bodyBuilder = new ErrorBodyBuilder();
        $this->headerBuilder = new HeaderBuilder();
    }

    public function build(): ErrorObject
    {
        return $this->buildAndReset();
    }

    public function body(): ErrorBodyBuilder
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

    protected function buildObject(): ErrorObject
    {
        return new ErrorObject(
            $this->isBodyBuilderTouched ? $this->bodyBuilder->build() : null,
            $this->get('description'),
            $this->isHeaderBuilderTouched ? $this->headerBuilder->build() : null,
            $this->get('result')
        );
    }
}
