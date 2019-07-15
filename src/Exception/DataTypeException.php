<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Exception;

use Exception;

class DataTypeException extends Exception
{
    const UNKNOWN_COUNTRY = 3100;
    const UNKNOWN_CURRENCY = 3101;
    const UNKNOWN_LANGUAGE = 3102;
    const AMOUNT_CANNOT_BE_NEGATIVE = 3103;
    const STRING_TOO_LONG = 3104;
    const VALUE_NOT_ALLOWED = 3105;
    const INVALID_URL = 3106;
}
