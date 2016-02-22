<?php
namespace Locastic\HpExpressApi;

class CreateShipmentOrders extends SOAPable
{

    /**
     * @var ShipmentOrder[] $shipmentOrders
     * @access public
     */
    public $shipmentOrders = null;

    /**
     * @var string $username
     * @access public
     */
    public $username = null;

    /**
     * @var string $password
     * @access public
     */
    public $password = null;

    /**
     * @param ShipmentOrder[] $shipmentOrders
     * @param string $username
     * @param string $password
     * @access public
     */
    public function __construct($shipmentOrders, $username, $password)
    {
      $this->shipmentOrders = $shipmentOrders;
      $this->username = $username;
      $this->password = $password;
    }

    /**
     * @return ShipmentOrder[]
     */
    public function getShipmentOrders()
    {
        return $this->shipmentOrders;
    }

    /**
     * @param ShipmentOrder[] $shipmentOrders
     */
    public function setShipmentOrders($shipmentOrders)
    {
        $this->shipmentOrders = $shipmentOrders;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }


}
