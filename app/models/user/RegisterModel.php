<?php

namespace PHPMVC\models\user;

use PHPMVC\lib\Database;

class RegisterModel
{


    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function register(array $data): bool
    {
        $this->db->query("INSERT INTO users (username,phone_number,password) VALUES (:username,:phone,:password)");

        $this->db->bindValues(":username", $data['username']);

        $this->db->bindValues(":phone", $data['phone']);

        $this->db->bindValues(":password", $data['password']);


        if ($this->db->execute()) {
            return true;
        }
        return false;
    }

    public function getUser($username){
        $this->db->query("SELECT * FROM users WHERE username=:username");

        $this->db->bindValues(":username", $username);

        $this->db->execute();
        if ($this->db->rowCount() > 0) {
            return $this->db->single();
        }
        return false;
        }
    }