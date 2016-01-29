<?php
namespace Locastic\HpExpressApi;

class GetShipmentOrdersResponse
{

    /**
     * @var WSGetShipmentOrdersResponse[] $GetShipmentOrdersResult
     * @access public
     */
    public $GetShipmentOrdersResult = null;

    /**
     * @param WSGetShipmentOrdersResponse[] $GetShipmentOrdersResult
     * @access public
     */
    public function __construct($GetShipmentOrdersResult)
    {
      $this->GetShipmentOrdersResult = $GetShipmentOrdersResult;
    }

}
