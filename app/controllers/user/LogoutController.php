<?php

namespace PHPMVC\controllers\user;

use PHPMVC\lib\AbstractController;

class LogoutController extends AbstractController
{

    public function logout(){
        session_unset();
        session_destroy();
        header("location:".URLROOT."user/LoginController/index");
        exit();
    }
}