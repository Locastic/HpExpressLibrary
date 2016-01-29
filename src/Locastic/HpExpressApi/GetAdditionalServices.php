<?php
namespace Locastic\HpExpressApi;

class GetAdditionalServices
{

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
     * @param string $username
     * @param string $password
     * @access public
     */
    public function __construct($username, $password)
    {
      $this->username = $username;
      $this->password = $password;
    }

}
