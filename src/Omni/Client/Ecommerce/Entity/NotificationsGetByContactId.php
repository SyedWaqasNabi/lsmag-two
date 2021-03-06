<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use Ls\Omni\Client\RequestInterface;

class NotificationsGetByContactId implements RequestInterface
{

    /**
     * @property string $contactId
     */
    protected $contactId = null;

    /**
     * @property int $numberOfNotifications
     */
    protected $numberOfNotifications = null;

    /**
     * @param string $contactId
     * @return $this
     */
    public function setContactId($contactId)
    {
        $this->contactId = $contactId;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactId()
    {
        return $this->contactId;
    }

    /**
     * @param int $numberOfNotifications
     * @return $this
     */
    public function setNumberOfNotifications($numberOfNotifications)
    {
        $this->numberOfNotifications = $numberOfNotifications;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfNotifications()
    {
        return $this->numberOfNotifications;
    }


}

