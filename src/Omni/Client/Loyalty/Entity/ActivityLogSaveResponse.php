<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Loyalty\Entity;

use \Ls\Omni\Client\ResponseInterface;

class ActivityLogSaveResponse implements ResponseInterface
{

    /**
     * @property boolean $ActivityLogSaveResult
     */
    protected $ActivityLogSaveResult = null;

    /**
     * @param boolean $ActivityLogSaveResult
     * @return $this
     */
    public function setActivityLogSaveResult($ActivityLogSaveResult)
    {
        $this->ActivityLogSaveResult = $ActivityLogSaveResult;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getActivityLogSaveResult()
    {
        return $this->ActivityLogSaveResult;
    }

    /**
     * @return boolean
     */
    public function getResult()
    {
        return $this->ActivityLogSaveResult;
    }


}
