<?php

namespace app\controllers;

class ContractorCarRecord extends \app\core\Controller
{
    #[\app\filters\Login]
    public function index($contractor_id)
    {
        $contractorCarRecord = new \app\models\ContractorCarRecord();
        $contractorCarRecord->contractor_id = $contractor_id;
        $records = $contractorCarRecord->getRecords();

        $contractor = new \app\models\Contractor();
        $contractor = $contractor->getContractorById($contractor_id);

        if (isset($_POST['action'])) {
            if (trim($_POST['courtesy_number']) == '') {
                $this-> view("ContractorCarRecord/index", ['error' => 'Courtesy number cannot be empty', 'records' => $records, 'contractor' => $contractor]);
                return;
            } else {
                $contractorCarRecord = new \app\models\ContractorCarRecord();
                $resultsRecords = $contractorCarRecord->getRecordsByCourtesyNumber($_POST['courtesy_number'], $contractor_id);
                if (count($resultsRecords) == 0) {
                    $this-> view("ContractorCarRecord/index", ['error' => 'No records found', 'records' => $records, 'contractor' => $contractor]);
                    return;
                } else {
                    $this-> view('ContractorCarRecord/searchResults', ['resultsRecords' => $resultsRecords, 'contractor' => $contractor]);
                    return;
                }
            }
        } else if (isset($_POST['action2'])) {
            if (strtotime($_POST['starting_date']) > 0 && strtotime($_POST['ending_date']) > 0) {
                $contractorCarRecord = new \app\models\ContractorCarRecord();
                $resultsRecords = $contractorCarRecord->getRecordsBetweenDates($_POST['starting_date'], $_POST['ending_date'], $contractor_id);
                if (count($resultsRecords) == 0) {
                    $this->view("ContractorCarRecord/index", ['error' => 'No records found', 'records' => $records, 'contractor' => $contractor]);
                    return;
                } else {
                    $this->view('ContractorCarRecord/searchResults', ['resultsRecords' => $resultsRecords, 'contractor' => $contractor]);
                    return;
                }
            } else {
                $this->view("ContractorCarRecord/index", ['error' => 'Please input both starting and ending dates', 'records' => $records, 'contractor' => $contractor]);
                return;
            }


        } else {
            $this->view("ContractorCarRecord/index", ['records' => $records, 'contractor' => $contractor]);
        }
    }

    #[\app\filters\Login]
    public function addRecord($contractor_id) {
        $contractor = new \app\models\Contractor();
        $contractor = $contractor->getContractorById($contractor_id);
        if (isset($_POST['action'])) {
            if (trim($_POST['courtesy_number']) == '' || trim($_POST['car_specification']) == '' || trim($_POST['job_type']) == '' || trim($_POST['date']) == '') {
                $this-> view("ContractorCarRecord/addRecord", ['error' => 'Please fill in all fields', 'contractor' => $contractor]);
                return;
            }

            if (strlen($_POST['courtesy_number']) > 30) {
                $this-> view("ContractorCarRecord/addRecord", ['error' => 'Courtesy number cannot be more than 30 characters', 'contractor' => $contractor]);
                return;
            }
            if (strlen($_POST['car_specification']) > 30) {
                $this-> view("ContractorCarRecord/addRecord", ['error' => 'Car specification cannot be more than 30 characters', 'contractor' => $contractor]);
                return;
            }
            if (strlen($_POST['job_type']) > 30) {
                $this-> view("ContractorCarRecord/addRecord", ['error' => 'Job type cannot be more than 30 characters', 'contractor' => $contractor]);
                return;
            }

            $contractorCarRecord = new \app\models\ContractorCarRecord();
            $contractorCarRecord->contractor_id = $contractor_id;
            $contractorCarRecord->courtesy_number = $_POST['courtesy_number'];
            $contractorCarRecord->car_specification = $_POST['car_specification'];
            $contractorCarRecord->job_type = $_POST['job_type'];
            $contractorCarRecord->date = $_POST['date'];
            $contractorCarRecord->username = $_SESSION['username'];
            $contractorCarRecord->addRecord();
            header("Location:/ContractorCarRecord/index/$contractor_id");

        } else {
            $this->view('ContractorCarRecord/addRecord', ['contractor' => $contractor]);
        }
    }

    #[\app\filters\Login]
    public function editRecord($contractor_car_record_id)
    {
        $contractorCarRecord = new \app\models\ContractorCarRecord();
        $contractorCarRecord = $contractorCarRecord->getRecordById($contractor_car_record_id);
        $contractorId = $contractorCarRecord->contractor_id;

        if (isset($_POST['action'])) {
            if (trim($_POST['courtesy_number']) == '' || trim($_POST['car_specification']) == '' || trim($_POST['job_type']) == '' || trim($_POST['date']) == '') {
                $this->view("ContractorCarRecord/editRecord", ['error' => 'Please fill in all fields', 'contractorCarRecord' => $contractorCarRecord]);
                return;
            }

            if (strlen($_POST['courtesy_number']) > 30) {
                $this->view("ContractorCarRecord/editRecord", ['error' => 'Courtesy number cannot be more than 30 characters', 'contractorCarRecord' => $contractorCarRecord]);
                return;
            }
            if (strlen($_POST['car_specification']) > 30) {
                $this->view("ContractorCarRecord/editRecord", ['error' => 'Car specification cannot be more than 30 characters', 'contractorCarRecord' => $contractorCarRecord]);
                return;
            }
            if (strlen($_POST['job_type']) > 30) {
                $this->view("ContractorCarRecord/editRecord", ['error' => 'Job type cannot be more than 30 characters', 'contractorCarRecord' => $contractorCarRecord]);
                return;
            }

            $contractorCarRecord = new \app\models\ContractorCarRecord();
            $contractorCarRecord->contractor_car_record_id = $contractor_car_record_id;
            $contractorCarRecord->courtesy_number = $_POST['courtesy_number'];
            $contractorCarRecord->car_specification = $_POST['car_specification'];
            $contractorCarRecord->job_type = $_POST['job_type'];
            $contractorCarRecord->date = $_POST['date'];
            $contractorCarRecord->username = $_SESSION['username'];
            $contractorCarRecord->editRecord();

            header("Location:/ContractorCarRecord/index/$contractorId");
        } else {
            $this->view('ContractorCarRecord/editRecord', ['contractorCarRecord' => $contractorCarRecord]);
        }
    }

    #[\app\filters\Login]
    public function deleteRecord($contractor_id, $contractor_car_record_id) {
        $contractorCarRecord = new \app\models\ContractorCarRecord();
        $contractorCarRecord->deleteRecord($contractor_car_record_id);
        header("Location:/ContractorCarRecord/index/$contractor_id");
    }
}
