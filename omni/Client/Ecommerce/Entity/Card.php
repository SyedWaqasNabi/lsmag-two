<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use Ls\Omni\Client\Ecommerce\Entity\Enum\CardStatus;
use Ls\Omni\Exception\InvalidEnumException;

class Card
{

    /**
     * @property string $Id
     */
    protected $Id = null;

    /**
     * @property int $Status
     */
    protected $Status = null;

    /**
     * @property string $BlockedBy
     */
    protected $BlockedBy = null;

    /**
     * @property string $BlockedReason
     */
    protected $BlockedReason = null;

    /**
     * @property CardStatus $CardStatus
     */
    protected $CardStatus = null;

    /**
     * @property string $DateBlocked
     */
    protected $DateBlocked = null;

    /**
     * @property boolean $LinkedToAccount
     */
    protected $LinkedToAccount = null;

    /**
     * @param string $Id
     * @return $this
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param int $Status
     * @return $this
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param string $BlockedBy
     * @return $this
     */
    public function setBlockedBy($BlockedBy)
    {
        $this->BlockedBy = $BlockedBy;
        return $this;
    }

    /**
     * @return string
     */
    public function getBlockedBy()
    {
        return $this->BlockedBy;
    }

    /**
     * @param string $BlockedReason
     * @return $this
     */
    public function setBlockedReason($BlockedReason)
    {
        $this->BlockedReason = $BlockedReason;
        return $this;
    }

    /**
     * @return string
     */
    public function getBlockedReason()
    {
        return $this->BlockedReason;
    }

    /**
     * @param CardStatus|string $CardStatus
     * @return $this
     * @throws InvalidEnumException
     */
    public function setCardStatus($CardStatus)
    {
        if ( ! $CardStatus instanceof CardStatus ) {
            if ( CardStatus::isValid( $CardStatus ) ) 
                $CardStatus = new CardStatus( $CardStatus );
            elseif ( CardStatus::isValidKey( $CardStatus ) ) 
                $CardStatus = new CardStatus( constant( "CardStatus::$CardStatus" ) );
            elseif ( ! $CardStatus instanceof CardStatus )
                throw new InvalidEnumException();
        }
        $this->CardStatus = $CardStatus->getValue();

        return $this;
    }

    /**
     * @return CardStatus
     */
    public function getCardStatus()
    {
        return $this->CardStatus;
    }

    /**
     * @param string $DateBlocked
     * @return $this
     */
    public function setDateBlocked($DateBlocked)
    {
        $this->DateBlocked = $DateBlocked;
        return $this;
    }

    /**
     * @return string
     */
    public function getDateBlocked()
    {
        return $this->DateBlocked;
    }

    /**
     * @param boolean $LinkedToAccount
     * @return $this
     */
    public function setLinkedToAccount($LinkedToAccount)
    {
        $this->LinkedToAccount = $LinkedToAccount;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getLinkedToAccount()
    {
        return $this->LinkedToAccount;
    }


}

