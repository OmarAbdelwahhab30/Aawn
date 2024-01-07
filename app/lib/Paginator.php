<?php

namespace PHPMVC\lib;

use PHPMVC\models\admin\HomeModel;

class Paginator extends AbstractController
{


    /*
     *
     * There is join or not
     * */

    /**
     * records per page
     */
    public  const   RECORDS_PER_PAGE =6;
    /**
     * @var mixed
     */
    private $ModelHelper;
    /**
     * @var false|float
     */
    private $RecordsNum;

    public $PagesNum;


    public $JoinTablesNum;
    private $PageParameter;

    private $TableName;

    public $JoinInfo = array();

    protected $Data = array();

    public function __construct($tablename,$columnname,$condition,$PageNumber,$JoinInfo = array())
    {
        $this->ModelHelper = (new HomeModel())->CountTableRows($tablename,$columnname,$condition);

        $this->RecordsNum = $this->ModelHelper->count;

        $this->PagesNum = ceil($this->RecordsNum / self::RECORDS_PER_PAGE);

        $this->PageParameter = $PageNumber;

        $this->TableName = $tablename;

        $this->JoinTablesNum = $JoinInfo['TablesNum'];

        $this->JoinInfo = $JoinInfo;

        $this->PaginationController();

    }

    public function PaginationController()
    {
        $FromWhichRecord = ($this->PageParameter - 1) * self::RECORDS_PER_PAGE ;
        $Data = (new HomeModel())->PaginationHelper($this->TableName,$FromWhichRecord,$this->JoinInfo);
        $this->Data = $Data;
    }

    public function Paginate()
    {
        return $this->Data;
    }

    public function GetPagesNum()
    {
        return $this->PagesNum;
    }

}