<?php
namespace Locastic\HpExpressApi;

class BillOfLadingScan
{

    /**
     * @var string $Scan
     * @access public
     */
    public $Scan = null;

    /**
     * @var string $ScanDescription
     * @access public
     */
    public $ScanDescription = null;

    /**
     * @var dateTime $ScanTime
     * @access public
     */
    public $ScanTime = null;

    /**
     * @var string $Center
     * @access public
     */
    public $Center = null;

    /**
     * @var string $Comment
     * @access public
     */
    public $Comment = null;

    /**
     * @param string $Scan
     * @param string $ScanDescription
     * @param dateTime $ScanTime
     * @param string $Center
     * @param string $Comment
     *
     * @access public
     */
    public function __construct($Scan, $ScanDescription, $ScanTime, $Center, $Comment)
    {
        $this->Scan = $Scan;
        $this->ScanDescription = $ScanDescription;
        $this->ScanTime = $ScanTime;
        $this->Center = $Center;
        $this->Comment = $Comment;
    }

}
