<?php

namespace PHPMVC\lib;


use Doctrine\DBAL\DriverManager;
use Doctrine\DBAL\Exception;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Exception\MissingMappingDriverImplementation;
use Doctrine\ORM\ORMSetup;

class Database
{
    private $dbhostname = DB_HOST_NAME;
    private $dbname = DB_NAME;
    private $dbusername = DB_USER_NAME;
    private $dbpassword = DB_PASSWORD;

    private $dbhandler;
    private $error;
    private $statement;

    public function __construct()
    {

        try {
            $this->dbhandler = new \PDO('mysql://hostname=' . $this->dbhostname . ';dbname=' . $this->dbname, $this->dbusername,
                $this->dbpassword, array(
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                    \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",
                    \PDO::ATTR_PERSISTENT => true,
                ));
        } catch (\PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }

    public function query($sql)
    {
        $this->statement = $this->dbhandler->prepare($sql);
    }

    public function bindValues($parameter, $value, $type = null)
    {
        switch (is_null($type)) {
            case is_int($value):
                $type = \PDO::PARAM_INT;
                break;
            case is_bool($value):
                $type = \PDO::PARAM_BOOL;
                break;

            case is_null($value):
                $type = \PDO::PARAM_NULL;
                break;
            default:
                $type = \PDO::PARAM_STR;
        }
        $this->statement->bindValue($parameter, $value, $type);
    }

    public function execute()
    {
        return $this->statement->execute();
    }

    public function join($values, $table1, $table2, $condition1,$table3 = null,$condition2 = null)
    {
        $third = $table3 != null ? " CROSS JOIN $table3 ON $condition2 ":"";
        $this->query("SELECT $values
        FROM $table1
        CROSS JOIN $table2 ON $condition1".$third);
    }

    public function resultSet()
    {
        $this->execute();
        return $this->statement->fetchall(\PDO::FETCH_OBJ);
    }

    public function single()
    {
        $this->execute();
        return $this->statement->fetch(\PDO::FETCH_OBJ);
    }

    public function rowCount()
    {
        return $this->statement->rowCount();
    }

    public function prepareAndExecute($sql)
    {
        $this->statement = $this->dbhandler->query($sql);
    }


}
