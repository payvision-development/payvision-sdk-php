<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Status;

use Payvision\SDK\Domain\Payments\ValueObject\Status\Response as ResponseObject;
use Payvision\SDK\Domain\Payments\ValueObject\Status\ResponseBody;
use Payvision\SDK\Domain\Payments\ValueObject\Status\ResponseHeader;
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
     * @return self
     */
    public function setBody(ResponseBody $body): self
    {
        return $this->set('body', $body);
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
     * @param ResponseHeader $header
     * @return self
     */
    public function setHeader(ResponseHeader $header): self
    {
        return $this->set('header', $header);
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
            $this->get('body'),
            $this->get('description'),
            $this->get('header'),
            $this->get('result')
        );
    }
}
