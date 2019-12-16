<?php
session_start();
if ($_SESSION['username'] !== "admin") {
    echo "<script>alert('you are not admin')</script>";
    echo "<script>window.location = '../../index.php'</script>";
}

include_once "../../services/GroupManager.php";
include_once "../../models/Group.php";
include_once "../../services/StudentManager.php";
include_once "../../models/Student.php";

$path = "../../data/student.json";
$listStudent = new StudentManager($path);
$student = $listStudent->getListStudent();
$index = (int)$_GET['index'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $listStudent->edit($index);
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
    <title>Index</title>
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

    <form method="post">
        <table class="table table-dark">
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Name:</th>
                <th scope="col">Age:</th>
                <th scope="col">Address:</th>
                <th scope="col">Group:</th>
            </tr>
            <tr>
                <td><input type="text" name="key" value="<?php echo $index + 1 ?>" disabled></td>
                <td><input type="text" name="name" value="<?php echo $student[$index]->name; ?>"></td>
                <td><input type="text" name="age" value="<?php echo $student[$index]->age; ?>"></td>
                <td><input type="text" name="address" value="<?php echo $student[$index]->address; ?>"></td>
                <td>

                    <select class="custom-select" name="group">
                        <?php foreach ($list as $key => $group): ?>
                            <option value="<?php echo $group->name; ?>"
                                <?php if ($group->name == $student[$index]->group): ?> selected <?php endif ?>>
                                <?php echo $group->name; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>

                </td>
            </tr>
            <tr>
                <th scope="col" colspan="5"><input type="submit" value="edit" onclick="return confirm('are you sure ?')"></th>
            </tr>
        </table>
    </form>
</div>
<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
</body>
</html>