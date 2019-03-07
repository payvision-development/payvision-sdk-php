<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Response;

use Payvision\SDK\Domain\Payments\ValueObject\Response\Fields as FieldsObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class Fields extends Basic
{
    public function build(): FieldsObject
    {
        return $this->buildAndReset();
    }

    protected function buildObject(): FieldsObject
    {
        return new FieldsObject(
        );
    }
}
