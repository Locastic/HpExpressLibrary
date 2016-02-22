<?php
namespace Locastic\HpExpressApi;

class GetPackageScansResponse
{

    /**
     * @var WSGetPackageScansResponse[] $GetPackageScansResult
     * @access public
     */
    public $GetPackageScansResult = null;

    /**
     * @param WSGetPackageScansResponse[] $GetPackageScansResult
     *
     * @access public
     */
    public function __construct($GetPackageScansResult)
    {
        $this->GetPackageScansResult = $GetPackageScansResult;
    }

}
