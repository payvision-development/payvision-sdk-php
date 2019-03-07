<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license proprietary
 */

namespace Payvision\SDK\Infrastructure;

use Payvision\SDK\Domain\IssuerRepository;
use Payvision\SDK\Domain\ValueObject\Issuer;
use Payvision\SDK\Exception\RepositoryException;

class XMLIssuerRepository extends XMLRepository implements IssuerRepository
{
    /**
     * @var Issuer[]
     */
    private $issuers;

    /**
     * @return Issuer[]
     * @throws RepositoryException
     */
    public function getAll(): array
    {
        if ($this->issuers !== null) {
            return $this->issuers;
        }

        $xml = $this->loadXML();

        foreach ($xml->xpath('//issuer') as $issuerNode) {
            $this->issuers[] = new Issuer(
                (int)$issuerNode->attributes()->id,
                (string)$issuerNode->description
            );
        }

        return $this->issuers;
    }
}
