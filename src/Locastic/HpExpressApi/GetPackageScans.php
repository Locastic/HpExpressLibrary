<?php
namespace Locastic\HpExpressApi;

class GetPackageScans
{

    /**
     * @var String[] $clientBarcodes
     * @access public
     */
    public $clientBarcodes = null;

    /**
     * @var string $username
     * @access public
     */
    public $username = null;

    /**
     * @var string $password
     * @access public
     */
    public $password = null;

    /**
     * @param String[] $clientBarcodes
     * @param string $username
     * @param string $password
     * @access public
     */
    public function __construct($clientBarcodes, $username, $password)
    {
      $this->clientBarcodes = $clientBarcodes;
      $this->username = $username;
      $this->password = $password;
    }

}
