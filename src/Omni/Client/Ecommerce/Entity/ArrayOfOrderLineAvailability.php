<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use IteratorAggregate;
use ArrayIterator;

class ArrayOfOrderLineAvailability implements IteratorAggregate
{

    /**
     * @property OrderLineAvailability[] $OrderLineAvailability
     */
    protected $OrderLineAvailability = array(
        
    );

    /**
     * @param OrderLineAvailability[] $OrderLineAvailability
     * @return $this
     */
    public function setOrderLineAvailability($OrderLineAvailability)
    {
        $this->OrderLineAvailability = $OrderLineAvailability;
        return $this;
    }

    /**
     * @return OrderLineAvailability[]
     */
    public function getIterator()
    {
        return new ArrayIterator( $this->OrderLineAvailability );
    }

    /**
     * @return OrderLineAvailability[]
     */
    public function getOrderLineAvailability()
    {
        return $this->OrderLineAvailability;
    }


}

