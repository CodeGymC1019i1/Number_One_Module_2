<?php
use Controller\Employee;
use Controller\EmployeeManager;

include_once "../class/Employee.php";
include_once "../class/EmployeeManager.php";

$pathFile = "../data.json";
$listEmployee = new EmployeeManager($pathFile);
$employee = $listEmployee->getList();   
$listEmployee->edit($index);
$index = (int)$_GET['index'];
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
        <div class="col-12">
            <h1>Add</h1>
            <form method="POST">
                <div class="form-group">
                <label>Họ</label>
                    <input type="text" class="form-control" name="they" value="<?php echo $employee[$index]->they; ?>">
                </div>
                <div class="form-group">
                    <label>Tên</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $employee[$index]->name; ?>">
                </div>
                <div class="form-group">
                    <label>Ngày sinh</label>
                    <input type="number" class="form-control" name="birthday" value="<?php echo $employee[$index]->birthday; ?>">
                </div>
                <div class="form-group">
                    <label>Địa chỉ</label>
                    <input type="text" class="form-control" name="address" value="<?php echo $employee[$index]->address; ?>">
                </div>
                <div class="form-group">
                    <label>Chức vụ</label>
                    <input type="text" class="form-control" name="position" value="<?php echo $employee[$index]->position; ?>">
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>