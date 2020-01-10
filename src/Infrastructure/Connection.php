<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Infrastructure;

use Payvision\SDK\Domain\Request;

interface Connection
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function execute(Request $request);

    public function executeAndReturnArray(Request $request): array;
}
