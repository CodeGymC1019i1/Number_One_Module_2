<?php
include_once "Patient.php";

class PatientManager
{
    public $listPatient;

    public function __construct()
    {
        $this->listPatient = [];
    }

    public function addPatient($patient)
    {
        return array_push($this->listPatient, $patient);
    }

}