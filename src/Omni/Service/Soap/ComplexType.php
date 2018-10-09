<?php
namespace Ls\Omni\Service\Soap;

class ComplexType
{
    private static $registry = [ ];
    private static $cache = [ ];
    /** @var string */
    private $name;
    /** @var SoapType */
    private $soap_type;
    /** @var ComplexTypeDefinition[] */
    private $definition;
    /** @var string */
    private $base = NULL;

    /**
     * SoapEntity constructor.
     *
     * @param string                  $name
     * @param SoapType                $soap_type
     * @param ComplexTypeDefinition[] $definition
     * @param string                  $base
     */
    public function __construct ( $name, SoapType $soap_type, $definition, $base = NULL ) {

        $this->name = $name;
        $this->soap_type = $soap_type;
        $this->definition = $definition;
        $this->base = $base;

        if ( array_search( $name, ComplexType::$registry ) === FALSE ) {
            ComplexType::$registry[] = $name;
            ComplexType::$cache[ $name ] = $this;
        } else {
            $base_keys = array_keys( ComplexType::$cache[ $name ]->getDefinition() );
            $keys = array_keys( $definition );

            $difference = array_diff( $keys, $base_keys );
            $merged = array_merge( ComplexType::$cache[ $name ]->getDefinition(), $this->definition );
            if ( count( $difference ) > 0 ) {
                $this->definition = $merged;
            }
        }
    }

    /**
     * @return string
     */
    public function getName () {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName ( $name ) {
        $this->name = $name;
    }

    /**
     * @return SoapType
     */
    public function getSoapType () {
        return $this->soap_type;
    }

    /**
     * @param SoapType $soap_type
     */
    public function setSoapType ( $soap_type ) {
        $this->soap_type = $soap_type;
    }

    /**
     * @return ComplexTypeDefinition[]
     */
    public function getDefinition () {
        return $this->definition;
    }

    /**
     * @param ComplexTypeDefinition[] $definition
     */
    public function setDefinition ( $definition ) {
        $this->definition = $definition;
    }

    /**
     * @return string
     */
    public function getBase () {
        return $this->base;
    }

    /**
     * @param string $base
     */
    public function setBase ( $base ) {
        $this->base = $base;
    }
}