<?php
namespace Locastic\HpExpressApi;

class GetShipmentOrders
{

    /**
     * @var ClientReferenceNumber[] $clientReferenceNumbers
     * @access public
     */
    public $clientReferenceNumbers = null;

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
     * @param ClientReferenceNumber[] $clientReferenceNumbers
     * @param string $username
     * @param string $password
     *
     * @access public
     */
    public function __construct($clientReferenceNumbers, $username, $password)
    {
        $this->clientReferenceNumbers = $clientReferenceNumbers;
        $this->username = $username;
        $this->password = $password;
    }

}
