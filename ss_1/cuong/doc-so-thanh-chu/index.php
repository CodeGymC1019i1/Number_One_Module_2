<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
h2>Đọc số thành chữ</h2>
    <form method="POST">
        <input type="text" name="search" placeholder="Nhập số"/>
        <input type = "submit" id = "submit" value = "OK"/>
    </from>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $number = $_POST["search"];
        $toString = "";
        if(number >=1000 || $number < 0){
            $toString = "Out of ability"
        } else{
            switch ($toString / 100) {
                case 'value':
                    # code...
                    break;
                
                default:
                    # code...
                    break;
            }
        }
    }
 ?>
</body>
</html>