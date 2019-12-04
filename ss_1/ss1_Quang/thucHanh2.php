<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .loign {
            height: 180px;
            width: 230px;
            margin: 0px;
            padding: 10px;
            border: 1px solid black;
        }

        .login input {
            padding: 5px;
            margin: 5px;
        }
    </style>
</head>
<body>
<form method="post">
    <div class="login">
        <h1>Login</h1>
        <input type="text" placeholder="Username" name="username" size="30"></br>
        <input type="password" placeholder="Password" name="password" size="30"></br>
        <input type="submit" value="Sign in">
    </div>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username === 'admin' && $password === 'admin') {
        echo '<h2>Wellcome<span style="color:red;"> ' . $username . ' to website</span></h2>';
    } else {
        echo '<h2>Login<span style="color:black"> ' . $username . ' failed</span></h2>';
    }
}
?>
</body>
</html>
