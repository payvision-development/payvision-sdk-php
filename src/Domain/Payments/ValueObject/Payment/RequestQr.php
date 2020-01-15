<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject\Payment;

class RequestQr
{
    /**
     * @var bool
     */
    private $generate;

    /**
     * @var int
     */
    private $size;

    /**
     * RequestQr constructor.
     *
     * @param bool $generate
     * @param int $size
     */
    public function __construct(
        bool $generate,
        int $size = null
    ) {
        $this->generate = $generate;
        $this->size = $size;
    }

    /**
     * @return bool
     */
    public function getGenerate()
    {
        return $this->generate;
    }

    /**
     * @return int|null
     */
    public function getSize()
    {
        return $this->size;
    }
}
