<?php
include_once "function.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $user = [
        'user' => $username,
        'password' => $password,
        'email' => $email
    ];
}
if (!empty($username) && !empty($password) && !empty($email)) {
    $path = 'data.json';
    $arr_data = readJson($path);
    array_push($arr_data, $user);
    saveData($path, $arr_data);
}
?>
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <fieldset>
        <legend>Register</legend>
        <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" value="<?php echo $_POST["username"]; ?>"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" value="<?php echo $_POST["password"]; ?>"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" value="<?php echo $_POST["email"]; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Register"></td>
            </tr>
        </table>
    </fieldset>
</form>

<table>
    <tr>
        <th>id</th>
        <th>username</th>
        <th>email</th>
    </tr>
    <?php $id = 0;
    $arr = readJson('data.json');
    if (!empty($arr)):
    foreach ($arr_data as $arr): ?>
        <tr>
            <td><?php echo $id ?></td>
            <td><?php echo $arr["user"] ?></td>
            <td><?php echo $arr["email"] ?> </td>
            <td><a href=delete.php?id=<?php echo $id; ?> onclick="confirm('ban co chac chan muon xoa')">delete</a></td>
            <td><a href=edit.php?id=<?php echo $id; ?>>edit</a></td>
        </tr>
        <?php $id++; endforeach; endif; ?>
</table>
</body>
</html>