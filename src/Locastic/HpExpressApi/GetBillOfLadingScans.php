<?php
namespace Locastic\HpExpressApi;

class GetBillOfLadingScans
{

    /**
     * @var ClientReferenceNumber[] $clientReferenceNumberList
     * @access public
     */
    public $clientReferenceNumberList = null;

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
     * @param ClientReferenceNumber[] $clientReferenceNumberList
     * @param string $username
     * @param string $password
     * @access public
     */
    public function __construct($clientReferenceNumberList, $username, $password)
    {
      $this->clientReferenceNumberList = $clientReferenceNumberList;
      $this->username = $username;
      $this->password = $password;
    }

}
