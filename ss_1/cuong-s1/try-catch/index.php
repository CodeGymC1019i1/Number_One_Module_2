<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <input type="number" name="x">
        <input type=number name="y">
        <input type="submit" value="Gui">
    </form>
    <?php
    function calc($x,$y){
       if($_SERVER["REQUEST_METHOD"] == "POST") {
           $x = $_POST["x"];
           $y = $_POST["y"];
       $tong = $x+$y;
       $hieu = $x-$y;
       $nhan = $x*$y;
       $thuong = $x/$y;
       try {
       echo "Tong:".$tong."<br/>Hieu: ".$hieu."<br/>Nhan: ".$nhan."<br/>Thuong: ".$thuong;
    }
    catch(Exception $e){
        echo "</br>by zero: " . $e->getMessage();
    };
    }
};
    calc($x,$y);
    ?>
</body>

</html>