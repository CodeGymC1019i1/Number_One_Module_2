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
    <input type="text" name="name" size="30" placeholder="Nhập họ và tên"></br>
    <input type="number" name="birthday" size="40" placeholder="Nhập ngày tháng năm sinh"></br>
    <input type="text" name="address" size="30" placeholder="Nhập địa chỉ"></br>
    <input type="text" name="jobPosition" size="30" placeholder="Nhập vị trí công việc"></br>
    <input type="submit" value="Thêm">
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST['name'];
    $birthday=$_POST['birthday'];
    $address=$_POST['address'];
    $jobPosition=$_POST['jobPosition'];
    include "classHumanResourceManager/HumanResourceManager.php";
    include "newHumanResourceManager/newHumanManager.php";
    $newHumanManager = new \newHuman\newHumanManager();
    $newHumanManager->add(new \human\HumanResourceManager($name,$birthday, $address, $jobPosition));
    $humanResources = $newHumanManager->getHuman();
    foreach ($humanResources as $hu) {

    }
}
?>
</body>
</html>