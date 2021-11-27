<?php

namespace app\models;

class Contractor extends \app\core\Model {
    public $contractor_id;
    public $company_name;
    

    public function __construct()
    {
        parent::__construct();
    }

    // public function get($username)
    // {
    //     $SQL = 'SELECT * FROM user WHERE username LIKE :username';
    //     $STMT = self::$_connection->prepare($SQL);
    //     $STMT->execute(['username' => $username]);
    //     $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\User');
    //     return $STMT->fetch(); //return the record
    // }

    public function getAllContractors()
    {
        $SQL = 'SELECT * FROM contractor';
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute();
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\Contractor');
        return $STMT->fetchAll(); //return the record
    }

    public function getContractorByName($company_name) {
        $SQL = 'SELECT * FROM contractor where company_name = :company_name';
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['company_name' => $company_name]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\Contractor');
        return $STMT->fetch(); //return the record
    }

    public function insert()
    {
        $SQL = 'INSERT INTO contractor(company_name) VALUES (:company_name)';
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['company_name' => $this->company_name]); //associative array with key => value pairs
    }
}