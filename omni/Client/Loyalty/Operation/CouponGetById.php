<?php
/** @noinspection PhpDocSignatureInspection */
	/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Loyalty\Operation;

use Ls\Omni\Client\IRequest;
use Ls\Omni\Client\IResponse;
use Ls\Omni\Client\IOperation;
use Ls\Omni\Client\AbstractOperation;
use Ls\Omni\Service\Service as OmniService;
use Ls\Omni\Service\ServiceType;
use Ls\Omni\Service\Soap\Client as OmniClient;
use Ls\Omni\Client\Loyalty\ClassMap;
use Ls\Omni\Client\Loyalty\Entity\CouponGetById as CouponGetByIdRequest;
use Ls\Omni\Client\Loyalty\Entity\CouponGetByIdResponse as CouponGetByIdResponse;

class CouponGetById extends AbstractOperation implements IOperation
{

    const OPERATION_NAME = 'COUPON_GET_BY_ID';

    const SERVICE_TYPE = 'loyalty';

    /** @noinspection PhpDocSignatureInspection */
	/**
     * @property OmniClient $client
     */
    public $client = null;

    /** @noinspection PhpDocSignatureInspection */
	/**
     * @property CouponGetByIdRequest $request
     */
    private $request = null;

    /** @noinspection PhpDocSignatureInspection */
	/**
     * @property CouponGetByIdResponse $response
     */
    private $response = null;

    /** @noinspection PhpDocSignatureInspection */
	/**
     * @property CouponGetByIdRequest $request_xml
     */
    private $request_xml = null;

    /** @noinspection PhpDocSignatureInspection */
	/**
     * @property CouponGetByIdResponse $response_xml
     */
    private $response_xml = null;

    /** @noinspection PhpDocSignatureInspection */
	/**
     * @property mixed $error
     */
    private $error = null;

    /** @noinspection PhpDocSignatureInspection */
	/**
     * @param CouponGetByIdRequest $request
     * @return IResponse|CouponGetByIdResponse
     */
    public function __construct()
    {
        $service_type = new ServiceType( self::SERVICE_TYPE );
        parent::__construct( $service_type );
        $url = OmniService::getUrl( $service_type ); 
        $this->client = new OmniClient( $url, $service_type );
        $this->client->setClassmap( $this->getClassMap() );
    }

    /** @noinspection PhpDocSignatureInspection */
	/**
     * @param CouponGetByIdRequest $request
     * @return IResponse|CouponGetByIdResponse
     */
    public function execute(IRequest $request = null)
    {
        if ( !is_null( $request ) ) {
            $this->setRequest( $request );
        }
        return $this->makeRequest( 'CouponGetById' );
    }

    /** @noinspection PhpDocSignatureInspection */
	/**
     * @return CouponGetByIdRequest
     */
    public function & getOperationInput()
    {
        if ( is_null( $this->request ) ) {
            $this->request = new CouponGetByIdRequest();
        }
        return $this->request;
    }

    /** @noinspection PhpDocSignatureInspection */
	/**
     * @return array
     */
    public function getClassMap()
    {
        return ClassMap::getClassMap();
    }

    /** @noinspection PhpDocSignatureInspection */
	/**
     * @param OmniClient $client
     * @return $this
     */
    public function setClient($client)
    {
        $this->client = $client;
        return $this;
    }

    /** @noinspection PhpDocSignatureInspection */
	/**
     * @return OmniClient
     */
    public function getClient()
    {
        return $this->client;
    }

    /** @noinspection PhpDocSignatureInspection */
	/**
     * @param CouponGetByIdRequest $request
     * @return $this
     */
    public function setRequest($request)
    {
        $this->request = $request;
        return $this;
    }

    /** @noinspection PhpDocSignatureInspection */
	/**
     * @return CouponGetByIdRequest
     */
    public function getRequest()
    {
        return $this->request;
    }

    /** @noinspection PhpDocSignatureInspection */
	/**
     * @param CouponGetByIdResponse $response
     * @return $this
     */
    public function setResponse($response)
    {
        $this->response = $response;
        return $this;
    }

    /** @noinspection PhpDocSignatureInspection */
	/**
     * @return CouponGetByIdResponse
     */
    public function getResponse()
    {
        return $this->response;
    }

    /** @noinspection PhpDocSignatureInspection */
	/**
     * @param CouponGetByIdRequest $request_xml
     * @return $this
     */
    public function setRequestXml($request_xml)
    {
        $this->request_xml = $request_xml;
        return $this;
    }

    /** @noinspection PhpDocSignatureInspection */
	/**
     * @return CouponGetByIdRequest
     */
    public function getRequestXml()
    {
        return $this->request_xml;
    }

    /** @noinspection PhpDocSignatureInspection */
	/**
     * @param CouponGetByIdResponse $response_xml
     * @return $this
     */
    public function setResponseXml($response_xml)
    {
        $this->response_xml = $response_xml;
        return $this;
    }

    /** @noinspection PhpDocSignatureInspection */
	/**
     * @return CouponGetByIdResponse
     */
    public function getResponseXml()
    {
        return $this->response_xml;
    }

    /** @noinspection PhpDocSignatureInspection */
	/**
     * @param mixed $error
     * @return $this
     */
    public function setError($error)
    {
        $this->error = $error;
        return $this;
    }

    /** @noinspection PhpDocSignatureInspection */
	/**
     * @return mixed
     */
    public function getError()
    {
        return $this->error;
    }


}
