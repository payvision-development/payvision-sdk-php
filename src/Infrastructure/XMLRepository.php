<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license proprietary
 */

namespace Payvision\SDK\Infrastructure;

use Payvision\SDK\Exception\RepositoryException;
use SimpleXMLElement;

abstract class XMLRepository
{
    /**
     * @var string
     */
    private $pathToXMLFile;

    /**
     * @var SimpleXMLElement
     */
    private $xml;

    public function __construct(string $pathToXMLFile)
    {
        $this->pathToXMLFile = $pathToXMLFile;
    }

    /**
     * @return SimpleXMLElement
     * @throws RepositoryException
     */
    protected function loadXML(): SimpleXMLElement
    {
        if ($this->xml !== null) {
            return $this->xml;
        }

        if (!\file_exists($this->pathToXMLFile)) {
            throw new RepositoryException(
                'XML file not found',
                RepositoryException::FILE_NOT_FOUND
            );
        }

        $this->xml = \simplexml_load_file($this->pathToXMLFile);

        return $this->xml;
    }
}
