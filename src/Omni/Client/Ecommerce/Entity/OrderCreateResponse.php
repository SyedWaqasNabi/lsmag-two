<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use Ls\Omni\Client\ResponseInterface;

class OrderCreateResponse implements ResponseInterface
{

    /**
     * @property Order $OrderCreateResult
     */
    protected $OrderCreateResult = null;

    /**
     * @param Order $OrderCreateResult
     * @return $this
     */
    public function setOrderCreateResult($OrderCreateResult)
    {
        $this->OrderCreateResult = $OrderCreateResult;
        return $this;
    }

    /**
     * @return Order
     */
    public function getOrderCreateResult()
    {
        return $this->OrderCreateResult;
    }

    /**
     * @return Order
     */
    public function getResult()
    {
        return $this->OrderCreateResult;
    }


}

