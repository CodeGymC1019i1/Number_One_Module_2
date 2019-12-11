<?php
include_once "employee/Employee.php";
include_once "employee/EmployeeManagement.php";

$employeeManagement = new \employee\EmployeeManagement("data.json");
$employees = $employeeManagement->getListEmployee();


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
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Carousel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="form-inline mt-2 mt-md-0" method="post" action="actions/search.php">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="keyword">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="row">
        <div class="col-12 page-title mb-2">
            <h1>Employee</h1>
            <a class="btn btn-primary" href="actions/addNewEmployee.php" role="button">Add new</a>
        </div>
        <div class="col-12 col-md-12">
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Sur Name</th>
                    <th scope="col">Birth Day</th>
                    <th scope="col">Address</th>
                    <th scope="col">Position</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($employees as $key => $employee): ?>
                    <tr>
                        <th scope="row"><?php echo $key+1?></th>
                        <td><?php echo $employee->name ?></td>
                        <td><?php echo $employee->surName ?></td>
                        <td><?php echo $employee->birthDay ?></td>
                        <td><?php echo $employee->address ?></td>
                        <td><?php echo $employee->position ?></td>
                        <td><a href="actions/editEmployee.php?index=<?php echo $key ?>" class="btn btn-warning">Edit</a></td>
                        <td>
                            <a href="actions/deleteEmployee.php?index=<?php echo $key ?> "
                               onclick="return confirm('Do you really want to delete this employee?')"
                               class="btn btn-danger">
                                Delete
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<!--<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"-->
<!--        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"-->
<!--        crossorigin="anonymous"></script>-->
<!--<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"-->
<!--        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"-->
<!--        crossorigin="anonymous"></script>-->
<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"-->
<!--        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"-->
<!--        crossorigin="anonymous"></script>-->
</body>
</html>
