<?php
namespace Locastic\HpExpressApi;

class GetMainServicesResponse
{

    /**
     * @var WSIdentifier[] $GetMainServicesResult
     * @access public
     */
    public $GetMainServicesResult = null;

    /**
     * @param WSIdentifier[] $GetMainServicesResult
     *
     * @access public
     */
    public function __construct($GetMainServicesResult)
    {
        $this->GetMainServicesResult = $GetMainServicesResult;
    }

}
