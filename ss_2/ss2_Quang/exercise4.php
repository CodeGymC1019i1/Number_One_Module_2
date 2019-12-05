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
    <input type="number" name="number1" placeholder="Nhập số thứ nhất" size="30">
    <input type="number" name="number2" placeholder="Nhập số thứ hai" size="30">
    <input type="submit" value="Calculate">
</form>
<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $number1=$_POST["number1"];
    $number2=$_POST["number2"];
   try {

   }catch(Exception $number2){
    
   }
}
?>
</body>
</html>
