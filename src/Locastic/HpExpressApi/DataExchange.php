<?php
namespace Locastic\HpExpressApi;

//include_once('CreateShipmentOrders.php');
//include_once('ShipmentOrder.php');
//include_once('AdditionalService.php');
//include_once('Package.php');
//include_once('EnumBarcodeType.php');
//include_once('EnumTime.php');
//include_once('CreateShipmentOrdersResponse.php');
//include_once('WSCreateShipmentOrdersResponse.php');
//include_once('EnumResponseStatus.php');
//include_once('AuthentificationHeader.php');
//include_once('GetPackageScans.php');
//include_once('GetPackageScansResponse.php');
//include_once('WSGetPackageScansResponse.php');
//include_once('PackageScan.php');
//include_once('GetShipmentOrders.php');
//include_once('ClientReferenceNumber.php');
//include_once('GetShipmentOrdersResponse.php');
//include_once('WSGetShipmentOrdersResponse.php');
//include_once('GetBillOfLadingScans.php');
//include_once('GetBillOfLadingScansResponse.php');
//include_once('WSGetBillOfLadingScansResponse.php');
//include_once('BillOfLadingScan.php');
//include_once('GetDeliveryTypes.php');
//include_once('GetDeliveryTypesResponse.php');
//include_once('WSIdentifier.php');
//include_once('GetPaymentTypes.php');
//include_once('GetPaymentTypesResponse.php');
//include_once('GetMainServices.php');
//include_once('GetMainServicesResponse.php');
//include_once('GetContents.php');
//include_once('GetContentsResponse.php');
//include_once('GetCashPaymentTypes.php');
//include_once('GetCashPaymentTypesResponse.php');
//include_once('GetAdditionalServices.php');
//include_once('GetAdditionalServicesResponse.php');

