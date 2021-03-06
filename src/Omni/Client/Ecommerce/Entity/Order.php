<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use Ls\Omni\Client\Ecommerce\Entity\Enum\OrderStatus;
use Ls\Omni\Client\Ecommerce\Entity\Enum\PaymentStatus;
use Ls\Omni\Client\Ecommerce\Entity\Enum\ShippingStatus;
use Ls\Omni\Client\Ecommerce\Entity\Enum\SourceType;
use Ls\Omni\Exception\InvalidEnumException;

class Order extends Entity
{

    /**
     * @property ArrayOfOrderDiscountLine $OrderDiscountLines
     */
    protected $OrderDiscountLines = null;

    /**
     * @property ArrayOfOrderLine $OrderLines
     */
    protected $OrderLines = null;

    /**
     * @property ArrayOfOrderPayment $OrderPayments
     */
    protected $OrderPayments = null;

    /**
     * @property boolean $AnonymousOrder
     */
    protected $AnonymousOrder = null;

    /**
     * @property string $CardId
     */
    protected $CardId = null;

    /**
     * @property boolean $ClickAndCollectOrder
     */
    protected $ClickAndCollectOrder = null;

    /**
     * @property string $CollectLocation
     */
    protected $CollectLocation = null;

    /**
     * @property Address $ContactAddress
     */
    protected $ContactAddress = null;

    /**
     * @property string $ContactId
     */
    protected $ContactId = null;

    /**
     * @property string $ContactName
     */
    protected $ContactName = null;

    /**
     * @property string $DayPhoneNumber
     */
    protected $DayPhoneNumber = null;

    /**
     * @property string $DocumentId
     */
    protected $DocumentId = null;

    /**
     * @property string $DocumentRegTime
     */
    protected $DocumentRegTime = null;

    /**
     * @property string $Email
     */
    protected $Email = null;

    /**
     * @property int $LineItemCount
     */
    protected $LineItemCount = null;

    /**
     * @property string $MobileNumber
     */
    protected $MobileNumber = null;

    /**
     * @property OrderStatus $OrderStatus
     */
    protected $OrderStatus = null;

    /**
     * @property PaymentStatus $PaymentStatus
     */
    protected $PaymentStatus = null;

    /**
     * @property string $PhoneNumber
     */
    protected $PhoneNumber = null;

    /**
     * @property float $PointAmount
     */
    protected $PointAmount = null;

    /**
     * @property float $PointBalance
     */
    protected $PointBalance = null;

    /**
     * @property float $PointCashAmountNeeded
     */
    protected $PointCashAmountNeeded = null;

    /**
     * @property float $PointsRewarded
     */
    protected $PointsRewarded = null;

    /**
     * @property float $PointsUsedInOrder
     */
    protected $PointsUsedInOrder = null;

    /**
     * @property boolean $Posted
     */
    protected $Posted = null;

    /**
     * @property string $ReceiptNo
     */
    protected $ReceiptNo = null;

    /**
     * @property boolean $ShipClickAndCollect
     */
    protected $ShipClickAndCollect = null;

    /**
     * @property Address $ShipToAddress
     */
    protected $ShipToAddress = null;

    /**
     * @property string $ShipToEmail
     */
    protected $ShipToEmail = null;

    /**
     * @property string $ShipToName
     */
    protected $ShipToName = null;

    /**
     * @property string $ShipToPhoneNumber
     */
    protected $ShipToPhoneNumber = null;

    /**
     * @property string $ShippingAgentCode
     */
    protected $ShippingAgentCode = null;

    /**
     * @property string $ShippingAgentServiceCode
     */
    protected $ShippingAgentServiceCode = null;

    /**
     * @property ShippingStatus $ShippingStatus
     */
    protected $ShippingStatus = null;

    /**
     * @property SourceType $SourceType
     */
    protected $SourceType = null;

    /**
     * @property string $StoreId
     */
    protected $StoreId = null;

