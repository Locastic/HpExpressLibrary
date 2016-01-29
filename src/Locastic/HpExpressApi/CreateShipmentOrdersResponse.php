<?php
namespace Locastic\HpExpressApi;

class CreateShipmentOrdersResponse
{

    /**
     * @var WSCreateShipmentOrdersResponse[] $CreateShipmentOrdersResult
     * @access public
     */
    public $CreateShipmentOrdersResult = null;

    /**
     * @param WSCreateShipmentOrdersResponse[] $CreateShipmentOrdersResult
     * @access public
     */
    public function __construct($CreateShipmentOrdersResult)
    {
      $this->CreateShipmentOrdersResult = $CreateShipmentOrdersResult;
    }

}
