<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Loyalty\Entity;

use \Ls\Omni\Client\ResponseInterface;

class NotificationsGetByContactIdResponse implements ResponseInterface
{

    /**
     * @property ArrayOfNotification $NotificationsGetByContactIdResult
     */
    protected $NotificationsGetByContactIdResult = null;

    /**
     * @param ArrayOfNotification $NotificationsGetByContactIdResult
     * @return $this
     */
    public function setNotificationsGetByContactIdResult($NotificationsGetByContactIdResult)
    {
        $this->NotificationsGetByContactIdResult = $NotificationsGetByContactIdResult;
        return $this;
    }

    /**
     * @return ArrayOfNotification
     */
    public function getNotificationsGetByContactIdResult()
    {
        return $this->NotificationsGetByContactIdResult;
    }

    /**
     * @return ArrayOfNotification
     */
    public function getResult()
    {
        return $this->NotificationsGetByContactIdResult;
    }


}

