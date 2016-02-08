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
     * Api constructor.
     */
    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
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
        $inputHeaders = array(
            'authHead.UserName' => $this->username,
            'authHead.Password' => $this->password,
        );

        try {
            $client = new DataExchange();
            $response = $client->__soapCall($functionName, (array) $args, null, $inputHeaders);
        } catch (\Exception $e) {
            return $e->getMessage();
        }

        return $response;
    }

}