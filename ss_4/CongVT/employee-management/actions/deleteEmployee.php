<?php
include_once "../employee/EmployeeManagement.php";
include_once "../employee/Employee.php";

$index = (int)$_GET['index'];

$employeeManagement = new \employee\EmployeeManagement("../data.json");
$employeeManagement->deleteEmployee($index);

header("Location: ../index.php");

