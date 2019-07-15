<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
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
     * @return null
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
     * @return null
     */
    public function testGetAllWithExistingFile()
    {
        $repository = $this->getRepository();
        $results = $repository->getAll();

        $this->assertCount(5, $results);
        $this->assertSame(9990, $results[2]->getBrandId());
        $this->assertSame('Foo', $results[2]->getBrandName());
        $this->assertTrue($results[2]->isASync());
        $this->assertSame(9991, $results[3]->getBrandId());
        $this->assertSame('Bar', $results[3]->getBrandName());
        $this->assertFalse($results[3]->isASync());
        $this->assertSame(9992, $results[4]->getBrandId());
        $this->assertSame('Baz', $results[4]->getBrandName());
        $this->assertTrue($results[4]->isASync());
    }

    /**
     * @throws RepositoryException
     * @return null
     */
    public function testGetAllForSpecificCategory()
    {
        $repository = $this->getRepository();
        $results = $repository->getAllForCategory(1);

        $this->assertCount(2, $results);
        $this->assertSame(1000, $results[0]->getBrandId());
        $this->assertSame('FooCard', $results[0]->getBrandName());
        $this->assertTrue($results[0]->isASync());
        $this->assertSame(1001, $results[1]->getBrandId());
        $this->assertSame('BarCard', $results[1]->getBrandName());
        $this->assertFalse($results[1]->isASync());
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
