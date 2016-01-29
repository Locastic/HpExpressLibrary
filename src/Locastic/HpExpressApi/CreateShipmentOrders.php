<?php
namespace Locastic\HpExpressApi;

class CreateShipmentOrders
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

}
