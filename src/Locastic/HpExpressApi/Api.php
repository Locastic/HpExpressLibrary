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
     * @param GetShipmentOrders $getShipmentOrders
     *
     * @return mixed|string
     */
    public function getShipmentOrders(GetShipmentOrders $getShipmentOrders)
    {
        return $this->sendRequest('GetShipmentOrders', $getShipmentOrders);
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