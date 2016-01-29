<?php
namespace Locastic\HpExpressApi;

class WSGetBillOfLadingScansResponse
{

    /**
     * @var string $ClientReferenceNumber
     * @access public
     */
    public $ClientReferenceNumber = null;

    /**
     * @var string $Barcode
     * @access public
     */
    public $Barcode = null;

    /**
     * @var BillOfLadingScan[] $PackageScansList
     * @access public
     */
    public $PackageScansList = null;

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
     * @param string $Barcode
     * @param BillOfLadingScan[] $PackageScansList
     * @param EnumResponseStatus $ResponseStatus
     * @param string $ErrorMessage
     * @access public
     */
    public function __construct($ClientReferenceNumber, $Barcode, $PackageScansList, $ResponseStatus, $ErrorMessage)
    {
      $this->ClientReferenceNumber = $ClientReferenceNumber;
      $this->Barcode = $Barcode;
      $this->PackageScansList = $PackageScansList;
      $this->ResponseStatus = $ResponseStatus;
      $this->ErrorMessage = $ErrorMessage;
    }

}
