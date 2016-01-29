<?php
namespace Locastic\HpExpressApi;

class WSGetPackageScansResponse
{

    /**
     * @var string $Barcode
     * @access public
     */
    public $Barcode = null;

    /**
     * @var PackageScan[] $PackageScansList
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
     * @param string $Barcode
     * @param PackageScan[] $PackageScansList
     * @param EnumResponseStatus $ResponseStatus
     * @param string $ErrorMessage
     * @access public
     */
    public function __construct($Barcode, $PackageScansList, $ResponseStatus, $ErrorMessage)
    {
      $this->Barcode = $Barcode;
      $this->PackageScansList = $PackageScansList;
      $this->ResponseStatus = $ResponseStatus;
      $this->ErrorMessage = $ErrorMessage;
    }

}
