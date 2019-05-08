<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENSE.txt
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Composite\Response;

use Payvision\SDK\Domain\Payments\ValueObject\Response\Redirect as RedirectObject;
use Payvision\SDK\Domain\Payments\Service\Builder\Response\Fields as FieldsBuilder;
use Payvision\SDK\Domain\Service\Builder\Basic;

class Redirect extends Basic
{
    /**
     * @var FieldsBuilder
     */
    private $fieldsBuilder;

    /**
     * @var bool
     */
    private $isFieldsBuilderTouched = false;

    public function __construct()
    {
        $this->fieldsBuilder = new FieldsBuilder();
    }

    public function build(): RedirectObject
    {
        return $this->buildAndReset();
    }

    public function fields(): FieldsBuilder
    {
        $this->isFieldsBuilderTouched = true;
        return $this->fieldsBuilder;
    }

    public function setMethod(string $method): self
    {
        return $this->set('method', $method);
    }

    public function setUrl(string $url): self
    {
        return $this->set('url', $url);
    }

    protected function buildObject(): RedirectObject
    {
        return new RedirectObject(
            $this->isFieldsBuilderTouched ? $this->fieldsBuilder->build() : null,
            $this->get('method'),
            $this->get('url')
        );
    }
}
