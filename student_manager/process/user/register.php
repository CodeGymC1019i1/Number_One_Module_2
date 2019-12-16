<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once "../../models/User.php";
    include_once "../../services/UserManager.php";
    $path = "../../data/user.json";

    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $user = new User($username, $password, $email);
    $listUser = new UserManager($path);
    $listUser->add($user);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
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
                    <a class="nav-link" href="../../index.php">Home<span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <form method="post" class="align-content-center">
        <fieldset>
            <legend>Register</legend>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Name: </label>
                    <input type="text" class="form-control" name="username">
                </div>
                <div class="form-group col-md-6">
                    <label>Password: </label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group col-md-12    ">
                    <label>Email: </label>
                    <input type="email" class="form-control" name="email">
                </div>
            </div>
            <button type="submit" class="btn btn-primary" onclick="window.location='login.php'">Register</button>
        </fieldset>
    </form>
    <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
</body>
</html>