<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        input {
            padding: 10px;
            font-size: 16px;
            border-radius: 4px;
            border: 2px solid #D8DBE2;
        }

        #sumit {
            width: 100px;
            font-size: 16px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
<h2>Từ điển Anh - Việt</h2>
<form method="post">
    <input type="text" name="search" placeholder="Nhập từ cần tìm kiếm">
    <input type="submit" value="Tìm" id="sumit">
</form>
<?php
$dictionary = ["hello" => "xin chào", "hi" => "xin chào", "how" => "thế nào", "book" => "quyển vở"];
if($_SERVER["REQUEST_METHOD"]==="POST") {
    $search = $_POST["search"];
    $flag = 0;
    foreach ($dictionary as $word => $description) {
        if ($word == $search) {
            echo 'Từ ' . $word . ' Nghĩa của từ ' . $description;
            $flag = 1;
        }
    }
    if ($flag == 0) {
        echo 'Không có trong từ điển';
    }
}
?>
</body>
</html>