class DataExchange extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     * @access private
     */
    private static $classmap = array(
        'CreateShipmentOrders' => 'Locastic\HpExpressApi\CreateShipmentOrders',
        'ShipmentOrder' => 'Locastic\HpExpressApi\ShipmentOrder',
        'AdditionalService' => 'Locastic\HpExpressApi\AdditionalService',
        'Package' => 'Locastic\HpExpressApi\Package',
        'CreateShipmentOrdersResponse' => 'Locastic\HpExpressApi\CreateShipmentOrdersResponse',
        'WSCreateShipmentOrdersResponse' => 'Locastic\HpExpressApi\WSCreateShipmentOrdersResponse',
        'AuthentificationHeader' => 'Locastic\HpExpressApi\AuthentificationHeader',
        'GetPackageScans' => 'Locastic\HpExpressApi\GetPackageScans',
        'GetPackageScansResponse' => 'Locastic\HpExpressApi\GetPackageScansResponse',
        'WSGetPackageScansResponse' => 'Locastic\HpExpressApi\WSGetPackageScansResponse',
        'PackageScan' => 'Locastic\HpExpressApi\PackageScan',
        'GetShipmentOrders' => 'Locastic\HpExpressApi\GetShipmentOrders',
        'ClientReferenceNumber' => 'Locastic\HpExpressApi\ClientReferenceNumber',
        'GetShipmentOrdersResponse' => 'Locastic\HpExpressApi\GetShipmentOrdersResponse',
        'WSGetShipmentOrdersResponse' => 'Locastic\HpExpressApi\WSGetShipmentOrdersResponse',
        'GetBillOfLadingScans' => 'Locastic\HpExpressApi\GetBillOfLadingScans',
        'GetBillOfLadingScansResponse' => 'Locastic\HpExpressApi\GetBillOfLadingScansResponse',
        'WSGetBillOfLadingScansResponse' => 'Locastic\HpExpressApi\WSGetBillOfLadingScansResponse',
        'BillOfLadingScan' => 'Locastic\HpExpressApi\BillOfLadingScan',
        'GetDeliveryTypes' => 'Locastic\HpExpressApi\GetDeliveryTypes',
        'GetDeliveryTypesResponse' => 'Locastic\HpExpressApi\GetDeliveryTypesResponse',
        'WSIdentifier' => 'Locastic\HpExpressApi\WSIdentifier',
        'GetPaymentTypes' => 'Locastic\HpExpressApi\GetPaymentTypes',
        'GetPaymentTypesResponse' => 'Locastic\HpExpressApi\GetPaymentTypesResponse',
        'GetMainServices' => 'Locastic\HpExpressApi\GetMainServices',
        'GetMainServicesResponse' => 'Locastic\HpExpressApi\GetMainServicesResponse',
        'GetContents' => 'Locastic\HpExpressApi\GetContents',
        'GetContentsResponse' => 'Locastic\HpExpressApi\GetContentsResponse',
        'GetCashPaymentTypes' => 'Locastic\HpExpressApi\GetCashPaymentTypes',
        'GetCashPaymentTypesResponse' => 'Locastic\HpExpressApi\GetCashPaymentTypesResponse',
        'GetAdditionalServices' => 'Locastic\HpExpressApi\GetAdditionalServices',
        'GetAdditionalServicesResponse' => 'Locastic\HpExpressApi\GetAdditionalServicesResponse');

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     *
     * @access public
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
        $wsdl = __DIR__ . '/DataExchange.wsdl';

        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }

        parent::__construct($wsdl, $options);
    }

    /**
     * @param CreateShipmentOrders $parameters
     *
     * @access public
     * @return CreateShipmentOrdersResponse
     */
    public function CreateShipmentOrders(CreateShipmentOrders $parameters)
    {
        return $this->__soapCall('CreateShipmentOrders', array($parameters));
    }

    /**
     * @param GetPackageScans $parameters
     *
     * @access public
     * @return GetPackageScansResponse
     */
    public function GetPackageScans(GetPackageScans $parameters)
    {
        return $this->__soapCall('GetPackageScans', array($parameters));
    }

    /**
     * @param GetShipmentOrders $parameters
     *
     * @access public
     * @return GetShipmentOrdersResponse
     */
    public function GetShipmentOrders(GetShipmentOrders $parameters)
    {
        return $this->__soapCall('GetShipmentOrders', array($parameters));
    }

    /**
     * @param GetBillOfLadingScans $parameters
     *
     * @access public
     * @return GetBillOfLadingScansResponse
     */
    public function GetBillOfLadingScans(GetBillOfLadingScans $parameters)
    {
        return $this->__soapCall('GetBillOfLadingScans', array($parameters));
    }

    /**
     * @param GetDeliveryTypes $parameters
     *
     * @access public
     * @return GetDeliveryTypesResponse
     */
    public function GetDeliveryTypes(GetDeliveryTypes $parameters)
    {
        return $this->__soapCall('GetDeliveryTypes', array($parameters));
    }

    /**
     * @param GetPaymentTypes $parameters
     *
     * @access public
     * @return GetPaymentTypesResponse
     */
    public function GetPaymentTypes(GetPaymentTypes $parameters)
    {
        return $this->__soapCall('GetPaymentTypes', array($parameters));
    }

    /**
     * @param GetMainServices $parameters
     *
     * @access public
     * @return GetMainServicesResponse
     */
    public function GetMainServices(GetMainServices $parameters)
    {
        return $this->__soapCall('GetMainServices', array($parameters));
    }

    /**
     * @param GetContents $parameters
     *
     * @access public
     * @return GetContentsResponse
     */
    public function GetContents(GetContents $parameters)
    {
        return $this->__soapCall('GetContents', array($parameters));
    }

    /**
     * @param GetCashPaymentTypes $parameters
     *
     * @access public
     * @return GetCashPaymentTypesResponse
     */
    public function GetCashPaymentTypes(GetCashPaymentTypes $parameters)
    {
        return $this->__soapCall('GetCashPaymentTypes', array($parameters));
    }

    /**
     * @param GetAdditionalServices $parameters
     *
     * @access public
     * @return GetAdditionalServicesResponse
     */
    public function GetAdditionalServices(GetAdditionalServices $parameters)
    {
        return $this->__soapCall('GetAdditionalServices', array($parameters));
    }

}
