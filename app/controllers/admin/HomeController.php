<?php

namespace PHPMVC\controllers\admin;

use PHPMVC\lib\AbstractController;

class HomeController extends AbstractController
{

    private $homeModel;

    public function __construct()
    {

        if (!isset($_SESSION['admin'])){
            header("location:".URLROOT."admin/LoginController/index");
            exit();
        }
        $this->homeModel = $this->Model("admin.HomeModel");
    }

    public function index()
    {

        $data['counts'] = $this->homeModel->getHomeNumbers();
        $data['reports'] = $this->homeModel->getHomeReports();
        $data['ComplaintsSuggestions'] = $this->homeModel->getHomeComplaintsSuggestions();
        $this->Route("admin.index",$data);
    }
}