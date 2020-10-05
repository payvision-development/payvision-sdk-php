<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject\Payment;

class RequestWallet
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
     * RequestWallet constructor.
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
