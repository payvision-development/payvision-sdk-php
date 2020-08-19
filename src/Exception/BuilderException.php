<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Exception;

use Exception;

class BuilderException extends Exception
{
    public const MISSING_PROPERTY = 2100;
    public const MISSING_RESPONSE_PROPERTY = 2101;
    public const MISSING_PARAM_IN_DOCBLOCK = 2102;
    public const ARRAY_NOT_DEFINED_IN_DOCBLOCK = 2103;
    public const CLASS_DOES_NOT_EXIST = 2104;
}
