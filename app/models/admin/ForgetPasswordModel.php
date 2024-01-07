<?php

namespace PHPMVC\models\admin;

use PHPMVC\lib\Database;

class ForgetPasswordModel
{

    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

}