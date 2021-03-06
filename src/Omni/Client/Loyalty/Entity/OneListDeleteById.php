<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Loyalty\Entity;

use \Ls\Omni\Client\Loyalty\Entity\Enum\ListType;
use \Ls\Omni\Exception\InvalidEnumException;
use \Ls\Omni\Client\RequestInterface;

class OneListDeleteById implements RequestInterface
{

    /**
     * @property string $oneListId
     */
    protected $oneListId = null;

    /**
     * @property ListType $listType
     */
    protected $listType = null;

    /**
     * @param string $oneListId
     * @return $this
     */
    public function setOneListId($oneListId)
    {
        $this->oneListId = $oneListId;
        return $this;
    }

    /**
     * @return string
     */
    public function getOneListId()
    {
        return $this->oneListId;
    }

    /**
     * @param ListType|string $listType
     * @return $this
     * @throws InvalidEnumException
     */
    public function setListType($listType)
    {
        if ( ! $listType instanceof ListType ) {
            if ( ListType::isValid( $listType ) ) 
                $listType = new ListType( $listType );
            elseif ( ListType::isValidKey( $listType ) ) 
                $listType = new ListType( constant( "ListType::$listType" ) );
            elseif ( ! $listType instanceof ListType )
                throw new InvalidEnumException();
        }
        $this->listType = $listType->getValue();

        return $this;
    }

    /**
     * @return ListType
     */
    public function getListType()
    {
        return $this->listType;
    }


}

