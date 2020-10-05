<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Test\Unit\Infrastructure;

use Payvision\SDK\Exception\RepositoryException;
use Payvision\SDK\Infrastructure\XMLBrandRepository;
use PHPUnit\Framework\TestCase;

class XMLBrandRepositoryTest extends TestCase
{
    /**
     * @throws RepositoryException
     */
    public function testGetAllWithNonExistingFile()
    {
        $repository = new XMLBrandRepository('/path/to/non/existing/file.xml');
        $this->expectException(RepositoryException::class);
        $this->expectExceptionCode(RepositoryException::FILE_NOT_FOUND);
        $repository->getAll();
    }

    /**
     * @throws RepositoryException
     */
    public function testGetAllWithExistingFile()
    {
        $repository = $this->getRepository();
        $results = $repository->getAll();

        self::assertCount(5, $results);
        self::assertSame(9990, $results[2]->getBrandId());
        self::assertSame('Foo', $results[2]->getBrandName());
        self::assertTrue($results[2]->isASync());
        self::assertSame(9991, $results[3]->getBrandId());
        self::assertSame('Bar', $results[3]->getBrandName());
        self::assertFalse($results[3]->isASync());
        self::assertSame(9992, $results[4]->getBrandId());
        self::assertSame('Baz', $results[4]->getBrandName());
        self::assertTrue($results[4]->isASync());
    }

    /**
     * @throws RepositoryException
     */
    public function testGetAllForSpecificCategory()
    {
        $repository = $this->getRepository();
        $results = $repository->getAllForCategory(1);

        self::assertCount(2, $results);
        self::assertSame(1000, $results[0]->getBrandId());
        self::assertSame('FooCard', $results[0]->getBrandName());
        self::assertTrue($results[0]->isASync());
        self::assertSame(1001, $results[1]->getBrandId());
        self::assertSame('BarCard', $results[1]->getBrandName());
        self::assertFalse($results[1]->isASync());
    }

    /**
     * @return XMLBrandRepository
     */
    private function getRepository(): XMLBrandRepository
    {
        $repository = new XMLBrandRepository(__DIR__ . '/../../../etc/brands.xml');
        return $repository;
    }
}
