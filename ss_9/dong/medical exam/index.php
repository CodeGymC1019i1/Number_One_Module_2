<?php
include_once "Patient.php";
include_once "PatientManager.php";

$james = new Patient("james", 1);
$jack = new Patient("jack", 2);
$listPatient = new PatientManager();
$listPatient->addPatient($james);
$listPatient->addPatient($jack);
$listPatient->sortPatient();
var_dump($listPatient);