<?php

namespace PHPMVC\models\admin;

use PHPMVC\lib\Database;

class ReportsModel
{

    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllReports()
    {
        $this->db->join('reports.status,reports.date_reported,users.username,attachment',
            "reports",
            "users",
            "reports.user_id = users.id", "admin_specialization", "reports.specialization_id = admin_specialization.id");

        $this->db->execute();

        if ($this->db->rowCount() > 0) {
            return $this->db->resultSet();
        }
        return false;
    }

    public function getReportById($reportId)
    {
        $this->db->join('reports.id,reports.status,reports.date_reported,users.username,attachment,reports.location,reports.description',
            "reports",
            "users",
            " reports.id = :id AND reports.user_id = users.id ", "admin_specialization", "reports.specialization_id = admin_specialization.id");
        $this->db->bindValues(":id", $reportId);
        $this->db->execute();
        if ($this->db->rowCount() > 0) {
            return $this->db->resultSet();
        }
        return [];
    }

    public function updateReportStatus($reportId, $status): bool
    {
        $status = urldecode($status);
        $this->db->query("UPDATE reports SET status = :status WHERE id = :id");
        $this->db->bindValues(":status",$status);
        $this->db->bindValues(":id",$reportId);

        if ($this->db->execute()) {
            return true;
        }
        return false;

    }

}