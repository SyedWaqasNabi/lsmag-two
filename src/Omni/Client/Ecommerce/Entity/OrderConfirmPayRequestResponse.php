<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use Ls\Omni\Client\ResponseInterface;

class OrderConfirmPayRequestResponse implements ResponseInterface
{

    /**
     * @property boolean $OrderConfirmPayRequestResult
     */
    protected $OrderConfirmPayRequestResult = null;

    /**
     * @param boolean $OrderConfirmPayRequestResult
     * @return $this
     */
    public function setOrderConfirmPayRequestResult($OrderConfirmPayRequestResult)
    {
        $this->OrderConfirmPayRequestResult = $OrderConfirmPayRequestResult;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getOrderConfirmPayRequestResult()
    {
        return $this->OrderConfirmPayRequestResult;
    }

    /**
     * @return boolean
     */
    public function getResult()
    {
        return $this->OrderConfirmPayRequestResult;
    }


}