    /**
     * @property float $TotalAmount
     */
    protected $TotalAmount = null;

    /**
     * @property float $TotalDiscount
     */
    protected $TotalDiscount = null;

    /**
     * @property float $TotalNetAmount
     */
    protected $TotalNetAmount = null;

    /**
     * @param ArrayOfOrderDiscountLine $OrderDiscountLines
     * @return $this
     */
    public function setOrderDiscountLines($OrderDiscountLines)
    {
        $this->OrderDiscountLines = $OrderDiscountLines;
        return $this;
    }

    /**
     * @return ArrayOfOrderDiscountLine
     */
    public function getOrderDiscountLines()
    {
        return $this->OrderDiscountLines;
    }

    /**
     * @param ArrayOfOrderLine $OrderLines
     * @return $this
     */
    public function setOrderLines($OrderLines)
    {
        $this->OrderLines = $OrderLines;
        return $this;
    }

    /**
     * @return ArrayOfOrderLine
     */
    public function getOrderLines()
    {
        return $this->OrderLines;
    }

    /**
     * @param ArrayOfOrderPayment $OrderPayments
     * @return $this
     */
    public function setOrderPayments($OrderPayments)
    {
        $this->OrderPayments = $OrderPayments;
        return $this;
    }

    /**
     * @return ArrayOfOrderPayment
     */
    public function getOrderPayments()
    {
        return $this->OrderPayments;
    }

