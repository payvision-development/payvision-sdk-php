<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Exception;

use Exception;

class DataTypeException extends Exception
{
    public const UNKNOWN_COUNTRY = 3100;
    public const UNKNOWN_CURRENCY = 3101;
    public const UNKNOWN_LANGUAGE = 3102;
    public const AMOUNT_CANNOT_BE_NEGATIVE = 3103;
    public const STRING_TOO_LONG = 3104;
    public const VALUE_NOT_ALLOWED = 3105;
    public const INVALID_URL = 3106;
}
