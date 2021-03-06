<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */


namespace Ls\Replication\Api\Data;

interface ReplDataTranslationInterface
{

    /**
     * @param boolean $IsDeleted
     * @return $this
     */
    public function setIsDeleted($IsDeleted);

    /**
     * @return boolean
     */
    public function getIsDeleted();

    /**
     * @param string $Key
     * @return $this
     */
    public function setKey($Key);

    /**
     * @return string
     */
    public function getKey();

    /**
     * @param string $LanguageCode
     * @return $this
     */
    public function setLanguageCode($LanguageCode);

    /**
     * @return string
     */
    public function getLanguageCode();

    /**
     * @param string $Text
     * @return $this
     */
    public function setText($Text);

    /**
     * @return string
     */
    public function getText();

    /**
     * @param string $TranslationId
     * @return $this
     */
    public function setTranslationId($TranslationId);

    /**
     * @return string
     */
    public function getTranslationId();

    /**
     * @param string $scope
     * @return $this
     */
    public function setScope($scope);

    /**
     * @return string
     */
    public function getScope();

    /**
     * @param int $scope_id
     * @return $this
     */
    public function setScopeId($scope_id);

    /**
     * @return int
     */
    public function getScopeId();

    /**
     * @param string $processed
     * @return $this
     */
    public function setProcessed($processed);

    /**
     * @return string
     */
    public function getProcessed();


}

