<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use Ls\Omni\Client\Ecommerce\Entity\Enum\Platform;
use Ls\Omni\Exception\InvalidEnumException;

class Transaction
{

    /**
     * @property float $Amount
     */
    protected $Amount = null;

    /**
     * @property float $Amt
     */
    protected $Amt = null;

    /**
     * @property string $Date
     */
    protected $Date = null;

    /**
     * @property float $DiscountAmount
     */
    protected $DiscountAmount = null;

    /**
     * @property float $DiscountAmt
     */
    protected $DiscountAmt = null;

    /**
     * @property string $Id
     */
    protected $Id = null;

    /**
     * @property float $NetAmount
     */
    protected $NetAmount = null;

    /**
     * @property float $NetAmt
     */
    protected $NetAmt = null;

    /**
     * @property Platform $Platform
     */
    protected $Platform = null;

    /**
     * @property ArrayOfSaleLine $SaleLines
     */
    protected $SaleLines = null;

    /**
     * @property int $SaleLinesCount
     */
    protected $SaleLinesCount = null;

    /**
     * @property string $Staff
     */
    protected $Staff = null;

    /**
     * @property Store $Store
     */
    protected $Store = null;

    /**
     * @property ArrayOfTaxLine $TaxLines
     */
    protected $TaxLines = null;

    /**
     * @property ArrayOfTenderLine $TenderLines
     */
    protected $TenderLines = null;

    /**
     * @property int $TenderLinesCount
     */
    protected $TenderLinesCount = null;

    /**
     * @property string $Terminal
     */
    protected $Terminal = null;

    /**
     * @property ArrayOfTransactionFooter $TransactionFooters
     */
    protected $TransactionFooters = null;

    /**
     * @property ArrayOfTransactionHeader $TransactionHeaders
     */
    protected $TransactionHeaders = null;

    /**
     * @property float $VatAmount
     */
    protected $VatAmount = null;

    /**
     * @property float $VatAmt
     */
    protected $VatAmt = null;

    /**
     * @property ArrayOfTenderLine $CardLines
     */
    protected $CardLines = null;

    /**
     * @property string $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @property string $ExternalId
     */
    protected $ExternalId = null;

    /**
     * @property string $ReceiptNumber
     */
    protected $ReceiptNumber = null;

    /**
     * @property string $StoreId
     */
    protected $StoreId = null;

    /**
     * @property string $StoreName
     */
    protected $StoreName = null;

