<?php
namespace Locastic\HpExpressApi;

class GetCashPaymentTypesResponse
{

    /**
     * @var WSIdentifier[] $GetCashPaymentTypesResult
     * @access public
     */
    public $GetCashPaymentTypesResult = null;

    /**
     * @param WSIdentifier[] $GetCashPaymentTypesResult
     *
     * @access public
     */
    public function __construct($GetCashPaymentTypesResult)
    {
        $this->GetCashPaymentTypesResult = $GetCashPaymentTypesResult;
    }

}
