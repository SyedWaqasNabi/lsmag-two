<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Loyalty\Entity;

use IteratorAggregate;
use ArrayIterator;

class ArrayOfPublishedOffer implements IteratorAggregate
{

    /**
     * @property PublishedOffer[] $PublishedOffer
     */
    protected $PublishedOffer = array(
        
    );

    /**
     * @param PublishedOffer[] $PublishedOffer
     * @return $this
     */
    public function setPublishedOffer($PublishedOffer)
    {
        $this->PublishedOffer = $PublishedOffer;
        return $this;
    }

    /**
     * @return PublishedOffer[]
     */
    public function getIterator()
    {
        return new ArrayIterator( $this->PublishedOffer );
    }

    /**
     * @return PublishedOffer[]
     */
    public function getPublishedOffer()
    {
        return $this->PublishedOffer;
    }


}

