<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Paymentlinks\Service\Builder\Link;

use Payvision\SDK\Domain\Paymentlinks\ValueObject\Link\ResponseRedirect as ResponseRedirectObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class ResponseRedirect extends Basic
{
    /**
     * @return ResponseRedirectObject
     */
    public function build(): ResponseRedirectObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param string $method
     * @return self
     */
    public function setMethod(string $method): self
    {
        return $this->set('method', $method);
    }

    /**
     * @param string $url
     * @return self
     */
    public function setUrl(string $url): self
    {
        return $this->set('url', $url);
    }

    /**
     * @return ResponseRedirectObject
     */
    protected function buildObject(): ResponseRedirectObject
    {
        return new ResponseRedirectObject(
            $this->get('method'),
            $this->get('url')
        );
    }
}
