<?php
namespace Locastic\HpExpressApi;

class GetDeliveryTypesResponse
{

    /**
     * @var WSIdentifier[] $GetDeliveryTypesResult
     * @access public
     */
    public $GetDeliveryTypesResult = null;

    /**
     * @param WSIdentifier[] $GetDeliveryTypesResult
     *
     * @access public
     */
    public function __construct($GetDeliveryTypesResult)
    {
        $this->GetDeliveryTypesResult = $GetDeliveryTypesResult;
    }

}
