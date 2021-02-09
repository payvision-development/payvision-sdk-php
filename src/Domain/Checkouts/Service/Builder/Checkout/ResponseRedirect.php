<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Checkouts\Service\Builder\Checkout;

use Payvision\SDK\Domain\Checkouts\ValueObject\Checkout\ResponseRedirect as ResponseRedirectObject;
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
     * @return ResponseRedirect
     */
    public function setMethod(string $method): ResponseRedirect
    {
        return $this->set('method', $method);
    }

    /**
     * @param string $url
     * @return ResponseRedirect
     */
    public function setUrl(string $url): ResponseRedirect
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
