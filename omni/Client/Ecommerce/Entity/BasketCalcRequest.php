<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use Ls\Omni\Client\Ecommerce\Entity\Enum\BasketCalcType;
use Ls\Omni\Client\Ecommerce\Entity\Enum\BasketCalcItemType;
use Ls\Omni\Exception\InvalidEnumException;

class BasketCalcRequest
{

    /**
     * @property ArrayOfBasketCalcLineRequest $BasketCalcLineRequests
     */
    protected $BasketCalcLineRequests = null;

    /**
     * @property BasketCalcType $CalcType
     */
    protected $CalcType = null;

    /**
     * @property string $CardId
     */
    protected $CardId = null;

    /**
     * @property string $ContactId
     */
    protected $ContactId = null;

    /**
     * @property string $Id
     */
    protected $Id = null;

    /**
     * @property BasketCalcItemType $ItemType
     */
    protected $ItemType = null;

    /**
     * @property Address $ShippingAddress
     */
    protected $ShippingAddress = null;

    /**
     * @property string $StoreId
     */
    protected $StoreId = null;

    /**
     * @param ArrayOfBasketCalcLineRequest $BasketCalcLineRequests
     * @return $this
     */
    public function setBasketCalcLineRequests($BasketCalcLineRequests)
    {
        $this->BasketCalcLineRequests = $BasketCalcLineRequests;
        return $this;
    }

    /**
     * @return ArrayOfBasketCalcLineRequest
     */
    public function getBasketCalcLineRequests()
    {
        return $this->BasketCalcLineRequests;
    }

    /**
     * @param BasketCalcType|string $CalcType
     * @return $this
     * @throws InvalidEnumException
     */
    public function setCalcType($CalcType)
    {
        if ( ! $CalcType instanceof BasketCalcType ) {
            if ( BasketCalcType::isValid( $CalcType ) ) 
                $CalcType = new BasketCalcType( $CalcType );
            elseif ( BasketCalcType::isValidKey( $CalcType ) ) 
                $CalcType = new BasketCalcType( constant( "BasketCalcType::$CalcType" ) );
            elseif ( ! $CalcType instanceof BasketCalcType )
                throw new InvalidEnumException();
        }
        $this->CalcType = $CalcType->getValue();

        return $this;
    }

    /**
     * @return BasketCalcType
     */
    public function getCalcType()
    {
        return $this->CalcType;
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
     * @param string $ContactId
     * @return $this
     */
    public function setContactId($ContactId)
    {
        $this->ContactId = $ContactId;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactId()
    {
        return $this->ContactId;
    }

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
     * @param BasketCalcItemType|string $ItemType
     * @return $this
     * @throws InvalidEnumException
     */
    public function setItemType($ItemType)
    {
        if ( ! $ItemType instanceof BasketCalcItemType ) {
            if ( BasketCalcItemType::isValid( $ItemType ) ) 
                $ItemType = new BasketCalcItemType( $ItemType );
            elseif ( BasketCalcItemType::isValidKey( $ItemType ) ) 
                $ItemType = new BasketCalcItemType( constant( "BasketCalcItemType::$ItemType" ) );
            elseif ( ! $ItemType instanceof BasketCalcItemType )
                throw new InvalidEnumException();
        }
        $this->ItemType = $ItemType->getValue();

        return $this;
    }

    /**
     * @return BasketCalcItemType
     */
    public function getItemType()
    {
        return $this->ItemType;
    }

    /**
     * @param Address $ShippingAddress
     * @return $this
     */
    public function setShippingAddress($ShippingAddress)
    {
        $this->ShippingAddress = $ShippingAddress;
        return $this;
    }

    /**
     * @return Address
     */
    public function getShippingAddress()
    {
        return $this->ShippingAddress;
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

