<?php
namespace Locastic\HpExpressApi;

/**
 * Class Api
 *
 * @package Locastic\HpExpressApi
 */
class Api
{
    /**
     * @var string $username
     */
    private $username;

    /**
     * @var string $password
     */
    private $password;

    /**
     * @var string $authHeadUsername
     */
    private $authHeadUsername;

    /**
     * @var string $authHeadPassword
     */
    private $authHeadPassword;

    /**
     * @var string $location
     */
    private $location;

    /**
     * @var string $namespace
     */
    private $namespace;

    /**
     * Api constructor.
     *
     * @param $username
     * @param $password
     * @param $authHeadUsername
     * @param $authHeadPassword
     * @param $location
     * @param $namespace
     *
     */
    public function __construct($username, $password, $authHeadUsername, $authHeadPassword, $location, $namespace)
    {
        $this->username = $username;
        $this->password = $password;
        $this->authHeadUsername = $authHeadUsername;
        $this->authHeadPassword = $authHeadPassword;
        $this->location = $location;
        $this->namespace = $namespace;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param ShipmentOrder $shipmentOrder
     *
     * @return mixed|string
     */
    public function createShipmentOrders(ShipmentOrder $shipmentOrder)
    {
        return $this->sendRequest('CreateShipmentOrders', $shipmentOrder);
    }

    /**
     * @param CreateShipmentOrdersResponse $createShipmentOrdersResponse
     *
     * @return mixed|string
     */
    public function createShipmentOrdersResponse(CreateShipmentOrdersResponse $createShipmentOrdersResponse)
    {
        return $this->sendRequest('CreateShipmentOrdersResponse', $createShipmentOrdersResponse);
    }

    /**
     * @param GetAdditionalServices $getAdditionalServices
     *
     * @return mixed|string
     */
    public function getAdditionalServices(GetAdditionalServices $getAdditionalServices)
    {
        $getAdditionalServices->password = $this->password;
        $getAdditionalServices->username = $this->username;

        return $this->sendRequest('GetAdditionalServices', $getAdditionalServices);
    }

    /**
     * @param GetAdditionalServicesResponse $getAdditionalServicesResponse
     *
     * @return mixed|string
     */
    public function getAdditionalServicesResponse(GetAdditionalServicesResponse $getAdditionalServicesResponse)
    {
        return $this->sendRequest('GetAdditionalServicesResponse', $getAdditionalServicesResponse);
    }

    /**
     * @param GetBillOfLadingScans $getBillOfLadingScans
     *
     * @return mixed|string
     */
    public function getBillOfLadingScans(GetBillOfLadingScans $getBillOfLadingScans)
    {
        return $this->sendRequest('GetBillOfLadingScans', $getBillOfLadingScans);
    }

    /**
     * @param GetBillOfLadingScansResponse $getBillOfLadingScansResponse
     *
     * @return mixed|string
     */
    public function getBillOfLadingScansResponse(GetBillOfLadingScansResponse $getBillOfLadingScansResponse)
    {
        return $this->sendRequest('GetBillOfLadingScansResponse', $getBillOfLadingScansResponse);
    }

    /**
     * @param GetCashPaymentTypes $getCashPaymentTypes
     *
     * @return mixed|string
     */
    public function getCashPaymentTypes(GetCashPaymentTypes $getCashPaymentTypes)
    {
        return $this->sendRequest('GetCashPaymentTypes', $getCashPaymentTypes);
    }

    /**
     * @param GetCashPaymentTypesResponse $getCashPaymentTypesResponse
     *
     * @return mixed|string
     */
    public function getCashPaymentTypesResponse(GetCashPaymentTypesResponse $getCashPaymentTypesResponse)
    {
        return $this->sendRequest('GetCashPaymentTypesResponse', $getCashPaymentTypesResponse);
    }

    /**
     * @param GetContents $getContents
     *
     * @return mixed|string
     */
    public function getContents(GetContents $getContents)
    {
        return $this->sendRequest('GetContents', $getContents);
    }

    /**
     * @param GetContentsResponse $getContentsResponse
     *
     * @return mixed|string
     */
    public function getContentsResponse(GetContentsResponse $getContentsResponse)
    {
        return $this->sendRequest('GetContentsResponse', $getContentsResponse);
    }

    /**
     * @param GetDeliveryTypes $getDeliveryTypes
     *
     * @return mixed|string
     */
    public function getDeliveryTypes(GetDeliveryTypes $getDeliveryTypes)
    {
        return $this->sendRequest('GetDeliveryTypes', $getDeliveryTypes);
    }

    /**
     * @param GetDeliveryTypesResponse $getDeliveryTypesResponse
     *
     * @return mixed|string
     */
    public function getDeliveryTypesResponse(GetDeliveryTypesResponse $getDeliveryTypesResponse)
    {
        return $this->sendRequest('GetDeliveryTypesResponse', $getDeliveryTypesResponse);
    }

    /**
     * @param GetMainServices $getMainServices
     *
     * @return mixed|string
     */
    public function getMainServices(GetMainServices $getMainServices)
    {
        return $this->sendRequest('GetMainServices', $getMainServices);
    }

    /**
     * @param GetMainServicesResponse $getMainServicesResponse
     *
     * @return mixed|string
     */
    public function getMainServicesResponse(GetMainServicesResponse $getMainServicesResponse)
    {
        return $this->sendRequest('GetMainServicesResponse', $getMainServicesResponse);
    }

    /**
     * @param GetPackageScans $getPackageScans
     *
     * @return mixed|string
     */
    public function getPackageScans(GetPackageScans $getPackageScans)
    {
        return $this->sendRequest('GetPackageScans', $getPackageScans);
    }

    /**
     * @param GetPackageScans $getPackageScans
     *
     * @return mixed|string
     */
    public function getPackageScansResponse(GetPackageScans $getPackageScans)
    {
        return $this->sendRequest('GetPackageScansResponse', $getPackageScans);
    }

    /**
     * @param GetPaymentTypes $getPaymentTypes
     *
     * @return mixed|string
     */
    public function getPaymentTypes(GetPaymentTypes $getPaymentTypes)
    {
        return $this->sendRequest('GetPaymentTypes', $getPaymentTypes);
    }

    /**
     * @param GetPaymentTypesResponse $getPaymentTypesResponse
     *
     * @return mixed|string
     */
    public function getPaymentTypesResponse(GetPaymentTypesResponse $getPaymentTypesResponse)
    {
        return $this->sendRequest('GetPaymentTypesResponse', $getPaymentTypesResponse);
    }

    /**
     * @param GetShipmentOrders $getShipmentOrders
     *
     * @return mixed|string
     */
    public function getShipmentOrders(GetShipmentOrders $getShipmentOrders)
    {
        return $this->sendRequest('GetShipmentOrders', $getShipmentOrders);
    }

    /**
     * @param GetShipmentOrdersResponse $getShipmentOrdersResponse
     *
     * @return mixed|string
     */
    public function getShipmentOrdersResponse(GetShipmentOrdersResponse $getShipmentOrdersResponse)
    {
        return $this->sendRequest('GetShipmentOrdersResponse', $getShipmentOrdersResponse);
    }

    /**
     * @param WSCreateShipmentOrdersResponse $WSCreateShipmentOrdersResponse
     *
     * @return mixed|string
     */
    public function WSCreateShipmentOrdersResponse(WSCreateShipmentOrdersResponse $WSCreateShipmentOrdersResponse)
    {
        return $this->sendRequest('WSCreateShipmentOrdersResponse', $WSCreateShipmentOrdersResponse);
    }

    /**
     * @param WSGetBillOfLadingScansResponse $WSGetBillOfLadingScansResponse
     *
     * @return mixed|string
     */
    public function  WSGetBillOfLadingScansResponse(WSGetBillOfLadingScansResponse $WSGetBillOfLadingScansResponse)
    {
        return $this->sendRequest('WSGetBillOfLadingScansResponse', $WSGetBillOfLadingScansResponse);
    }

    /**
     * @param WSGetPackageScansResponse $WSGetPackageScansResponse
     *
     * @return mixed|string
     */
    public function WSGetPackageScansResponse(WSGetPackageScansResponse $WSGetPackageScansResponse)
    {
        return $this->sendRequest('WSGetPackageScansResponse', $WSGetPackageScansResponse);
    }

    /**
     * @param WSGetShipmentOrdersResponse $WSGetShipmentOrdersResponse
     *
     * @return mixed|string
     */
    public function WSGetShipmentOrdersResponse(WSGetShipmentOrdersResponse $WSGetShipmentOrdersResponse)
    {
        return $this->sendRequest('WSGetShipmentOrdersResponse', $WSGetShipmentOrdersResponse);
    }

    /**
     * @param $functionName
     * @param $args
     *
     * @return mixed|string
     */
    private function sendRequest($functionName, $args)
    {
        $soapClient = new \SoapClient(
            $this->location . '?wsdl',
            array(
                'location' => $this->location,
                'trace' => 1,
                'username' => $this->username,
                'password' => $this->password,
                'uri' => $this->location,
            )
        );

        $headerBody = array(
            'authHead' => array(
                'UserName' => $this->authHeadUsername,
                'Password' => $this->authHeadPassword,
            ),
        );

        $header = new \SoapHeader(
            $this->namespace,
            'RequestorCredentials',
            $headerBody
        );


        $response = $soapClient->__soapCall($functionName, (array)$args, null, $header);

        return $response;
    }

}