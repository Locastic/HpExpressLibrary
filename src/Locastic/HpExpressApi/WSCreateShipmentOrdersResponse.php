<?php
namespace Locastic\HpExpressApi;

class WSCreateShipmentOrdersResponse
{

    /**
     * @var string $ClientReferenceNumber
     * @access public
     */
    public $ClientReferenceNumber = null;

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
     * @param EnumResponseStatus $ResponseStatus
     * @param string $ErrorMessage
     *
     * @access public
     */
    public function __construct($ClientReferenceNumber, $ResponseStatus, $ErrorMessage)
    {
        $this->ClientReferenceNumber = $ClientReferenceNumber;
        $this->ResponseStatus = $ResponseStatus;
        $this->ErrorMessage = $ErrorMessage;
    }

}
