<?php

namespace PHPMVC\models\user;

use PHPMVC\lib\Database;

class CurrentReportsModel
{

    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getCurrentReports()
    {
        $this->db->join('*',
            "reports",
            "admin_specialization",
            "reports.specialization_id = admin_specialization.id",null,null," user_id =:user_id AND status <> :status");

        $this->db->bindValues(":user_id", $_SESSION['user']->id);
        $this->db->bindValues(":status","مغلق");



        if ($this->db->execute()) {
            return $this->db->resultSet();
        }
        return [];
    }
}