<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Exception;

use Exception;

class WebhookException extends Exception
{
    const UNKNOWN_PAYLOAD = 5100;
    const UNEXPECTED_PAYLOAD = 5101;
    const JWT_NOT_VALIDATED = 5102;
    const VALIDATION_FAILED = 5103;
    const MISSING_CHECKSUM = 5104;
}
