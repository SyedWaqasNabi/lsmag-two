<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Loyalty\Entity;

use IteratorAggregate;
use ArrayIterator;

class ArrayOfProfile implements IteratorAggregate
{

    /**
     * @property Profile[] $Profile
     */
    protected $Profile = array(
        
    );

    /**
     * @param Profile[] $Profile
     * @return $this
     */
    public function setProfile($Profile)
    {
        $this->Profile = $Profile;
        return $this;
    }

    /**
     * @return Profile[]
     */
    public function getIterator()
    {
        return new ArrayIterator( $this->Profile );
    }

    /**
     * @return Profile[]
     */
    public function getProfile()
    {
        return $this->Profile;
    }


}

