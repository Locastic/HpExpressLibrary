<?php
namespace Locastic\HpExpressApi;

class GetPaymentTypesResponse
{

    /**
     * @var WSIdentifier[] $GetPaymentTypesResult
     * @access public
     */
    public $GetPaymentTypesResult = null;

    /**
     * @param WSIdentifier[] $GetPaymentTypesResult
     *
     * @access public
     */
    public function __construct($GetPaymentTypesResult)
    {
        $this->GetPaymentTypesResult = $GetPaymentTypesResult;
    }

}
