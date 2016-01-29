<?php
namespace Locastic\HpExpressApi;

class GetAdditionalServicesResponse
{

    /**
     * @var WSIdentifier[] $GetAdditionalServicesResult
     * @access public
     */
    public $GetAdditionalServicesResult = null;

    /**
     * @param WSIdentifier[] $GetAdditionalServicesResult
     * @access public
     */
    public function __construct($GetAdditionalServicesResult)
    {
      $this->GetAdditionalServicesResult = $GetAdditionalServicesResult;
    }

}
