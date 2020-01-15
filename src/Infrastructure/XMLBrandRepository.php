<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Infrastructure;

use Payvision\SDK\Domain\BrandRepository;
use Payvision\SDK\Domain\ValueObject\Brand;
use Payvision\SDK\Exception\RepositoryException;

class XMLBrandRepository extends XMLRepository implements BrandRepository
{
    /**
     * @var Brand[]
     */
    private $brands;

    /**
     * @var array
     */
    private $brandsByCategoryId = [];

    /**
     * @return Brand[]
     * @throws RepositoryException
     */
    public function getAll(): array
    {
        if ($this->brands === null) {
            $this->brands = $this->getByXPath('//brands/category/brand');
        }

        return $this->brands;
    }

    /**
     * @return Brand[]
     * @throws RepositoryException
     */
    public function getAllForCategory(int $categoryId): array
    {
        if (!\array_key_exists($categoryId, $this->brandsByCategoryId)) {
            $this->brandsByCategoryId[$categoryId] = $this->getByXPath(
                '//brands/category[@id="' . $categoryId . '"]/brand'
            );
        }

        return $this->brandsByCategoryId[$categoryId];
    }

    private function getByXPath(string $xpath): array
    {
        $brands = [];
        $xml = $this->loadXML();

        foreach ($xml->xpath($xpath) as $brandNode) {
            $brands[] = new Brand(
                (int)$brandNode->attributes()->id,
                (string)$brandNode->name,
                (string)$brandNode->async === 'true'
            );
        }

        return $brands;
    }
}
