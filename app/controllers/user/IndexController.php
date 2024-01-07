<?php

namespace PHPMVC\controllers\user;

use PHPMVC\lib\AbstractController;

class IndexController extends AbstractController
{


    public function index(){
        $this->Route("user.index");
    }
}