<?php
//session_start();
//if (!isset($_SESSION['username'])) {
//    header('Location: login.php');
//}
include_once "Services/Manager.php";
include_once "Services/EmployeeManager.php";
include_once "Models/Employee.php";
echo "<script type='text/javascript'>alert('welcome to employee manager website');</script>";
$path = "data/Employees.json";
$employeeManager = new EmployeeManager($path);
$employees = $employeeManager->getListEmployee();
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
        tr, td {
            width: 300px;
            text-align: center;
        }

        th {
            background: #cccccc;
        }
    </style>
</head>
<body>
<button onclick="window.location='add.php'">Thêm nhân viên mới</button>
<button onclick=" <?php session_destroy();?> window.location ='login.php' ">log out</button>
<br>
<form method="get" action='search.php?keyword=<?php echo $_GET["keyword"] ?>'>
    <input type="text" name="keyword">
    <button>search</button>
</form>
<br>
<table>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>date of birth</th>
        <th>address</th>
        <th>job</th>
        <th colspan="2">method</th>
    </tr>
    <?php foreach ($employees as $key => $employee): ?>
        <tr>
            <td><?php echo $key + 1; ?></td>
            <td><?php echo $employee->name; ?></td>
            <td><?php echo $employee->dateOfBirth; ?></td>
            <td><?php echo $employee->address; ?></td>
            <td><?php echo $employee->job; ?></td>
            <td><a href="delete.php?id=<?php echo $key; ?>">Delete</a></td>
            <td><a href="edit.php?id=<?php echo $key; ?>">Edit</a></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>