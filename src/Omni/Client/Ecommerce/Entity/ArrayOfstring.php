<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use IteratorAggregate;
use ArrayIterator;

class ArrayOfstring implements IteratorAggregate
{

    /**
     * @property string[] $string
     */
    protected $string = array(
        
    );

    /**
     * @param string[] $string
     * @return $this
     */
    public function setString($string)
    {
        $this->string = $string;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getIterator()
    {
        return new ArrayIterator( $this->string );
    }

    /**
     * @return string[]
     */
    public function getString()
    {
        return $this->string;
    }


}

