<?php

namespace PHPMVC\controllers\admin;

use PHPMVC\lib\AbstractController;
use PHPMVC\lib\Paginator;

class ReportsController extends AbstractController
{


    private  $PaginatorInstance  ;

    const TABLE_NAME = "reports" ;

    private $PagesNum;

    private  $ReportsModel;



    public function __construct()
    {
        if (!isset($_SESSION['data'])){
            header("location:".URLROOT."admin/LoginController/index");
            exit();
        }
        $this->ReportsModel = $this->Model("admin.ReportsModel");
    }


    public function PaginationHandler($page)
    {
        $JoinInfo = [
            "Join"      => true,
            "TablesNum" => 2,
            "table1"    => self::TABLE_NAME,
            "table2"    => "users",
            "table3"    => "admin_specialization",
            "cond1"     => " reports.user_id = users.id",
            "cond2"     => "reports.specialization_id = admin_specialization.id ",
            "ColsName"  => " reports.status,reports.date_reported,users.username,attachment,reports.id",
            "where"     => "reports.specialization_id = " .$_SESSION['data']->spec_id,
        ];
        $this->PaginatorInstance = new Paginator(self::TABLE_NAME,"id",$JoinInfo['where'],$page,$JoinInfo);
        $this->PagesNum = $this->PaginatorInstance->GetPagesNum();
    }

    public function index($page)
    {
        $this->PaginationHandler($page);
        $data['reports'] = $this->PaginatorInstance->Paginate();
        $data['PagesNum'] = $this->PagesNum;
        $this->Route("admin.reports",$data);
    }

    public function viewReport($reportId){
        $data['report'] = $this->ReportsModel->getReportById($reportId);
        $this->Route("admin.preview-report",$data);
    }

    public function updateReportStatus($reportID,$status){
        if ($this->ReportsModel->updateReportStatus($reportID,$status)) {
            $_SESSION['success'] = "تم تحديث حالة البلاغ بنجاح.";
            header("location:".URLROOT."admin/ReportsController/viewReport/".$reportID);
            exit();
        }

        $_SESSION['error'] = "حدث خطأ ما , من فضلك أعد المحاولة.";
        header("location:".URLROOT."admin/ReportsController/viewReport/".$reportID);
        exit();
    }
}