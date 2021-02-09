<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Composite\Payment;

use Payvision\SDK\Domain\Payments\ValueObject\Payment\Response as ResponseObject;
use Payvision\SDK\Domain\Payments\Service\Builder\Composite\Payment\ResponseBody as ResponseBodyBuilder;
use Payvision\SDK\Domain\Payments\Service\Builder\Payment\ResponseHeader as ResponseHeaderBuilder;
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
     * @var ResponseHeaderBuilder
     */
    private $headerBuilder;

    /**
     * @var bool
     */
    private $isHeaderBuilderTouched = false;

    public function __construct()
    {
        $this->bodyBuilder = new ResponseBodyBuilder();
        $this->headerBuilder = new ResponseHeaderBuilder();
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
     * @return Response
     */
    public function setDescription(string $description): Response
    {
        return $this->set('description', $description);
    }

    /**
     * @return ResponseHeaderBuilder
     */
    public function header(): ResponseHeaderBuilder
    {
        $this->isHeaderBuilderTouched = true;
        return $this->headerBuilder;
    }

    /**
     * @param int $result
     * @return Response
     */
    public function setResult(int $result): Response
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