    /**
     * @param float $Amount
     * @return $this
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param float $Amt
     * @return $this
     */
    public function setAmt($Amt)
    {
        $this->Amt = $Amt;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmt()
    {
        return $this->Amt;
    }

    /**
     * @param string $Date
     * @return $this
     */
    public function setDate($Date)
    {
        $this->Date = $Date;
        return $this;
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * @param float $DiscountAmount
     * @return $this
     */
    public function setDiscountAmount($DiscountAmount)
    {
        $this->DiscountAmount = $DiscountAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getDiscountAmount()
    {
        return $this->DiscountAmount;
    }

    /**
     * @param float $DiscountAmt
     * @return $this
     */
    public function setDiscountAmt($DiscountAmt)
    {
        $this->DiscountAmt = $DiscountAmt;
        return $this;
    }

    /**
     * @return float
     */
    public function getDiscountAmt()
    {
        return $this->DiscountAmt;
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
     * @param float $NetAmount
     * @return $this
     */
    public function setNetAmount($NetAmount)
    {
        $this->NetAmount = $NetAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getNetAmount()
    {
        return $this->NetAmount;
    }

    /**
     * @param float $NetAmt
     * @return $this
     */
    public function setNetAmt($NetAmt)
    {
        $this->NetAmt = $NetAmt;
        return $this;
    }

    /**
     * @return float
     */
    public function getNetAmt()
    {
        return $this->NetAmt;
    }

    /**
     * @param Platform|string $Platform
     * @return $this
     * @throws InvalidEnumException
     */
    public function setPlatform($Platform)
    {
        if ( Platform::isValid( $Platform) ) 
            $this->Platform = new Platform( $Platform );
        elseif ( Platform::isValidKey( $Platform) ) 
            $this->Platform = new Platform( constant( "Platform::$Platform" ) );
        else 
            throw new InvalidEnumException();
        return $this;
    }

    /**
     * @return Platform
     */
    public function getPlatform()
    {
        return $this->Platform;
    }

    /**
     * @param ArrayOfSaleLine $SaleLines
     * @return $this
     */
    public function setSaleLines($SaleLines)
    {
        $this->SaleLines = $SaleLines;
        return $this;
    }

    /**
     * @return ArrayOfSaleLine
     */
    public function getSaleLines()
    {
        return $this->SaleLines;
    }

    /**
     * @param int $SaleLinesCount
     * @return $this
     */
    public function setSaleLinesCount($SaleLinesCount)
    {
        $this->SaleLinesCount = $SaleLinesCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getSaleLinesCount()
    {
        return $this->SaleLinesCount;
    }

    /**
     * @param string $Staff
     * @return $this
     */
    public function setStaff($Staff)
    {
        $this->Staff = $Staff;
        return $this;
    }

    /**
     * @return string
     */
    public function getStaff()
    {
        return $this->Staff;
    }

    /**
     * @param Store $Store
     * @return $this
     */
    public function setStore($Store)
    {
        $this->Store = $Store;
        return $this;
    }

    /**
     * @return Store
     */
    public function getStore()
    {
        return $this->Store;
    }

    /**
     * @param ArrayOfTaxLine $TaxLines
     * @return $this
     */
    public function setTaxLines($TaxLines)
    {
        $this->TaxLines = $TaxLines;
        return $this;
    }

    /**
     * @return ArrayOfTaxLine
     */
    public function getTaxLines()
    {
        return $this->TaxLines;
    }

    /**
     * @param ArrayOfTenderLine $TenderLines
     * @return $this
     */
    public function setTenderLines($TenderLines)
    {
        $this->TenderLines = $TenderLines;
        return $this;
    }

    /**
     * @return ArrayOfTenderLine
     */
    public function getTenderLines()
    {
        return $this->TenderLines;
    }

    /**
     * @param int $TenderLinesCount
     * @return $this
     */
    public function setTenderLinesCount($TenderLinesCount)
    {
        $this->TenderLinesCount = $TenderLinesCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getTenderLinesCount()
    {
        return $this->TenderLinesCount;
    }

    /**
     * @param string $Terminal
     * @return $this
     */
    public function setTerminal($Terminal)
    {
        $this->Terminal = $Terminal;
        return $this;
    }

    /**
     * @return string
     */
    public function getTerminal()
    {
        return $this->Terminal;
    }

    /**
     * @param ArrayOfTransactionFooter $TransactionFooters
     * @return $this
     */
    public function setTransactionFooters($TransactionFooters)
    {
        $this->TransactionFooters = $TransactionFooters;
        return $this;
    }

    /**
     * @return ArrayOfTransactionFooter
     */
    public function getTransactionFooters()
    {
        return $this->TransactionFooters;
    }

    /**
     * @param ArrayOfTransactionHeader $TransactionHeaders
     * @return $this
     */
    public function setTransactionHeaders($TransactionHeaders)
    {
        $this->TransactionHeaders = $TransactionHeaders;
        return $this;
    }

    /**
     * @return ArrayOfTransactionHeader
     */
    public function getTransactionHeaders()
    {
        return $this->TransactionHeaders;
    }

    /**
     * @param float $VatAmount
     * @return $this
     */
    public function setVatAmount($VatAmount)
    {
        $this->VatAmount = $VatAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getVatAmount()
    {
        return $this->VatAmount;
    }

    /**
     * @param float $VatAmt
     * @return $this
     */
    public function setVatAmt($VatAmt)
    {
        $this->VatAmt = $VatAmt;
        return $this;
    }

    /**
     * @return float
     */
    public function getVatAmt()
    {
        return $this->VatAmt;
    }

    /**
     * @param ArrayOfTenderLine $CardLines
     * @return $this
     */
    public function setCardLines($CardLines)
    {
        $this->CardLines = $CardLines;
        return $this;
    }

    /**
     * @return ArrayOfTenderLine
     */
    public function getCardLines()
    {
        return $this->CardLines;
    }

    /**
     * @param string $CurrencyCode
     * @return $this
     */
    public function setCurrencyCode($CurrencyCode)
    {
        $this->CurrencyCode = $CurrencyCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->CurrencyCode;
    }

    /**
     * @param string $ExternalId
     * @return $this
     */
    public function setExternalId($ExternalId)
    {
        $this->ExternalId = $ExternalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
        return $this->ExternalId;
    }

    /**
     * @param string $ReceiptNumber
     * @return $this
     */
    public function setReceiptNumber($ReceiptNumber)
    {
        $this->ReceiptNumber = $ReceiptNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getReceiptNumber()
    {
        return $this->ReceiptNumber;
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
     * @param string $StoreName
     * @return $this
     */
    public function setStoreName($StoreName)
    {
        $this->StoreName = $StoreName;
        return $this;
    }

    /**
     * @return string
     */
    public function getStoreName()
    {
        return $this->StoreName;
    }


}
