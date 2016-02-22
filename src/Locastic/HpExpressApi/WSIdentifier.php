<?php
namespace Locastic\HpExpressApi;

class WSIdentifier
{

    /**
     * @var int $Id
     * @access public
     */
    public $Id = null;

    /**
     * @var string $Name
     * @access public
     */
    public $Name = null;

    /**
     * @param int $Id
     * @param string $Name
     *
     * @access public
     */
    public function __construct($Id, $Name)
    {
        $this->Id = $Id;
        $this->Name = $Name;
    }

}
