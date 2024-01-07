<?php

namespace PHPMVC\models\admin;

use PHPMVC\lib\Database;

class LoginModel
{


    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function login($email, $password)
    {
        $this->db->join('*',
            "admins",
            "admin_specialization",
            "admins.spec_id = admin_specialization.id AND email = :email AND password = :password");

        $this->db->bindValues(":email", $email);

        $this->db->bindValues(":password", $password);

        $this->db->execute();

        if ($this->db->rowCount() > 0) {
            return $this->db->single();
        }
        return false;
    }
}