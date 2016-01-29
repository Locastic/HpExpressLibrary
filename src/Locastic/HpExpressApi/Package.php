<?php
namespace Locastic\HpExpressApi;

class Package
{

    /**
     * @var string $Barcode
     * @access public
     */
    public $Barcode = null;

    /**
     * @var EnumBarcodeType $BarcodeType
     * @access public
     */
    public $BarcodeType = null;

    /**
     * @var float $Weight
     * @access public
     */
    public $Weight = null;

    /**
     * @var int $VolumeX
     * @access public
     */
    public $VolumeX = null;

    /**
     * @var int $VolumeY
     * @access public
     */
    public $VolumeY = null;

    /**
     * @var int $VolumeZ
     * @access public
     */
    public $VolumeZ = null;

    /**
     * @var string $CommentPackage
     * @access public
     */
    public $CommentPackage = null;

    /**
     * @var string $ReferenceFieldPackageB
     * @access public
     */
    public $ReferenceFieldPackageB = null;

    /**
     * @param string $Barcode
     * @param EnumBarcodeType $BarcodeType
     * @param float $Weight
     * @param string $CommentPackage
     * @param string $ReferenceFieldPackageB
     * @access public
     */
    public function __construct($Barcode, $BarcodeType, $Weight, $CommentPackage, $ReferenceFieldPackageB)
    {
      $this->Barcode = $Barcode;
      $this->BarcodeType = $BarcodeType;
      $this->Weight = $Weight;
      $this->CommentPackage = $CommentPackage;
      $this->ReferenceFieldPackageB = $ReferenceFieldPackageB;
    }

}
