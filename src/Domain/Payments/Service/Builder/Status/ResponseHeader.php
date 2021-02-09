<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Status;

use Payvision\SDK\Domain\Payments\ValueObject\Status\ResponseHeader as ResponseHeaderObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class ResponseHeader extends Basic
{
    /**
     * @return ResponseHeaderObject
     */
    public function build(): ResponseHeaderObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param \Payvision\SDK\DataType\DateTime $requestTimestamp
     * @return ResponseHeader
     */
    public function setRequestTimestamp(\Payvision\SDK\DataType\DateTime $requestTimestamp): ResponseHeader
    {
        return $this->set('requestTimestamp', $requestTimestamp);
    }

    /**
     * @param string $requestCode
     * @return ResponseHeader
     */
    public function setRequestCode(string $requestCode): ResponseHeader
    {
        return $this->set('requestCode', $requestCode);
    }

    /**
     * @return ResponseHeaderObject
     */
    protected function buildObject(): ResponseHeaderObject
    {
        return new ResponseHeaderObject(
            $this->get('requestTimestamp'),
            $this->get('requestCode')
        );
    }
}
