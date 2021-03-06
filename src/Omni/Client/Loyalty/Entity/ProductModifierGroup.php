<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Loyalty\Entity;

class ProductModifierGroup
{

    /**
     * @property string $Des
     */
    protected $Des = null;

    /**
     * @property string $Id
     */
    protected $Id = null;

    /**
     * @property float $MaxS
     */
    protected $MaxS = null;

    /**
     * @property float $MinS
     */
    protected $MinS = null;

    /**
     * @property ArrayOfProductModifier $PM
     */
    protected $PM = null;

    /**
     * @property boolean $RqS
     */
    protected $RqS = null;

    /**
     * @property ArrayOfTextModifier $TM
     */
    protected $TM = null;

    /**
     * @param string $Des
     * @return $this
     */
    public function setDes($Des)
    {
        $this->Des = $Des;
        return $this;
    }

    /**
     * @return string
     */
    public function getDes()
    {
        return $this->Des;
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
     * @param float $MaxS
     * @return $this
     */
    public function setMaxS($MaxS)
    {
        $this->MaxS = $MaxS;
        return $this;
    }

    /**
     * @return float
     */
    public function getMaxS()
    {
        return $this->MaxS;
    }

    /**
     * @param float $MinS
     * @return $this
     */
    public function setMinS($MinS)
    {
        $this->MinS = $MinS;
        return $this;
    }

    /**
     * @return float
     */
    public function getMinS()
    {
        return $this->MinS;
    }

    /**
     * @param ArrayOfProductModifier $PM
     * @return $this
     */
    public function setPM($PM)
    {
        $this->PM = $PM;
        return $this;
    }

    /**
     * @return ArrayOfProductModifier
     */
    public function getPM()
    {
        return $this->PM;
    }

    /**
     * @param boolean $RqS
     * @return $this
     */
    public function setRqS($RqS)
    {
        $this->RqS = $RqS;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getRqS()
    {
        return $this->RqS;
    }

    /**
     * @param ArrayOfTextModifier $TM
     * @return $this
     */
    public function setTM($TM)
    {
        $this->TM = $TM;
        return $this;
    }

    /**
     * @return ArrayOfTextModifier
     */
    public function getTM()
    {
        return $this->TM;
    }


}

