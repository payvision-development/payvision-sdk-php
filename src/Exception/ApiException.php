<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Exception;

use Exception;

class ApiException extends Exception
{
    public const RESPONSE_CLASS_NOT_FOUND = 1100;
    public const CANNOT_BUILD_RESPONSE = 1101;
    public const INVALID_REQUEST_METHOD = 1102;
    public const RESPONSE_CLASS_NOT_SET = 1103;
    public const INVALID_RESPONSE = 1104;
}
