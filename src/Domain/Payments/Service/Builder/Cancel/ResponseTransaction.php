<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Cancel;

use Payvision\SDK\Domain\Payments\ValueObject\Cancel\ResponseTransaction as ResponseTransactionObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class ResponseTransaction extends Basic
{
    /**
     * @return ResponseTransactionObject
     */
    public function build(): ResponseTransactionObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param string $action
     * @return self
     */
    public function setAction(string $action): self
    {
        return $this->set('action', $action);
    }

    /**
     * @param string $id
     * @return self
     */
    public function setId(string $id): self
    {
        return $this->set('id', $id);
    }

    /**
     * @param string $parentId
     * @return self
     */
    public function setParentId(string $parentId): self
    {
        return $this->set('parentId', $parentId);
    }

    /**
     * @param string $trackingCode
     * @return self
     */
    public function setTrackingCode(string $trackingCode): self
    {
        return $this->set('trackingCode', $trackingCode);
    }

    /**
     * @param int $brandId
     * @return self
     */
    public function setBrandId(int $brandId): self
    {
        return $this->set('brandId', $brandId);
    }

    /**
     * @param string $descriptor
     * @return self
     */
    public function setDescriptor(string $descriptor): self
    {
        return $this->set('descriptor', $descriptor);
    }

    /**
     * @return ResponseTransactionObject
     */
    protected function buildObject(): ResponseTransactionObject
    {
        return new ResponseTransactionObject(
            $this->get('action'),
            $this->get('id'),
            $this->get('parentId'),
            $this->get('trackingCode'),
            $this->get('brandId'),
            $this->get('descriptor')
        );
    }
}
