<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Paymentlinks\Service\Builder\Link;

use Payvision\SDK\Domain\Paymentlinks\ValueObject\Link\Response as ResponseObject;
use Payvision\SDK\Domain\Paymentlinks\ValueObject\Link\ResponseBody;
use Payvision\SDK\Domain\Paymentlinks\ValueObject\BasicResponseHeader;
use Payvision\SDK\Domain\Service\Builder\Basic;

class Response extends Basic
{
    /**
     * @return ResponseObject
     */
    public function build(): ResponseObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param ResponseBody $body
     * @return Response
     */
    public function setBody(ResponseBody $body): Response
    {
        return $this->set('body', $body);
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
     * @param BasicResponseHeader $header
     * @return Response
     */
    public function setHeader(BasicResponseHeader $header): Response
    {
        return $this->set('header', $header);
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
            $this->get('body'),
            $this->get('description'),
            $this->get('header'),
            $this->get('result')
        );
    }
}
