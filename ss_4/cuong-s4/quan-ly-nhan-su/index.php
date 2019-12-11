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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12 page-title mb-2">
            <h1>Users</h1>
            <button type="button" class="btn btn-outline-primary"><a href="src/add.php">Create</a></button>
            <button type="button" class="btn btn-outline-primary"><a href="src/reg.php">Đăng ký</a></button>
        </div>
        <div class="col-12 col-md-12">
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">They</th>
                    <th scope="col">Name</th>
                    <th scope="col">Birthday</th>
                    <th scope="col">Address</th>
                    <th scope="col">Position</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Edit</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($employee as $key => $employee):?>
                    <tr>
                    <th scope="row"><?php echo $key + 1 ?></th>
                    <td><?php echo $employee->they ?></td>
                    <td><?php echo $employee->name ?></td>
                    <td><?php echo $employee->birthday ?></td>
                    <td><?php echo $employee->address ?></td>
                    <td><?php echo $employee->position ?></td>
                    <td><a href="src/delete.php?index=<?php echo $key ?>" onclick="return confirm('Ban chac chan muon xoa khong')" class="btn btn-danger">Delete</a></td>
                    <td><a href="src/edit.php?index=<?php echo $key ?>" class="btn btn-success">Edit</a></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>