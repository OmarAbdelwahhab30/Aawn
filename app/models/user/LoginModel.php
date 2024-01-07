<?php

namespace PHPMVC\models\user;

use PHPMVC\lib\Database;

class LoginModel
{


    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function login(array $data){
        $this->db->query("SELECT * FROM users WHERE phone_number=:phone AND password = :password");

        $this->db->bindValues(":phone", $data['phone']);

        $this->db->bindValues(":password", $data['password']);

        $this->db->execute();

        if ($this->db->rowCount() > 0) {
            return $this->db->single();
        }
        return [];
        }
    }