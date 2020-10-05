<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject\Payment;

class RequestThreeDSecure
{
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
    private $xid;

    /**
     * RequestThreeDSecure constructor.
     *
     * @param string $avv
     * @param bool $checkEnrollment
     * @param int $eci
     * @param string $xid
     */
    public function __construct(
        string $avv = null,
        bool $checkEnrollment = null,
        int $eci = null,
        string $xid = null
    ) {
        $this->avv = $avv;
        $this->checkEnrollment = $checkEnrollment;
        $this->eci = $eci;
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
    public function getXid()
    {
        return $this->xid;
    }
}
