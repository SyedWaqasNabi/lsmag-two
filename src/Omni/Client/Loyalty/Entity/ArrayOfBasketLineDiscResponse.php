<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Loyalty\Entity;

use IteratorAggregate;
use ArrayIterator;

class ArrayOfBasketLineDiscResponse implements IteratorAggregate
{

    /**
     * @property BasketLineDiscResponse[] $BasketLineDiscResponse
     */
    protected $BasketLineDiscResponse = array(
        
    );

    /**
     * @param BasketLineDiscResponse[] $BasketLineDiscResponse
     * @return $this
     */
    public function setBasketLineDiscResponse($BasketLineDiscResponse)
    {
        $this->BasketLineDiscResponse = $BasketLineDiscResponse;
        return $this;
    }

    /**
     * @return BasketLineDiscResponse[]
     */
    public function getIterator()
    {
        return new ArrayIterator( $this->BasketLineDiscResponse );
    }

    /**
     * @return BasketLineDiscResponse[]
     */
    public function getBasketLineDiscResponse()
    {
        return $this->BasketLineDiscResponse;
    }


}

