<?php

namespace PHPMVC\controllers\admin;

class LogoutController
{

    public function logout(){
        session_unset();
        session_destroy();
        header("location:".URLROOT."admin/LoginController/index");
        exit();
    }
}