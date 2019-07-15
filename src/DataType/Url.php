<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\DataType;

use Payvision\SDK\Exception\DataTypeException;

class Url implements DataType
{
    /**
     * @var string|null
     */
    protected $url;

    public function __construct(string $url = null)
    {
        if ($url !== null && !\filter_var($url, \FILTER_VALIDATE_URL)) {
            throw new DataTypeException(
                'Invalid URL provided',
                DataTypeException::INVALID_URL
            );
        }

        $this->url = $url;
    }

    // phpcs:disable SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingReturnTypeHint

    /**
     * @return null|string
     */
    public function get()
    {
        return $this->url;
    }
    // phpcs:enable SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingReturnTypeHint
}
