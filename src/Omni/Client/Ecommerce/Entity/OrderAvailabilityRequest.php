<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use Ls\Omni\Client\Ecommerce\Entity\Enum\SourceType;
use Ls\Omni\Exception\InvalidEnumException;

class OrderAvailabilityRequest extends Entity
{

    /**
     * @property ArrayOfOrderLineAvailability $OrderLineAvailabilityRequests
     */
    protected $OrderLineAvailabilityRequests = null;

    /**
     * @property string $CardId
     */
    protected $CardId = null;

    /**
     * @property SourceType $SourceType
     */
    protected $SourceType = null;

    /**
     * @property string $StoreId
     */
    protected $StoreId = null;

    /**
     * @param ArrayOfOrderLineAvailability $OrderLineAvailabilityRequests
     * @return $this
     */
    public function setOrderLineAvailabilityRequests($OrderLineAvailabilityRequests)
    {
        $this->OrderLineAvailabilityRequests = $OrderLineAvailabilityRequests;
        return $this;
    }

    /**
     * @return ArrayOfOrderLineAvailability
     */
    public function getOrderLineAvailabilityRequests()
    {
        return $this->OrderLineAvailabilityRequests;
    }

    /**
     * @param string $CardId
     * @return $this
     */
    public function setCardId($CardId)
    {
        $this->CardId = $CardId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardId()
    {
        return $this->CardId;
    }

    /**
     * @param SourceType|string $SourceType
     * @return $this
     * @throws InvalidEnumException
     */
    public function setSourceType($SourceType)
    {
        if ( ! $SourceType instanceof SourceType ) {
            if ( SourceType::isValid( $SourceType ) ) 
                $SourceType = new SourceType( $SourceType );
            elseif ( SourceType::isValidKey( $SourceType ) ) 
                $SourceType = new SourceType( constant( "SourceType::$SourceType" ) );
            elseif ( ! $SourceType instanceof SourceType )
                throw new InvalidEnumException();
        }
        $this->SourceType = $SourceType->getValue();
        
        return $this;
    }

    /**
     * @return SourceType
     */
    public function getSourceType()
    {
        return $this->SourceType;
    }

    /**
     * @param string $StoreId
     * @return $this
     */
    public function setStoreId($StoreId)
    {
        $this->StoreId = $StoreId;
        return $this;
    }

    /**
     * @return string
     */
    public function getStoreId()
    {
        return $this->StoreId;
    }


}

