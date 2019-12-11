<?php

include_once "../employee/Employee.php";
include_once "../employee/EmployeeManagement.php";

$index = (int)$_GET['index'];
$employeeManagement = new \employee\EmployeeManagement("../data.json");
$employees = $employeeManagement->getListEmployee();
$employeeManagement->editEmployee($index);


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
            <h1>Edit this employee</h1>
            <form method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $employees[$index]->name ?>">
                </div>
                <div class="form-group">
                    <label>Sur Name</label>
                    <input type="text" class="form-control" name="surName" value="<?php echo $employees[$index]->surName ?>">
                </div>
                <div class="form-group">
                    <label>Birth Day</label>
                    <input type="text" class="form-control" name="birthDay" value="<?php echo $employees[$index]->birthDay ?>">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="address" value="<?php echo $employees[$index]->address ?>"">
                </div>
                <div class="form-group">
                    <label>Position</label>
                    <input type="text" class="form-control" name="position" value="<?php echo $employees[$index]->position ?>"">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>

