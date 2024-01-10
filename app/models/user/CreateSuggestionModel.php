<?php

namespace PHPMVC\models\user;

use PHPMVC\lib\Database;

class CreateSuggestionModel
{


    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function addSuggestionToDB(array $data): bool
    {
        $this->db->query("INSERT INTO complaints_suggestions (description,date, location,	attachment,	user_id	)
                        VALUES (:description,:date,:location,:attachment,:user_id)");

        $this->db->bindValues(":description", $data['info']);
        $this->db->bindValues(":date", date("Y-m-d"));
        $this->db->bindValues(":location", $data['location']);
        $this->db->bindValues(":attachment", $data['file']);
        $this->db->bindValues(":user_id", $_SESSION['user']->id);

        if ($this->db->execute()) {
            return true;
        }
        return false;
    }

    public function getPreviousComplaintSuggestions()
    {
        $this->db->query("SELECT * FROM complaints_suggestions WHERE user_id = :user_id");
        $this->db->bindValues(":user_id", $_SESSION['user']->id);
        if ($this->db->execute()) {
            return $this->db->resultSet();
        }
        return [];
    }

    public function getSpecificSuggestionByID($id)
    {
        $this->db->join('*',
            "complaints_suggestions",
            "replies",
            "complaints_suggestions.id = replies.complaint_suggestion_id",null,null," complaints_suggestions.id = :id AND complaints_suggestions.user_id=:user_id ");

        $this->db->bindValues(":id", $id);
        $this->db->bindValues(":user_id", $_SESSION['user']->id);
        if ($this->db->execute()) {
            return $this->db->single();
        }
        return [];
    }
}