<?php
use Controller\Employee;
use Controller\EmployeeManager;

include_once "../class/Employee.php";
include_once "../class/EmployeeManager.php";
$index = (int)$_GET['index'];

$employeeManager = new Controller\EmployeeManager("../data.json");
$employeeManager->delete($index);

header("Location: ../index.php");