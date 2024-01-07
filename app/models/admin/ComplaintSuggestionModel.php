<?php

namespace PHPMVC\models\admin;

use PHPMVC\lib\Database;

class ComplaintSuggestionModel
{

    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }


    public function getComlaintOrSuggestionById($Id)
    {
        $this->db->join('complaints_suggestions.id,complaints_suggestions.date,users.username,complaints_suggestions.attachment,
        complaints_suggestions.location,
        complaints_suggestions.description',
            "complaints_suggestions",
            "users",
            "complaints_suggestions.user_id = users.id AND complaints_suggestions.id= :id");
        $this->db->bindValues(":id", $Id);
        $this->db->execute();
        if ($this->db->rowCount() > 0) {
            return $this->db->single();
        }
        return [];
    }

    public function addReplyToDB($reply,$complaint_suggestion_id): bool
    {
        $this->db->query("INSERT INTO replies (reply,complaint_suggestion_id) VALUES (:reply,:complaint_suggestion_id)");

        $this->db->bindValues(":reply",$reply);

        $this->db->bindValues(":complaint_suggestion_id",$complaint_suggestion_id);

        if ($this->db->execute()){
            return true;
        }
        return false;
    }
}