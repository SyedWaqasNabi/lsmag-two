<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use Ls\Omni\Client\ResponseInterface;

class UserDeleteResponse implements ResponseInterface
{

    /**
     * @property boolean $UserDeleteResult
     */
    protected $UserDeleteResult = null;

    /**
     * @param boolean $UserDeleteResult
     * @return $this
     */
    public function setUserDeleteResult($UserDeleteResult)
    {
        $this->UserDeleteResult = $UserDeleteResult;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getUserDeleteResult()
    {
        return $this->UserDeleteResult;
    }

    /**
     * @return boolean
     */
    public function getResult()
    {
        return $this->UserDeleteResult;
    }


}

