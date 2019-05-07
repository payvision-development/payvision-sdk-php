<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENSE.txt
 */

namespace Payvision\SDK\Domain;

use Payvision\SDK\Exception\RepositoryException;

interface BrandRepository
{
    /**
     * @return Brand[]
     * @throws RepositoryException
     */
    public function getAll(): array;
}
