<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

class LoyTransactionHeader extends BaseLine
{

    /**
     * @property string $HeaderDescription
     */
    protected $HeaderDescription = null;

    /**
     * @param string $HeaderDescription
     * @return $this
     */
    public function setHeaderDescription($HeaderDescription)
    {
        $this->HeaderDescription = $HeaderDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getHeaderDescription()
    {
        return $this->HeaderDescription;
    }


}

