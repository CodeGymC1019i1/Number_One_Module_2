<?php
include_once "class/Employee.php";
include_once "class/EmployeeManager.php";

$employeeManager = new \Controller\EmployeeManager("data.json");
$employee = $employeeManager->getList();
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
<table class="table">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">They</th>
                    <th scope="col">Name</th>
                    <th scope="col">Birthday</th>
                    <th scope="col">Address</th>
                    <th scope="col">Position</th>
                    <th></th>
                </tr>
                <tbody>
                <?php foreach ($employee as $key => $employee):?>
                <tr>
                    <th scope="row"><?php echo $key + 1 ?></th>
                    <td><?php echo $employee->they ?></td>
                    <td><?php echo $employee->name ?></td>
                    <td><?php echo $employee->birthday ?></td>
                    <td><?php echo $employee->address ?></td>
                    <td><?php echo $employee->position ?></td>
                    <td><a href="delete.php?index=<?php echo $key ?>" onclick="return confirm('Ban chac chan muon xoa khong')" class="btn btn-danger">Delete</a></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
</body>
</html>