<?php
session_start();
if (!isset($_SESSION['username'])) {
    echo "<script>alert('please log in or register')</script>";
    echo "<script>window.location = 'process/user/login.php'</script>";
}

include_once "../../services/GroupManager.php";
include_once "../../models/Group.php";
$path = "../../data/group.json";

$listGroup = new GroupManager($path);
$list = $listGroup->getListGroup();
if (isset($_POST['keyword'])) {
    if ($_SERVER["REQUEST_METHOD"] = "POST") {
        $keyword = $_POST['keyword'];
        $list = $listGroup->search($keyword);
    }
}
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
                        <a class="nav-link" href="../student/add.php">Add Student</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Group Manager</a>
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

    <form>
        <table class="table table-dark">
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên</th>
                <th scope="col">Member</th>
                <th scope="col" colspan="2"></th>
            </tr>
            <?php foreach ($list as $key => $group): ?>
            <tr>
                <td><?php echo $key + 1 ?></td>
                <td><a href="showGroup.php?group=<?php echo $group->name; ?>"><?php echo $student->group ?><?php echo $group->name; ?></a></td>
                <td><?php echo count($group->member) ?></td>
                <td><a href="delete.php?index=<?php echo $key; ?>"><input type="button" value="Delete" onclick="return confirm('ban co chan chan muon xoa')"></a>
                </td>
                <td><a href="edit.php?index=<?php echo $key; ?>"><input type="button" value="Edit"></a>
                </td>
                <?php endforeach; ?>
            </tr>
        </table>
    </form>
</div>
<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
</body>
</html>