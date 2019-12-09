<?php
use Controller\Employee;
use Controller\EmployeeManager;

if($_SERVER['REQUEST_METHOD']  === 'POST'){

    include_once "../class/Employee.php";
    include_once "../class/EmployeeManager.php";

    $they = $_POST['they'];
    $name = $_POST['name'];
    $birthday = $_POST['birthday'];
    $address = $_POST['address'];
    $position = $_POST['position'];
    
    $pathFile = "../data.json";

    $employee = new Employee($they, $name, $birthday, $address, $position);
    $employeeManager = new EmployeeManager($pathFile);
    $employeeManager->add($employee);
    header("Location: ../index.php");

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        Họ: <input type="text" name="they">
        Tên: <input type="text" name="name">
        Ngày sinh: <input type="text" name="birthday">
        Địa chỉ: <input type="text" name="address">
        Chức vụ: <input type="text" name="position">
        <input type="submit" value="Gửi">
    </form>
</body>

</html>