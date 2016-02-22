<?php
namespace Locastic\HpExpressApi;

class GetContentsResponse
{

    /**
     * @var WSIdentifier[] $GetContentsResult
     * @access public
     */
    public $GetContentsResult = null;

    /**
     * @param WSIdentifier[] $GetContentsResult
     *
     * @access public
     */
    public function __construct($GetContentsResult)
    {
        $this->GetContentsResult = $GetContentsResult;
    }

}
