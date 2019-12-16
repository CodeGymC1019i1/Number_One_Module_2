<?php
session_start();
include_once "../../models/User.php";
include_once "../../services/FileManager.php";
include_once "../../services/UserManager.php";
$path = "../../data/user.json";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $listUser = new UserManager($path);
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (empty($username) || empty($password)) {
        echo "<script type='text/javascript'>alert('login failed! username and password is not empty')</script>";
    } else {
        $_SESSION['username'] = $username;
        $listUser->checkLogin($username, $password);
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
    <title>Log in </title>
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Student Manager</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="register.php">Register</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" method="post">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" name="keyword">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <form method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Username: </label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="username">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Password: </label>
            <input type="password" class="form-control" id="exampleInputEmail1" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>
<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
</body>
</html>