    /**
     * @param boolean $AnonymousOrder
     * @return $this
     */
    public function setAnonymousOrder($AnonymousOrder)
    {
        $this->AnonymousOrder = $AnonymousOrder;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAnonymousOrder()
    {
        return $this->AnonymousOrder;
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
     * @param boolean $ClickAndCollectOrder
     * @return $this
     */
    public function setClickAndCollectOrder($ClickAndCollectOrder)
    {
        $this->ClickAndCollectOrder = $ClickAndCollectOrder;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getClickAndCollectOrder()
    {
        return $this->ClickAndCollectOrder;
    }

    /**
     * @param string $CollectLocation
     * @return $this
     */
    public function setCollectLocation($CollectLocation)
    {
        $this->CollectLocation = $CollectLocation;
        return $this;
    }

    /**
     * @return string
     */
    public function getCollectLocation()
    {
        return $this->CollectLocation;
    }

    /**
     * @param Address $ContactAddress
     * @return $this
     */
    public function setContactAddress($ContactAddress)
    {
        $this->ContactAddress = $ContactAddress;
        return $this;
    }

    /**
     * @return Address
     */
    public function getContactAddress()
    {
        return $this->ContactAddress;
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
     * @param string $ContactName
     * @return $this
     */
    public function setContactName($ContactName)
    {
        $this->ContactName = $ContactName;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactName()
    {
        return $this->ContactName;
    }

    /**
     * @param string $DayPhoneNumber
     * @return $this
     */
    public function setDayPhoneNumber($DayPhoneNumber)
    {
        $this->DayPhoneNumber = $DayPhoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getDayPhoneNumber()
    {
        return $this->DayPhoneNumber;
    }

    /**
     * @param string $DocumentId
     * @return $this
     */
    public function setDocumentId($DocumentId)
    {
        $this->DocumentId = $DocumentId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDocumentId()
    {
        return $this->DocumentId;
    }

    /**
     * @param string $DocumentRegTime
     * @return $this
     */
    public function setDocumentRegTime($DocumentRegTime)
    {
        $this->DocumentRegTime = $DocumentRegTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getDocumentRegTime()
    {
        return $this->DocumentRegTime;
    }

    /**
     * @param string $Email
     * @return $this
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param int $LineItemCount
     * @return $this
     */
    public function setLineItemCount($LineItemCount)
    {
        $this->LineItemCount = $LineItemCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getLineItemCount()
    {
        return $this->LineItemCount;
    }

    /**
     * @param string $MobileNumber
     * @return $this
     */
    public function setMobileNumber($MobileNumber)
    {
        $this->MobileNumber = $MobileNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getMobileNumber()
    {
        return $this->MobileNumber;
    }

    /**
     * @param OrderStatus|string $OrderStatus
     * @return $this
     * @throws InvalidEnumException
     */
    public function setOrderStatus($OrderStatus)
    {
        if ( ! $OrderStatus instanceof OrderStatus ) {
            if ( OrderStatus::isValid( $OrderStatus ) ) 
                $OrderStatus = new OrderStatus( $OrderStatus );
            elseif ( OrderStatus::isValidKey( $OrderStatus ) ) 
                $OrderStatus = new OrderStatus( constant( "OrderStatus::$OrderStatus" ) );
            elseif ( ! $OrderStatus instanceof OrderStatus )
                throw new InvalidEnumException();
        }
        $this->OrderStatus = $OrderStatus->getValue();
        
        return $this;
    }

    /**
     * @return OrderStatus
     */
    public function getOrderStatus()
    {
        return $this->OrderStatus;
    }

    /**
     * @param PaymentStatus|string $PaymentStatus
     * @return $this
     * @throws InvalidEnumException
     */
    public function setPaymentStatus($PaymentStatus)
    {
        if ( ! $PaymentStatus instanceof PaymentStatus ) {
            if ( PaymentStatus::isValid( $PaymentStatus ) ) 
                $PaymentStatus = new PaymentStatus( $PaymentStatus );
            elseif ( PaymentStatus::isValidKey( $PaymentStatus ) ) 
                $PaymentStatus = new PaymentStatus( constant( "PaymentStatus::$PaymentStatus" ) );
            elseif ( ! $PaymentStatus instanceof PaymentStatus )
                throw new InvalidEnumException();
        }
        $this->PaymentStatus = $PaymentStatus->getValue();
        
        return $this;
    }

    /**
     * @return PaymentStatus
     */
    public function getPaymentStatus()
    {
        return $this->PaymentStatus;
    }

    /**
     * @param string $PhoneNumber
     * @return $this
     */
    public function setPhoneNumber($PhoneNumber)
    {
        $this->PhoneNumber = $PhoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }

    /**
     * @param float $PointAmount
     * @return $this
     */
    public function setPointAmount($PointAmount)
    {
        $this->PointAmount = $PointAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getPointAmount()
    {
        return $this->PointAmount;
    }

    /**
     * @param float $PointBalance
     * @return $this
     */
    public function setPointBalance($PointBalance)
    {
        $this->PointBalance = $PointBalance;
        return $this;
    }

    /**
     * @return float
     */
    public function getPointBalance()
    {
        return $this->PointBalance;
    }

    /**
     * @param float $PointCashAmountNeeded
     * @return $this
     */
    public function setPointCashAmountNeeded($PointCashAmountNeeded)
    {
        $this->PointCashAmountNeeded = $PointCashAmountNeeded;
        return $this;
    }

    /**
     * @return float
     */
    public function getPointCashAmountNeeded()
    {
        return $this->PointCashAmountNeeded;
    }

    /**
     * @param float $PointsRewarded
     * @return $this
     */
    public function setPointsRewarded($PointsRewarded)
    {
        $this->PointsRewarded = $PointsRewarded;
        return $this;
    }

    /**
     * @return float
     */
    public function getPointsRewarded()
    {
        return $this->PointsRewarded;
    }

    /**
     * @param float $PointsUsedInOrder
     * @return $this
     */
    public function setPointsUsedInOrder($PointsUsedInOrder)
    {
        $this->PointsUsedInOrder = $PointsUsedInOrder;
        return $this;
    }

    /**
     * @return float
     */
    public function getPointsUsedInOrder()
    {
        return $this->PointsUsedInOrder;
    }

    /**
     * @param boolean $Posted
     * @return $this
     */
    public function setPosted($Posted)
    {
        $this->Posted = $Posted;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getPosted()
    {
        return $this->Posted;
    }

    /**
     * @param string $ReceiptNo
     * @return $this
     */
    public function setReceiptNo($ReceiptNo)
    {
        $this->ReceiptNo = $ReceiptNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getReceiptNo()
    {
        return $this->ReceiptNo;
    }

    /**
     * @param boolean $ShipClickAndCollect
     * @return $this
     */
    public function setShipClickAndCollect($ShipClickAndCollect)
    {
        $this->ShipClickAndCollect = $ShipClickAndCollect;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getShipClickAndCollect()
    {
        return $this->ShipClickAndCollect;
    }

    /**
     * @param Address $ShipToAddress
     * @return $this
     */
    public function setShipToAddress($ShipToAddress)
    {
        $this->ShipToAddress = $ShipToAddress;
        return $this;
    }

    /**
     * @return Address
     */
    public function getShipToAddress()
    {
        return $this->ShipToAddress;
    }

    /**
     * @param string $ShipToEmail
     * @return $this
     */
    public function setShipToEmail($ShipToEmail)
    {
        $this->ShipToEmail = $ShipToEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipToEmail()
    {
        return $this->ShipToEmail;
    }

    /**
     * @param string $ShipToName
     * @return $this
     */
    public function setShipToName($ShipToName)
    {
        $this->ShipToName = $ShipToName;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipToName()
    {
        return $this->ShipToName;
    }

    /**
     * @param string $ShipToPhoneNumber
     * @return $this
     */
    public function setShipToPhoneNumber($ShipToPhoneNumber)
    {
        $this->ShipToPhoneNumber = $ShipToPhoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipToPhoneNumber()
    {
        return $this->ShipToPhoneNumber;
    }

    /**
     * @param string $ShippingAgentCode
     * @return $this
     */
    public function setShippingAgentCode($ShippingAgentCode)
    {
        $this->ShippingAgentCode = $ShippingAgentCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getShippingAgentCode()
    {
        return $this->ShippingAgentCode;
    }

    /**
     * @param string $ShippingAgentServiceCode
     * @return $this
     */
    public function setShippingAgentServiceCode($ShippingAgentServiceCode)
    {
        $this->ShippingAgentServiceCode = $ShippingAgentServiceCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getShippingAgentServiceCode()
    {
        return $this->ShippingAgentServiceCode;
    }

    /**
     * @param ShippingStatus|string $ShippingStatus
     * @return $this
     * @throws InvalidEnumException
     */
    public function setShippingStatus($ShippingStatus)
    {
        if ( ! $ShippingStatus instanceof ShippingStatus ) {
            if ( ShippingStatus::isValid( $ShippingStatus ) ) 
                $ShippingStatus = new ShippingStatus( $ShippingStatus );
            elseif ( ShippingStatus::isValidKey( $ShippingStatus ) ) 
                $ShippingStatus = new ShippingStatus( constant( "ShippingStatus::$ShippingStatus" ) );
            elseif ( ! $ShippingStatus instanceof ShippingStatus )
                throw new InvalidEnumException();
        }
        $this->ShippingStatus = $ShippingStatus->getValue();
        
        return $this;
    }

    /**
     * @return ShippingStatus
     */
    public function getShippingStatus()
    {
        return $this->ShippingStatus;
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

    /**
     * @param float $TotalAmount
     * @return $this
     */
    public function setTotalAmount($TotalAmount)
    {
        $this->TotalAmount = $TotalAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalAmount()
    {
        return $this->TotalAmount;
    }

    /**
     * @param float $TotalDiscount
     * @return $this
     */
    public function setTotalDiscount($TotalDiscount)
    {
        $this->TotalDiscount = $TotalDiscount;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalDiscount()
    {
        return $this->TotalDiscount;
    }

    /**
     * @param float $TotalNetAmount
     * @return $this
     */
    public function setTotalNetAmount($TotalNetAmount)
    {
        $this->TotalNetAmount = $TotalNetAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalNetAmount()
    {
        return $this->TotalNetAmount;
    }


}

