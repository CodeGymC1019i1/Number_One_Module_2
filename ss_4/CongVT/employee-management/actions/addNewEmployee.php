<?php

use employee\EmployeeManagement;
use employee\Employee;

include_once "../employee/Employee.php";
include_once "../employee/EmployeeManagement.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $surName = $_POST['surName'];
    $birthDay = $_POST['birthDay'];
    $address = $_POST['address'];
    $position = $_POST['position'];

    $pathFile = "../data.json";

    $newEmployee = new Employee($name, $surName, $birthDay, $address, $position);
    $employeeManagement = new EmployeeManagement($pathFile);
    $employeeManagement->addEmployee($newEmployee);

    header("Location: ../index.php");
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Add new Employee</h1>
            <form method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label>Sur Name</label>
                    <input type="text" class="form-control" name="surName">
                </div>
                <div class="form-group">
                    <label>Birth Day</label>
                    <input type="text" class="form-control" name="birthDay">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="address">
                </div>
                <div class="form-group">
                    <label>Position</label>
                    <input type="text" class="form-control" name="position">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>


</body>
</html>