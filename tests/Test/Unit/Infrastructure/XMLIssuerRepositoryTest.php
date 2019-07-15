<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
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
     * @return null
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
     * @return null
     */
    public function testGetAllWithExistingFile()
    {
        $repository = new XMLIssuerRepository(__DIR__ . '/../../../etc/brands.xml');
        $results = $repository->getAll();

        $this->assertCount(2, $results);
        $this->assertSame(10, $results[0]->getIssuerId());
        $this->assertSame('Issuer #1', $results[0]->getDescription());
        $this->assertSame(20, $results[1]->getIssuerId());
        $this->assertSame('Issuer #2', $results[1]->getDescription());
    }
}
