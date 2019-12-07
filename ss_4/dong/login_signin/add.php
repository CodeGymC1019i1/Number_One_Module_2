<?php
//session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        include_once "Services/Manager.php";
        include_once "Models/Employee.php";
        include_once "Services/EmployeeManager.php";

        $name = $_POST['name'];
        $dateOfBirth = $_POST['dateOfBirth'];
        $address = $_POST['address'];
        $job = $_POST['job'];
        $path = "data/Employees.json";

        $employee = new Employee($name, $dateOfBirth, $address, $job);
        $employeeManager = new EmployeeManager($path);
        $employeeManager->add($employee);

        header("location: index.php");
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
</head>
<body>
<form method="post">
    <fieldset>
        <legend>Add Employee</legend>
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Date Of Birth: </td>
                <td><input type="date" name="dateOfBirth"></td>
            </tr>
            <tr>
                <td>Address: </td>
                <td><input type="text" name="address"></td>
            </tr>
            <tr>
                <td>Job: </td>
                <td>
                    <select name="job">
                        <option value="staff">Staff</option>
                        <option value="technician">Technician</option>
                        <option value="operator">Operator</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Add"></td>
            </tr>
        </table>
    </fieldset>
</form>

</body>
</html>