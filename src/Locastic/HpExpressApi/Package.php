<?php
namespace Locastic\HpExpressApi;

class Package extends SOAPable
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
     * @return string
     */
    public function getBarcode()
    {
        return $this->Barcode;
    }

    /**
     * @param string $Barcode
     */
    public function setBarcode($Barcode)
    {
        $this->Barcode = $Barcode;
    }

    /**
     * @return EnumBarcodeType
     */
    public function getBarcodeType()
    {
        return $this->BarcodeType;
    }

    /**
     * @param EnumBarcodeType $BarcodeType
     */
    public function setBarcodeType($BarcodeType)
    {
        $this->BarcodeType = $BarcodeType;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
        return $this->Weight;
    }

    /**
     * @param float $Weight
     */
    public function setWeight($Weight)
    {
        $this->Weight = $Weight;
    }

    /**
     * @return int
     */
    public function getVolumeX()
    {
        return $this->VolumeX;
    }

    /**
     * @param int $VolumeX
     */
    public function setVolumeX($VolumeX)
    {
        $this->VolumeX = $VolumeX;
    }

    /**
     * @return int
     */
    public function getVolumeY()
    {
        return $this->VolumeY;
    }

    /**
     * @param int $VolumeY
     */
    public function setVolumeY($VolumeY)
    {
        $this->VolumeY = $VolumeY;
    }

    /**
     * @return int
     */
    public function getVolumeZ()
    {
        return $this->VolumeZ;
    }

    /**
     * @param int $VolumeZ
     */
    public function setVolumeZ($VolumeZ)
    {
        $this->VolumeZ = $VolumeZ;
    }

    /**
     * @return string
     */
    public function getCommentPackage()
    {
        return $this->CommentPackage;
    }

    /**
     * @param string $CommentPackage
     */
    public function setCommentPackage($CommentPackage)
    {
        $this->CommentPackage = $CommentPackage;
    }

    /**
     * @return string
     */
    public function getReferenceFieldPackageB()
    {
        return $this->ReferenceFieldPackageB;
    }

    /**
     * @param string $ReferenceFieldPackageB
     */
    public function setReferenceFieldPackageB($ReferenceFieldPackageB)
    {
        $this->ReferenceFieldPackageB = $ReferenceFieldPackageB;
    }
}
