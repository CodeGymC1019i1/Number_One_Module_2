<html>
<head>
    <meta charset="utf-8">
    <style>
        .login {
            height: 220px;
            width: 320px;
            margin: 0;
            padding: 10px;
            border: 1px solid #ccc;
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
        <h2>Login</h2>
        <input type="text" id="txtName" name="username" placeholder="user name">
        <input type="password" id="txtPass" name="password" placeholder="Password">
        <input type="submit" value="Sign in">
    </div>
    <?php

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == "admin" && $password == "admin") {
            echo "<h2>Welcome <span style='color: red'> $username</span></h2>";
        } else {
            echo "<h2><span style='color: red'>Login Error</span></h2>";
        }
    }
    ?>
</form>
</body>
</html>