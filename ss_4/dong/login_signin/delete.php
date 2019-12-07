<?php
//session_start();
//if (!isset($_SESSION['username'])) {
//    header('Location: login.php');
//}
include_once "Services/Manager.php";
include_once "Services/EmployeeManager.php";
include_once  "Models/Employee.php";
$index = (int)$_GET["index"];
$path = "data/Employees.json";
$employeeManager = new EmployeeManager($path);
$employeeManager->delete($index);

header("location: index.php");