<?php

namespace PHPMVC\controllers\user;

use PHPMVC\lib\AbstractController;

class PreviousReportsController extends AbstractController
{

    private mixed $dbHandler;

    public function __construct()
    {
        $this->dbHandler = $this->Model("user.PreviousReportsModel");
    }

    public function index(){
        $previousReports = $this->dbHandler->getPreviousReports();
        $this->Route("user.previous-reports",$previousReports);
    }
}