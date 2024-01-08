<?php

namespace PHPMVC\controllers\user;

use PHPMVC\lib\AbstractController;

class MyReportsController extends AbstractController
{


    public function index(){
        $this->Route("user.my-reports");
    }
}