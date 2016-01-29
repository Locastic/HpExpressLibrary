<?php
namespace Locastic\HpExpressApi;

class ClientReferenceNumber
{

    /**
     * @var string $Number
     * @access public
     */
    public $Number = null;

    /**
     * @param string $Number
     * @access public
     */
    public function __construct($Number)
    {
      $this->Number = $Number;
    }

}
