<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Loyalty\Entity;

use \Ls\Omni\Client\ResponseInterface;

class ItemCategoriesGetAllResponse implements ResponseInterface
{

    /**
     * @property ArrayOfItemCategory $ItemCategoriesGetAllResult
     */
    protected $ItemCategoriesGetAllResult = null;

    /**
     * @param ArrayOfItemCategory $ItemCategoriesGetAllResult
     * @return $this
     */
    public function setItemCategoriesGetAllResult($ItemCategoriesGetAllResult)
    {
        $this->ItemCategoriesGetAllResult = $ItemCategoriesGetAllResult;
        return $this;
    }

    /**
     * @return ArrayOfItemCategory
     */
    public function getItemCategoriesGetAllResult()
    {
        return $this->ItemCategoriesGetAllResult;
    }

    /**
     * @return ArrayOfItemCategory
     */
    public function getResult()
    {
        return $this->ItemCategoriesGetAllResult;
    }


}

