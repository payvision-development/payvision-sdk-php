<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Paymentlinks\Service\Builder\Composite\Status;

use Payvision\SDK\Domain\Paymentlinks\ValueObject\Status\Response as ResponseObject;
use Payvision\SDK\Domain\Paymentlinks\Service\Builder\Composite\Link\ResponseBody as ResponseBodyBuilder;
use Payvision\SDK\Domain\Paymentlinks\Service\Builder\BasicResponseHeader as BasicResponseHeaderBuilder;
use Payvision\SDK\Domain\Service\Builder\Basic;

class Response extends Basic
{
    /**
     * @var ResponseBodyBuilder
     */
    private $bodyBuilder;

    /**
     * @var bool
     */
    private $isBodyBuilderTouched = false;

    /**
     * @var BasicResponseHeaderBuilder
     */
    private $headerBuilder;

    /**
     * @var bool
     */
    private $isHeaderBuilderTouched = false;

    public function __construct()
    {
        $this->bodyBuilder = new ResponseBodyBuilder();
        $this->headerBuilder = new BasicResponseHeaderBuilder();
    }

    /**
     * @return ResponseObject
     */
    public function build(): ResponseObject
    {
        return $this->buildAndReset();
    }

    /**
     * @return ResponseBodyBuilder
     */
    public function body(): ResponseBodyBuilder
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
     * @return BasicResponseHeaderBuilder
     */
    public function header(): BasicResponseHeaderBuilder
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
     * @return ResponseObject
     */
    protected function buildObject(): ResponseObject
    {
        return new ResponseObject(
            $this->isBodyBuilderTouched ? $this->bodyBuilder->build() : null,
            $this->get('description'),
            $this->isHeaderBuilderTouched ? $this->headerBuilder->build() : null,
            $this->get('result')
        );
    }
}
