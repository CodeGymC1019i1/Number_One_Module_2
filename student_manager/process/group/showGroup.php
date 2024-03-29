<?php
session_start();
if (!isset($_SESSION['username'])) {
    echo "<script>alert('please log in or register')</script>";
    echo "<script>window.location = 'process/user/login.php'</script>";
}
include_once "../../services/StudentManager.php";
include_once "../../models/Student.php";
include_once "../../services/GroupManager.php";
include_once "../../models/Group.php";

$pathGroup = "../../data/group.json";
$pathStudent = "../../data/student.json";
$group = $_GET['group'];

$listGroup = new GroupManager($pathGroup);
$list = $listGroup->getListGroup();

$listStudent = new StudentManager($pathStudent);
$students = $listStudent->search($group);

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
                <li class="nav-item">
                    <a class="nav-link" href="../group/add.php">Add Group</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../user/logout.php">Log out</a>
                </li>
            </ul>
        </div>
    </nav>
    <form method="post" class="align-content-center">
        <fieldset>
            <legend>Group</legend>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label> Group name: </label>
                    <input type="text" class="form-control" name="groupName" value="<?php echo $_GET['group'] ?>"
                           disabled>
                </div>
            </div>
            <div class="form-group">
                <label>List member: </label>
                <table class="table table-dark">
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Tuổi</th>
                        <th scope="col">Địa Chỉ</th>
                        <th scope="col">Group</th>
                        <th scope="col" colspan="2"></th>
                    </tr>
                    <?php foreach ($students as $key => $student): ?>
                        <tr>
                            <td><?php echo $key + 1 ?></td>
                            <td><?php echo $student->name ?></td>
                            <td><?php echo $student->age ?></td>
                            <td><?php echo $student->address ?></td>
                            <td><?php echo $student->group ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </fieldset>
    </form>
</div>
<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
</body>
</html>