<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Loyalty\Entity;

use \Ls\Omni\Client\ResponseInterface;

class ItemGetByIdResponse implements ResponseInterface
{

    /**
     * @property Item $ItemGetByIdResult
     */
    protected $ItemGetByIdResult = null;

    /**
     * @param Item $ItemGetByIdResult
     * @return $this
     */
    public function setItemGetByIdResult($ItemGetByIdResult)
    {
        $this->ItemGetByIdResult = $ItemGetByIdResult;
        return $this;
    }

    /**
     * @return Item
     */
    public function getItemGetByIdResult()
    {
        return $this->ItemGetByIdResult;
    }

    /**
     * @return Item
     */
    public function getResult()
    {
        return $this->ItemGetByIdResult;
    }


}

