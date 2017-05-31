<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Loyalty\Entity;

use Ls\Omni\Client\Loyalty\Entity\Enum\AppSettingsKey;
use Ls\Omni\Exception\InvalidEnumException;
use Ls\Omni\Client\IRequest;

class AppSettingsGetByKey implements IRequest
{

    /**
     * @property AppSettingsKey $key
     */
    protected $key = null;

    /**
     * @property string $languageCode
     */
    protected $languageCode = null;

    /**
     * @param AppSettingsKey|string $key
     * @return $this
     * @throws InvalidEnumException
     */
    public function setKey($key)
    {
        if ( AppSettingsKey::isValid( $key) ) 
            $this->key = new AppSettingsKey( $key );
        elseif ( AppSettingsKey::isValidKey( $key) ) 
            $this->key = new AppSettingsKey( constant( "AppSettingsKey::$key" ) );
        else 
            throw new InvalidEnumException();
        return $this;
    }

    /**
     * @return AppSettingsKey
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param string $languageCode
     * @return $this
     */
    public function setLanguageCode($languageCode)
    {
        $this->languageCode = $languageCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->languageCode;
    }


}
