<?php

namespace app\controllers;

class Contractor extends \app\core\Controller {
	
    public function index() {
        $contractor = new \app\models\Contractor();
        $contractors = $contractor->getAllContractors();
        $this->view('Contractor/index', ['contractors'=>$contractors]);
    }

    public function addContractor() {
        if (isset($_POST['action'])) { // if post was submitted
            $contractor = new \app\models\Contractor();
            //  Post data
            $contractor->company_name = $_POST['company_name'];

            if ($contractor->getContractorByName($contractor->company_name) == false) {
                $contractor->insert();
                header("Location:/Contractor/index");
            } else {
                $this->view('Contractor/addContractor', ['error' => 'Contractor already exists']);
            }

        } else // present view of addContractor
            $this->view('Main/addContractor');
    }
}
