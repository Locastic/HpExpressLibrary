<?php
namespace Locastic\HpExpressApi;

class AdditionalService
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
     * @param int $AdditionalServiceId
     * @access public
     */
    public function __construct($AdditionalServiceId)
    {
      $this->AdditionalServiceId = $AdditionalServiceId;
    }

}
