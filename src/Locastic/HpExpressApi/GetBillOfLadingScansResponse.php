<?php
namespace Locastic\HpExpressApi;

class GetBillOfLadingScansResponse
{

    /**
     * @var WSGetBillOfLadingScansResponse[] $GetBillOfLadingScansResult
     * @access public
     */
    public $GetBillOfLadingScansResult = null;

    /**
     * @param WSGetBillOfLadingScansResponse[] $GetBillOfLadingScansResult
     *
     * @access public
     */
    public function __construct($GetBillOfLadingScansResult)
    {
        $this->GetBillOfLadingScansResult = $GetBillOfLadingScansResult;
    }

}
