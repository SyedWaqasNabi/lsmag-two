<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use IteratorAggregate;
use ArrayIterator;

class ArrayOfBasketCalcLineRequest implements IteratorAggregate
{

    /**
     * @property BasketCalcLineRequest[] $BasketCalcLineRequest
     */
    protected $BasketCalcLineRequest = array(
        
    );

    /**
     * @param BasketCalcLineRequest[] $BasketCalcLineRequest
     * @return $this
     */
    public function setBasketCalcLineRequest($BasketCalcLineRequest)
    {
        $this->BasketCalcLineRequest = $BasketCalcLineRequest;
        return $this;
    }

    /**
     * @return BasketCalcLineRequest[]
     */
    public function getIterator()
    {
        return new ArrayIterator( $this->BasketCalcLineRequest );
    }

    /**
     * @return BasketCalcLineRequest[]
     */
    public function getBasketCalcLineRequest()
    {
        return $this->BasketCalcLineRequest;
    }


}

