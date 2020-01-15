<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Payment;

use Payvision\SDK\Domain\Payments\ValueObject\Payment\ResponseQr as ResponseQrObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class ResponseQr extends Basic
{
    /**
     * @return ResponseQrObject
     */
    public function build(): ResponseQrObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param string $resource
     * @return self
     */
    public function setResource(string $resource): self
    {
        return $this->set('resource', $resource);
    }

    /**
     * @return ResponseQrObject
     */
    protected function buildObject(): ResponseQrObject
    {
        return new ResponseQrObject(
            $this->get('resource')
        );
    }
}
