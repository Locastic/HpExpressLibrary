<?php
namespace Locastic\HpExpressApi;

/**
 * Class Api
 *
 * @package Locastic\HpExpressApi
 */
class Api
{
    /**
     * @var string $username
     */
    private $username;

    /**
     * @var string $password
     */
    private $password;

    /**
     * @var string $authHeadUsername
     */
    private $authHeadUsername;

    /**
     * @var string $authHeadPassword
     */
    private $authHeadPassword;

    /**
     * @var string $location
     */
    private $location;

    /**
     * @var string $namespace
     */
    private $namespace;

    /**
     * Api constructor.
     *
     * @param $username
     * @param $password
     * @param $authHeadUsername
     * @param $authHeadPassword
     * @param $location
     * @param $namespace
     *
     */
    public function __construct($username, $password, $authHeadUsername, $authHeadPassword, $location, $namespace)
    {
        $this->username = $username;
        $this->password = $password;
        $this->authHeadUsername = $authHeadUsername;
        $this->authHeadPassword = $authHeadPassword;
        $this->location = $location;
        $this->namespace = $namespace;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    public function getNamespace()
    {
        return $this->namespace;
    }


    /**
     * @param CreateShipmentOrders $createShipmentOrders
     *
     * @return mixed|string
     */
    public function createShipmentOrders(CreateShipmentOrders $createShipmentOrders)
    {
        $response = $this->sendRequest('CreateShipmentOrders', $createShipmentOrders->getAsSOAP());

        $response = $response
            ->CreateShipmentOrdersResult
            ->WSCreateShipmentOrdersResponse
            ;

        return $response;
    }

    /**
     * @param GetAdditionalServices $getAdditionalServices
     *
     * @return mixed|string
     */
    public function getAdditionalServices(GetAdditionalServices $getAdditionalServices)
    {
        $response = $this->object_to_array(
            $this->sendRequest('GetAdditionalServices', $getAdditionalServices)
                ->GetAdditionalServicesResult
                ->WSIdentifier
        );

        return new GetAdditionalServicesResponse($response);
    }

    /**
     * @param GetBillOfLadingScans $getBillOfLadingScans
     *
     * @return mixed|string
     */
    public function getBillOfLadingScans(GetBillOfLadingScans $getBillOfLadingScans)
    {
        $response = $this->object_to_array(
            $this->sendRequest('GetBillOfLadingScans', $getBillOfLadingScans)
            ->GetBillOfLadingScansResult
            ->WSGetBillOfLadingScansResponse
        );

        return $response;
    }

    /**
     * @param GetCashPaymentTypes $getCashPaymentTypes
     *
     * @return mixed|string
     */
    public function getCashPaymentTypes(GetCashPaymentTypes $getCashPaymentTypes)
    {
        $response = $this->object_to_array(
            $this->sendRequest('GetCashPaymentTypes', $getCashPaymentTypes)
                ->GetCashPaymentTypesResult
                ->WSIdentifier
        );

        return new GetCashPaymentTypesResponse($response);
    }

    /**
     * @param GetContents $getContents
     *
     * @return mixed|string
     */
    public function getContents(GetContents $getContents)
    {
        $response = $this->object_to_array(
            $this->sendRequest('GetContents', $getContents)
                ->GetContentsResult
                ->WSIdentifier
        );

        return new GetContentsResponse($response);
    }

    /**
     * @param GetDeliveryTypes $getDeliveryTypes
     *
     * @return mixed|string
     */
    public function getDeliveryTypes(GetDeliveryTypes $getDeliveryTypes)
    {
        $response = $this->object_to_array(
            $this->sendRequest('GetDeliveryTypes', $getDeliveryTypes)
                ->GetDeliveryTypesResult
                ->WSIdentifier
        );

        return new GetDeliveryTypesResponse($response);
    }


    /**
     * @param GetMainServices $getMainServices
     *
     * @return mixed|string
     */
    public function getMainServices(GetMainServices $getMainServices)
    {
        $response = $this->object_to_array(
            $this->sendRequest('GetMainServices', $getMainServices)
                ->GetMainServicesResult
                ->WSIdentifier
        );

        return new GetMainServicesResponse($response);
    }

    /**
     * @param GetPackageScans $getPackageScans
     *
     * @return mixed|string
     */
    public function getPackageScans(GetPackageScans $getPackageScans)
    {
        $response = $this->object_to_array(
            $this->sendRequest('GetPackageScans', $getPackageScans)
                ->GetPackageScansResult
                ->WSGetPackageScansResponse
        );

        return new GetPackageScansResponse($response);
    }

    /**
     * @param GetPaymentTypes $getPaymentTypes
     *
     * @return mixed|string
     */
    public function getPaymentTypes(GetPaymentTypes $getPaymentTypes)
    {
        $response = $this->object_to_array(
            $this->sendRequest('GetPaymentTypes', $getPaymentTypes)
                ->GetPaymentTypesResult
                ->WSIdentifier
        );

        return new GetPaymentTypesResponse($response);
    }

    /**
     * @param GetShipmentOrders $getShipmentOrders
     *
     * @return mixed|string
     */
    public function getShipmentOrders(GetShipmentOrders $getShipmentOrders)
    {
        $response = $this->object_to_array(
            $this->sendRequest('GetShipmentOrders', $getShipmentOrders)
                ->GetShipmentOrdersResult
                ->WSGetShipmentOrdersResponse
        );

        return $response;
    }

    /**
     * @param $functionName
     * @param $args
     *
     * @return mixed|string
     */
    private function sendRequest($functionName, $args)
    {
        $wsdl = $this->location . '?wsdl';
        $soapClient = new \SoapClient(
            $wsdl,
            array(
                'location' => $this->location,
                'trace' => 1,
                'uri' => $this->location,
            )
        );

        $headerBody = array(
            'UserName' => $this->authHeadUsername,
            'Password' => $this->authHeadPassword,
        );

        $header = new \SoapHeader(
            $this->namespace,
            'AuthentificationHeader',
            $headerBody
        );

        $options = array(
            'namespace' => $this->namespace,
        );

        $response = $soapClient->__soapCall($functionName, array($args), $options, $header);

        return $response;
    }

    public function object_to_array($obj)
    {
        if (is_object($obj)) $obj = (array)$obj;
        if (is_array($obj)) {
            $new = array();
            foreach ($obj as $key => $val) {
                $new[$key] = $this->object_to_array($val);
            }
        } else $new = $obj;

        return $new;
    }

}