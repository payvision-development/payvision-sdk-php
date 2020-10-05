<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Test\Unit\Infrastructure;

use Payvision\SDK\Exception\RepositoryException;
use Payvision\SDK\Infrastructure\XMLIssuerRepository;
use PHPUnit\Framework\TestCase;

class XMLIssuerRepositoryTest extends TestCase
{
    /**
     * @throws RepositoryException
     */
    public function testGetAllWithNonExistingFile()
    {
        $repository = new XMLIssuerRepository('/path/to/non/existing/file.xml');
        $this->expectException(RepositoryException::class);
        $this->expectExceptionCode(RepositoryException::FILE_NOT_FOUND);
        $repository->getAll();
    }

    /**
     * @throws RepositoryException
     */
    public function testGetAllWithExistingFile()
    {
        $repository = new XMLIssuerRepository(__DIR__ . '/../../../etc/brands.xml');
        $results = $repository->getAll();

        self::assertCount(2, $results);
        self::assertSame(10, $results[0]->getIssuerId());
        self::assertSame('Issuer #1', $results[0]->getDescription());
        self::assertSame(20, $results[1]->getIssuerId());
        self::assertSame('Issuer #2', $results[1]->getDescription());
    }
}
