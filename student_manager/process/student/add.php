<?php
session_start();
include_once "../../models/Student.php";
include_once "../../models/Group.php";
include_once "../../services/StudentManager.php";
include_once "../../services/GroupManager.php";


if ($_SESSION['username'] !== "admin") {
    echo "<script>alert('you are not admin')</script>";
    echo "<script>window.location = '../../index.php'</script>";
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once "upload.php";
    $path = "../../data/student.json";
    if (!empty($_POST['name']) && !empty($_POST['age']) && !empty($_POST['address']) && !empty($_POST['group'])) {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $group = $_POST['group'];
        if (empty($_FILES['avatar']['name'])) {
            $avatar = "null.jpg";
        } else {
            $avatar = $_FILES['avatar']['name'];
        }
        $student = new Student($name, $age, $address, $group, $avatar);
        $listStudent = new StudentManager($path);
        $listStudent->add($student);
    } else {
        echo "<script>alert('Input all info of student')</script>";
    }
}

$pathGroup = "../../data/group.json";
$listGroup = new GroupManager($pathGroup);
$list = $listGroup->getListGroup();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add student</title>
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
                <?php if ($_SESSION['username'] == 'admin'): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="add.php">Add Student</a>
                    </li>
                <?php endif; ?>
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
    <form method="post" enctype="multipart/form-data" class="align-content-center">
        <fieldset>
            <legend>Add student</legend>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Name: </label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group col-md-6">
                    <label>Age: </label>
                    <input type="number" class="form-control" name="age">
                </div>
            </div>
            <div class="form-group">
                <label>Address: </label>
                <input type="text" class="form-control" name="address" placeholder="1234 Main St">
            </div>
            <div class="form-group">
                <label>Group: </label>
                <select class="custom-select" name="group">
                    <?php foreach ($list as $key => $group): ?>
                        <option value="<?php echo $group->name; ?>"><?php echo $group->name; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label>Avatar: </label>
                <input type="file" class="form-control" name="avatar" placeholder="Avatar">
            </div>
            <button type="submit" class="btn btn-primary">Add student</button>
        </fieldset>
    </form>
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