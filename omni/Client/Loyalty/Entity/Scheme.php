<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Loyalty\Entity;

class Scheme
{

    /**
     * @property Club $Club
     */
    protected $Club = null;

    /**
     * @property string $Description
     */
    protected $Description = null;

    /**
     * @property string $Id
     */
    protected $Id = null;

    /**
     * @property Scheme $NextScheme
     */
    protected $NextScheme = null;

    /**
     * @property string $Perks
     */
    protected $Perks = null;

    /**
     * @property int $PointsNeeded
     */
    protected $PointsNeeded = null;

    /**
     * @param Club $Club
     * @return $this
     */
    public function setClub($Club)
    {
        $this->Club = $Club;
        return $this;
    }

    /**
     * @return Club
     */
    public function getClub()
    {
        return $this->Club;
    }

    /**
     * @param string $Description
     * @return $this
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
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
     * @param Scheme $NextScheme
     * @return $this
     */
    public function setNextScheme($NextScheme)
    {
        $this->NextScheme = $NextScheme;
        return $this;
    }

    /**
     * @return Scheme
     */
    public function getNextScheme()
    {
        return $this->NextScheme;
    }

    /**
     * @param string $Perks
     * @return $this
     */
    public function setPerks($Perks)
    {
        $this->Perks = $Perks;
        return $this;
    }

    /**
     * @return string
     */
    public function getPerks()
    {
        return $this->Perks;
    }

    /**
     * @param int $PointsNeeded
     * @return $this
     */
    public function setPointsNeeded($PointsNeeded)
    {
        $this->PointsNeeded = $PointsNeeded;
        return $this;
    }

    /**
     * @return int
     */
    public function getPointsNeeded()
    {
        return $this->PointsNeeded;
    }


}
