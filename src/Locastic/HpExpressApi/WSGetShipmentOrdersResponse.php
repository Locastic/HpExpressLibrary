<?php
namespace Locastic\HpExpressApi;

class WSGetShipmentOrdersResponse
{

    /**
     * @var string $ClientReferenceNumber
     * @access public
     */
    public $ClientReferenceNumber = null;

    /**
     * @var ShipmentOrder $ShipmentOrder
     * @access public
     */
    public $ShipmentOrder = null;

    /**
     * @var EnumResponseStatus $ResponseStatus
     * @access public
     */
    public $ResponseStatus = null;

    /**
     * @var int $ErrorCode
     * @access public
     */
    public $ErrorCode = null;

    /**
     * @var string $ErrorMessage
     * @access public
     */
    public $ErrorMessage = null;

    /**
     * @param string $ClientReferenceNumber
     * @param ShipmentOrder $ShipmentOrder
     * @param EnumResponseStatus $ResponseStatus
     * @param string $ErrorMessage
     * @access public
     */
    public function __construct($ClientReferenceNumber, $ShipmentOrder, $ResponseStatus, $ErrorMessage)
    {
      $this->ClientReferenceNumber = $ClientReferenceNumber;
      $this->ShipmentOrder = $ShipmentOrder;
      $this->ResponseStatus = $ResponseStatus;
      $this->ErrorMessage = $ErrorMessage;
    }

}
