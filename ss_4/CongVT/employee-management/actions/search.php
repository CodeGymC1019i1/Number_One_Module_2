<?php
include_once "../employee/EmployeeManagement.php";
include_once "../employee/Employee.php";

$keyword = (int)$_POST['keyword'];
$employeeManagement = new \employee\EmployeeManagement("../data.json");
$employees = $employeeManagement->getListEmployee();
$result = $employeeManagement->searchEmployee($keyword);

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
        </div>
    </nav>
    <div class="row">
        <div class="col-12 page-title mb-2">
            <h1>Search Result</h1>
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
                <?php foreach ($result as $key => $employee): ?>
                    <tr>
                        <th scope="row"><?php echo $key+1?></th>
                        <td><?php echo $employee->name ?></td>
                        <td><?php echo $employee->surName ?></td>
                        <td><?php echo $employee->birthDay ?></td>
                        <td><?php echo $employee->address ?></td>
                        <td><?php echo $employee->position ?></td>
                        <td><a href="/actions/editEmployee.php?index=<?php echo $key ?>" class="btn btn-warning">Edit</a></td>
                        <td>
                            <a href="/actions/deleteEmployee.php?index=<?php echo $key ?> "
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


</body>
</html>


