<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENSE.txt
 */

namespace Payvision\SDK\Exception;

use Exception;

class BuilderException extends Exception
{
    const MISSING_PROPERTY = 2100;
    const MISSING_RESPONSE_PROPERTY = 2101;
}
