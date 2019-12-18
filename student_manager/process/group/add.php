<?php
session_start();

include_once "../../models/Group.php";
include_once "../../models/Student.php";
include_once "../../services/GroupManager.php";
include_once "../../services/StudentManager.php";

if ($_SESSION['username'] !== "admin") {
    echo "<script>alert('you are not admin')</script>";
    echo "<script>window.location = '../../index.php'</script>";
} else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $path = "../../data/group.json";

        if (!empty($_POST['groupName'])) {
            $groupName = $_POST['groupName'];
            $group = new Group($groupName);
            $listGroup = new StudentManager($path);
            $listGroup->add($group);
        } else {
            echo "<script>alert('group name is not empty ')</script>";
        }
    }
}
$path = "../../data/student.json";
$listStudent = new StudentManager($path);
$list = $listStudent->getListStudent();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../../index.php">Student Manager</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../../index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../student/add.php">Add Student</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../user/logout.php">Log out</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" method="post">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" name="keyword">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <form method="post" class="align-content-center">
        <fieldset>
            <legend>Add group</legend>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label> Group name: </label>
                    <input type="text" class="form-control" name="groupName">
                </div>
            </div>
            <div class="form-group">
                <label>Add member: </label>
                <table class="table table-dark">
                    <?php foreach ($list as $key => $student): ?>
                    <tr>
                        <td><?php echo $key + 1 ?></td>
                        <td><?php echo $student->name ?></td>
                        <td><?php echo $student->age ?></td>
                        <td><?php echo $student->address ?></td>
                        <td><?php echo $student->group ?></td>
                        <td><input type="button" value="add"></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <button type="submit" class="btn btn-primary">Add group</button>
        </fieldset>
    </form>
</div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
</body>
</html>