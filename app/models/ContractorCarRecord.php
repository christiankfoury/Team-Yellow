<?php

namespace app\models;

class ContractorCarRecord extends \app\core\Model
{
    public $contractor_car_record_id;
    public $courtesy_number;
    public $car_specification;
    public $job_type;
    public $date;
    public $contractor_id;
    public $username;

    public function __construct()
    {
        parent::__construct();
    }

    public function getRecords()
    {
        $SQL = "SELECT * FROM contractor_car_record WHERE contractor_id = :contractor_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['contractor_id' => $this->contractor_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\ContractorCarRecord');
        return $STMT->fetchAll(); //return the record
    }

    public function getAll() {
        $SQL = "SELECT * FROM contractor_car_record";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute();
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\ContractorCarRecord');
        return $STMT->fetchAll(); //return the record
    }

    public function getRecordById($contractor_car_record_id) {
        $SQL = "SELECT * FROM contractor_car_record WHERE contractor_car_record_id = :contractor_car_record_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['contractor_car_record_id' => $contractor_car_record_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\ContractorCarRecord');
        return $STMT->fetch(); //return the record
    }

    public function addRecord() {
        $SQL = 'INSERT INTO contractor_car_record(courtesy_number, car_specification, job_type, date, contractor_id, username) VALUES 
        (:courtesy_number, :car_specification, :job_type, :date, :contractor_id, :username)';
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['courtesy_number' => $this->courtesy_number, 'car_specification' => $this->car_specification, 'job_type' => $this->job_type,
            'date' => $this->date, 'contractor_id' => $this->contractor_id, 'username' => $this->username]);
    }

    public function editRecord() {
        $SQL = 'UPDATE contractor_car_record SET courtesy_number = :courtesy_number, car_specification = :car_specification, job_type = :job_type, date = :date, username = :username WHERE contractor_car_record_id = :contractor_car_record_id';
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['courtesy_number' => $this->courtesy_number, 'car_specification' => $this->car_specification, 'job_type' => $this->job_type,
            'date' => $this->date, 'contractor_car_record_id' => $this->contractor_car_record_id, 'username' => $this->username]);
    }

    public function deleteRecord($contractor_car_record_id) {
        $SQL = 'DELETE FROM contractor_car_record WHERE contractor_car_record_id = :contractor_car_record_id';
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['contractor_car_record_id' => $contractor_car_record_id]);
    }

    public function getRecordsByCourtesyNumber($courtesy_number, $contractor_id) {
        $SQL = "SELECT * FROM contractor_car_record WHERE courtesy_number LIKE :courtesy_number AND contractor_id = :contractor_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['courtesy_number' => "%$courtesy_number%", 'contractor_id' => $contractor_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\ContractorCarRecord');
        return $STMT->fetchAll(); //return the record
    }

    public function getRecordsBetweenDates($starting_date, $ending_date, $contractor_id) {
        $SQL = "SELECT * FROM contractor_car_record WHERE date BETWEEN :starting_date AND :ending_date AND contractor_id = :contractor_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['starting_date' => $starting_date, 'ending_date' => $ending_date, 'contractor_id' => $contractor_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\ContractorCarRecord');
        return $STMT->fetchAll(); //return the record
    }
}
