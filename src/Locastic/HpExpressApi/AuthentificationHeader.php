<?php
namespace Locastic\HpExpressApi;

class AuthentificationHeader
{

    /**
     * @var string $UserName
     * @access public
     */
    public $UserName = null;

    /**
     * @var string $Password
     * @access public
     */
    public $Password = null;

    /**
     * @param string $UserName
     * @param string $Password
     *
     * @access public
     */
    public function __construct($UserName, $Password)
    {
        $this->UserName = $UserName;
        $this->Password = $Password;
    }

}
