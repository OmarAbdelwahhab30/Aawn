<?php

namespace PHPMVC\controllers\user;

use PHPMVC\lib\AbstractController;

class CurrentReportsController extends AbstractController
{

    private mixed $dbHandler;

    public function __construct()
    {
        $this->dbHandler = $this->Model("user.CurrentReportsModel");
    }

    public function index(){
        $currentReports = $this->dbHandler->getCurrentReports();
        $this->Route("user.current-reports",$currentReports);
    }
}