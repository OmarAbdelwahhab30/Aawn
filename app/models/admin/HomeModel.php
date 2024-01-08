<?php

namespace PHPMVC\models\admin;

use PHPMVC\lib\Database;
use PHPMVC\lib\Paginator;

class HomeModel
{


    private $db;
    private $FromWhichRecord;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getHomeNumbers()
    {
        $this->db->query("SELECT COUNT(id)  AS counts FROM reports UNION ALL 
                              SELECT COUNT(id) AS counts FROM complaints_suggestions UNION ALL 
                              SELECT COUNT(id) AS counts FROM users ;");

        $this->db->execute();

        return $this->db->resultSet();
    }

    public function getHomeReports(){

        $this->db->query("SELECT * FROM reports WHERE specialization_id = ".$_SESSION['admin']->spec_id);

        if ($this->db->execute()){
            return $this->db->resultSet();
        }
        return [];
    }

    public function getHomeComplaintsSuggestions(){
        $this->db->query("SELECT * FROM complaints_suggestions");

        if ($this->db->execute()){
            return $this->db->resultSet();
        }
        return [];
    }

    public  function CountTableRows($tablename,$ColumnName,$condition)
    {
        $this->db->query("SELECT count($ColumnName) AS count FROM $tablename WHERE $condition ");

        $this->db->execute();

        if ($this->db->rowCount() > 0 ){
            return $this->db->single();
        }
        return 0;
    }

    public function PaginationHelper($TableName,$FromWhichRecord,$JoinInfo =array())
    {
        $this->FromWhichRecord = $FromWhichRecord;
        // if there is no join
        if ($JoinInfo['Join'] == false) {
            $this->db->query(" SELECT " .$JoinInfo['ColsName']. " FROM $TableName "." WHERE ".$JoinInfo['where']. " LIMIT ". ":FromWhichRecord" . ',' . ":RECORDS_PER_PAG");

            $this->db->bindValues(":FromWhichRecord",$FromWhichRecord);
            $this->db->bindValues(":RECORDS_PER_PAG",Paginator::RECORDS_PER_PAGE);

            $this->db->execute();

            if ($this->db->rowCount() > 0) {
                return $this->db->resultSet();
            }
            return 0;
        }else{
            return $this->JoinHelper($JoinInfo);
        }
    }

    public function JoinHelper($JoinInfo)
    {

        // join between 2 tables
        if ($JoinInfo['table3'] == "" ){
            $this->db->query("SELECT " .$JoinInfo['ColsName']. " FROM ". $JoinInfo['table1']."
                                   CROSS JOIN ".$JoinInfo['table2']." ON ".$JoinInfo['cond1']." WHERE ".$JoinInfo['where']."      
                                  LIMIT " . ":FromWhichRecord " . "," . " :RECORDS_PER_PAGE");
            $this->db->bindValues(":FromWhichRecord",$this->FromWhichRecord);
            $this->db->bindValues(":RECORDS_PER_PAGE",Paginator::RECORDS_PER_PAGE);
            $this->db->execute();
            if ($this->db->rowCount() > 0 ){
                return $this->db->resultSet();
            }
            return 0 ;
        }else{
            //join multi tables

            $this->db->query("SELECT ".$JoinInfo['ColsName']." FROM ". $JoinInfo['table1']."
                                  CROSS JOIN ".$JoinInfo['table2']." ON ".$JoinInfo['cond1']."      
                                  CROSS JOIN ".$JoinInfo['table3']." ON ".$JoinInfo['cond2']. " WHERE ".$JoinInfo['where']." 
                                   LIMIT :FromWhichRecord , :RECORDS_PER_PAGE");


            $this->db->bindValues(":FromWhichRecord",$this->FromWhichRecord);
            $this->db->bindValues(":RECORDS_PER_PAGE",Paginator::RECORDS_PER_PAGE);
            $this->db->execute();
            if ($this->db->rowCount() > 0) {
                return $this->db->resultSet();
            }
            return 0;
        }
    }
}