<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Loyalty\Entity;

use \Ls\Omni\Client\ResponseInterface;

class ItemsPageResponse implements ResponseInterface
{

    /**
     * @property ArrayOfItem $ItemsPageResult
     */
    protected $ItemsPageResult = null;

    /**
     * @param ArrayOfItem $ItemsPageResult
     * @return $this
     */
    public function setItemsPageResult($ItemsPageResult)
    {
        $this->ItemsPageResult = $ItemsPageResult;
        return $this;
    }

    /**
     * @return ArrayOfItem
     */
    public function getItemsPageResult()
    {
        return $this->ItemsPageResult;
    }

    /**
     * @return ArrayOfItem
     */
    public function getResult()
    {
        return $this->ItemsPageResult;
    }


}

