<?php

namespace PHPMVC\models\admin;

use PHPMVC\lib\Database;

class ResetPasswordModel
{

    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function resetPassword($password,$email): bool
    {
        $this->db->query("UPDATE admins SET password = :password WHER email = :email");

        $this->db->bindValues(":password", $password);


        $this->db->bindValues(":email", $email);

        if ($this->db->execute()) {
            return true;
        }
        return false;
    }
}