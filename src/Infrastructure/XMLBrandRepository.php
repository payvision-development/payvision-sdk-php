<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENSE.txt
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
     * @return Brand[]
     * @throws RepositoryException
     */
    public function getAll(): array
    {
        if ($this->brands !== null) {
            return $this->brands;
        }

        $xml = $this->loadXML();

        foreach ($xml->xpath('//brands/category/brand') as $brandNode) {
            $this->brands[] = new Brand(
                (int)$brandNode->attributes()->id,
                (string)$brandNode->name,
                (string)$brandNode->async === 'true'
            );
        }

        return $this->brands;
    }
}
