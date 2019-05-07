<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENSE.txt
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject;

class Wallet
{
    /**
     * @var string
     */
    private $accountIdentifier;

    /**
     * @var string
     */
    private $accountKey;

    /**
     * Wallet constructor.
     *
     * @param string $accountIdentifier
     * @param string $accountKey
     */
    public function __construct(
        string $accountIdentifier = null,
        string $accountKey = null
    ) {
        $this->accountIdentifier = $accountIdentifier;
        $this->accountKey = $accountKey;
    }

    /**
    * @return string|null
    */
    public function getAccountIdentifier()
    {
        return $this->accountIdentifier;
    }

    /**
    * @return string|null
    */
    public function getAccountKey()
    {
        return $this->accountKey;
    }
}
