<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use IteratorAggregate;
use ArrayIterator;

class ArrayOfInventoryResponse implements IteratorAggregate
{

    /**
     * @property InventoryResponse[] $InventoryResponse
     */
    protected $InventoryResponse = array(
        
    );

    /**
     * @param InventoryResponse[] $InventoryResponse
     * @return $this
     */
    public function setInventoryResponse($InventoryResponse)
    {
        $this->InventoryResponse = $InventoryResponse;
        return $this;
    }

    /**
     * @return InventoryResponse[]
     */
    public function getIterator()
    {
        return new ArrayIterator( $this->InventoryResponse );
    }

    /**
     * @return InventoryResponse[]
     */
    public function getInventoryResponse()
    {
        return $this->InventoryResponse;
    }


}

