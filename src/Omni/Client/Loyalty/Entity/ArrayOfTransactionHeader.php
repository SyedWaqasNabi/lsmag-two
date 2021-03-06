<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Loyalty\Entity;

use IteratorAggregate;
use ArrayIterator;

class ArrayOfTransactionHeader implements IteratorAggregate
{

    /**
     * @property TransactionHeader[] $TransactionHeader
     */
    protected $TransactionHeader = array(
        
    );

    /**
     * @param TransactionHeader[] $TransactionHeader
     * @return $this
     */
    public function setTransactionHeader($TransactionHeader)
    {
        $this->TransactionHeader = $TransactionHeader;
        return $this;
    }

    /**
     * @return TransactionHeader[]
     */
    public function getIterator()
    {
        return new ArrayIterator( $this->TransactionHeader );
    }

    /**
     * @return TransactionHeader[]
     */
    public function getTransactionHeader()
    {
        return $this->TransactionHeader;
    }


}

