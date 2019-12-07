<?php
//session_start();
//if (!isset($_SESSION['username'])) {
//    header('Location: login.php');
//}
include_once "Services/Manager.php";
include_once "Models/Employee.php";
include_once "Services/EmployeeManager.php";

$path = "data/Employees.json";
$listEmployee = new EmployeeManager($path);
$employees = $listEmployee->getListEmployee();
$index = (int)$_GET["id"];
$listEmployee->edit($index);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table tr td {
            width: 200px;
        }
    </style>
</head>
<body>

<form method="post">
    <fieldset>
        <legend>Edit Information of Employee</legend>
        <tr>
            <th>STT:</th>
            <td><input type="text" name="key" value="<?php echo $index+1; ?>" ; disabled></td>
        </tr>
        <tr>
            <th>Name:</th>
            <td><input type="text" name="name" value="<?php echo $employees[$index]->name ?>"></td>
        </tr>
        <tr>
            <th>Date of birth:</th>
            <td><input type="date" name="dateOfBirth" value="<?php echo $employees[$index]->dateOfBirth ?>"></td>
        </tr>
        <tr>
            <th>Address:</th>
            <td><input type="text" name="address" value="<?php echo $employees[$index]->address; ?>"></td>
        </tr>
        <tr>
            <th>job:</th>
            <td><select name="job" value="<?php echo $employees[$index]->job; ?>">
                    <option value="staff">Staff</option>
                    <option value="technician">Technician</option>
                    <option value="operator">Operator</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><input type="submit" value="edit"></td>
        </tr>
    </fieldset>
</form>

<?php

?>
</body>
</html>
