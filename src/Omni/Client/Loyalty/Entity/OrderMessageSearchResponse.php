<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Loyalty\Entity;

use \Ls\Omni\Client\ResponseInterface;

class OrderMessageSearchResponse implements ResponseInterface
{

    /**
     * @property ArrayOfOrderMessage $OrderMessageSearchResult
     */
    protected $OrderMessageSearchResult = null;

    /**
     * @param ArrayOfOrderMessage $OrderMessageSearchResult
     * @return $this
     */
    public function setOrderMessageSearchResult($OrderMessageSearchResult)
    {
        $this->OrderMessageSearchResult = $OrderMessageSearchResult;
        return $this;
    }

    /**
     * @return ArrayOfOrderMessage
     */
    public function getOrderMessageSearchResult()
    {
        return $this->OrderMessageSearchResult;
    }

    /**
     * @return ArrayOfOrderMessage
     */
    public function getResult()
    {
        return $this->OrderMessageSearchResult;
    }


}

