<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Exception;

use Exception;

class ApiException extends Exception
{
    const RESPONSE_CLASS_NOT_FOUND = 1100;
    const CANNOT_BUILD_RESPONSE = 1101;
    const INVALID_REQUEST_METHOD = 1102;
    const RESPONSE_CLASS_NOT_SET = 1103;
    const INVALID_RESPONSE = 1104;
}
