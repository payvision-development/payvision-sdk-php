<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\DataType;

use DateTime as BaseDateTime;

class DateTime implements DataType
{
    /**
     * @var BaseDateTime
     */
    private $value;

    public function __construct(string $value)
    {
        $this->value = new BaseDateTime($value);
    }

    // phpcs:disable SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingReturnTypeHint

    /**
     * @return string|null
     */
    public function get()
    {
        return $this->value->format('Y-m-d\TH:i:s\Z');
    }
    // phpcs:enable SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingReturnTypeHint
}
