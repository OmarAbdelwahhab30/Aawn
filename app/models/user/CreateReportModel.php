<?php

namespace PHPMVC\models\user;

use PHPMVC\lib\Database;

class CreateReportModel
{


    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getReportsSpecialization()
    {
        $this->db->query("SELECT * FROM admin_specialization");

        if ($this->db->execute()) {
            return $this->db->resultSet();
        }
        return [];
    }

    public function getSpecializationByID($id)
    {
        $this->db->query("SELECT * FROM admin_specialization WHERE id =:id ");

        $this->db->bindValues(":id", $id);

        $this->db->execute();

        if ($this->db->rowCount() > 0) {
            return $this->db->single();
        }
        return [];
    }

    public function addReportToDB(array $data): bool
    {
        $this->db->query("INSERT INTO reports (description,	date_reported,	status,	location,	attachment,	user_id	,specialization_id)
                        VALUES (:description,:date_reported,:status,:location,:attachment,:user_id,:specialization_id)");

        $this->db->bindValues(":description", $data['info']);
        $this->db->bindValues(":date_reported", date("Y-m-d"));
        $this->db->bindValues(":status", "في انتظار الاعتماد");
        $this->db->bindValues(":location", $data['location']);
        $this->db->bindValues(":attachment", $data['file']);
        $this->db->bindValues(":user_id", $_SESSION['user']->id);
        $this->db->bindValues(":specialization_id", $data['spec_id']);

        if ($this->db->execute()) {
            return true;
        }
        return false;
    }
}