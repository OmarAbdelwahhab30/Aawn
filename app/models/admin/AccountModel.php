<?php

namespace PHPMVC\models\admin;

use PHPMVC\lib\Database;

class AccountModel
{


    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function updateAccount($postData)
    {

        $this->db->query("UPDATE admins SET username = :username , email = :email , password = :password WHERE id = :id");

        $this->db->bindValues(":username", $postData['username']);

        $this->db->bindValues(":email", $postData['email']);

        $this->db->bindValues(":password", hash("sha256", $postData['password']));

        $this->db->bindValues(":id", $_SESSION['data']->id);

        if ($this->db->execute()) {
            return true;
        }
        return false;
    }

}