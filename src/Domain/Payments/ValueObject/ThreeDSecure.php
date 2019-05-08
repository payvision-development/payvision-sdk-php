<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENSE.txt
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject;

class ThreeDSecure
{
    const ECI_INTERNET_TRANSACTION_SECURE_CODE = 0;
    const ECI_AUTHENTICATION_ATTEMPTED_SECURE_CODE = 1;
    const ECI_AUTHENTICATED_SECURE_CODE = 2;
    const ECI_AUTHENTICATED_VBV = 5;
    const ECI_AUTHENTICATION_ATTEMPTED_VBV = 6;
    const ECI_INTERNET_TRANSACTIONS_VBV = 7;

    /**
     * @var string
     */
    private $avv;

    /**
     * @var bool
     */
    private $checkEnrollment;

    /**
     * @var int
     */
    private $eci;

    /**
     * @var string
     */
    private $signedPares;

    /**
     * @var string
     */
    private $xid;

    /**
     * ThreeDSecure constructor.
     *
     * @param string $avv
     * @param bool $checkEnrollment
     * @param int $eci
     * @param string $signedPares
     * @param string $xid
     */
    public function __construct(
        string $avv = null,
        bool $checkEnrollment = null,
        int $eci = null,
        string $signedPares = null,
        string $xid = null
    ) {
        $this->avv = $avv;
        $this->checkEnrollment = $checkEnrollment;
        $this->eci = $eci;
        $this->signedPares = $signedPares;
        $this->xid = $xid;
    }

    /**
    * @return string|null
    */
    public function getAvv()
    {
        return $this->avv;
    }

    /**
    * @return bool|null
    */
    public function getCheckEnrollment()
    {
        return $this->checkEnrollment;
    }

    /**
    * @return int|null
    */
    public function getEci()
    {
        return $this->eci;
    }

    /**
    * @return string|null
    */
    public function getSignedPares()
    {
        return $this->signedPares;
    }

    /**
    * @return string|null
    */
    public function getXid()
    {
        return $this->xid;
    }
}
