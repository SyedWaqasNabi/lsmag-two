<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Loyalty\Entity;

use Ls\Omni\Client\Loyalty\Entity\Enum\OrderQueueStatus;
use Ls\Omni\Exception\InvalidEnumException;
use Ls\Omni\Client\IRequest;

class OrderQueueUpdateStatus implements IRequest
{

    /**
     * @property string $orderId
     */
    protected $orderId = null;

    /**
     * @property OrderQueueStatus $status
     */
    protected $status = null;

    /**
     * @param string $orderId
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param OrderQueueStatus|string $status
     * @return $this
     * @throws InvalidEnumException
     */
    public function setStatus($status)
    {
        if ( OrderQueueStatus::isValid( $status) ) 
            $this->status = new OrderQueueStatus( $status );
        elseif ( OrderQueueStatus::isValidKey( $status) ) 
            $this->status = new OrderQueueStatus( constant( "OrderQueueStatus::$status" ) );
        else 
            throw new InvalidEnumException();
        return $this;
    }

    /**
     * @return OrderQueueStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


}
