<?php
namespace Locastic\HpExpressApi;

class AdditionalService extends SOAPable
{

    /**
     * @var int $AdditionalServiceId
     * @access public
     */
    public $AdditionalServiceId = null;

    /**
     * @var int $Quantity
     * @access public
     */
    public $Quantity = null;

    /**
     * @return int
     */
    public function getAdditionalServiceId()
    {
        return $this->AdditionalServiceId;
    }

    /**
     * @param int $AdditionalServiceId
     */
    public function setAdditionalServiceId($AdditionalServiceId)
    {
        $this->AdditionalServiceId = $AdditionalServiceId;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * @param int $Quantity
     */
    public function setQuantity($Quantity)
    {
        $this->Quantity = $Quantity;
    }

    /**
     * @param int $AdditionalServiceId
     * @access public
     */
//    public function __construct($AdditionalServiceId)
//    {
//      $this->AdditionalServiceId = $AdditionalServiceId;
//    }

}
