<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Domain;

use Payvision\SDK\Domain\ValueObject\Issuer;
use Payvision\SDK\Exception\RepositoryException;

interface IssuerRepository
{
    /**
     * @return Issuer[]
     * @throws RepositoryException
     */
    public function getAll(): array;
}
