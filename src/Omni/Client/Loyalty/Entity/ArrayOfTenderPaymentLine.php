<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Loyalty\Entity;

use IteratorAggregate;
use ArrayIterator;

class ArrayOfTenderPaymentLine implements IteratorAggregate
{

    /**
     * @property TenderPaymentLine[] $TenderPaymentLine
     */
    protected $TenderPaymentLine = array(
        
    );

    /**
     * @param TenderPaymentLine[] $TenderPaymentLine
     * @return $this
     */
    public function setTenderPaymentLine($TenderPaymentLine)
    {
        $this->TenderPaymentLine = $TenderPaymentLine;
        return $this;
    }

    /**
     * @return TenderPaymentLine[]
     */
    public function getIterator()
    {
        return new ArrayIterator( $this->TenderPaymentLine );
    }

    /**
     * @return TenderPaymentLine[]
     */
    public function getTenderPaymentLine()
    {
        return $this->TenderPaymentLine;
    }


}

