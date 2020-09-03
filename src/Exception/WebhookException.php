<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Exception;

use Exception;

class WebhookException extends Exception
{
    public const UNKNOWN_PAYLOAD = 5100;
    public const UNEXPECTED_PAYLOAD = 5101;
    public const JWT_NOT_VALIDATED = 5102;
    public const VALIDATION_FAILED = 5103;
    public const MISSING_CHECKSUM = 5104;
}
