<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENSE.txt
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Response;

use Payvision\SDK\Domain\Payments\ValueObject\Response\Header as HeaderObject;
use Payvision\SDK\Domain\Service\Builder\Basic;
use DateTime;

class Header extends Basic
{
    public function build(): HeaderObject
    {
        return $this->buildAndReset();
    }

    public function setRequestCode(string $requestCode): self
    {
        return $this->set('requestCode', $requestCode);
    }

    public function setRequestTimestamp(DateTime $requestTimestamp): self
    {
        return $this->set('requestTimestamp', $requestTimestamp);
    }

    protected function buildObject(): HeaderObject
    {
        return new HeaderObject(
            $this->get('requestCode'),
            $this->get('requestTimestamp')
        );
    }
}
