<?php
$viettel = new SplStack();
$mobi = new SplStack();
$vina = new SplStack();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $textarea = $_POST['textarea'];
    $arr = explode(",", $textarea);
    for($i=0;$i<count($arr);$i++){
        if(substr($arr[$i],0,3) == '093'){
            $mobi->push($arr[$i]);
        } else if(substr($arr[$i],0,3) == '097'){
            $viettel->push($arr[$i]);
        } else{
            $vina->push($arr[$i]);
        }
    }

    echo "Cac so viettel la: ";
    foreach($viettel as $value){
        echo "$value ";
    }
    echo "<br/>Cac so vinaphone la: ";
    foreach($vina as $value1){
        echo "$value1 ";
    }
    echo "<br/>Cac so mobiphone la: ";
    foreach($mobi as $value2){
        echo "$value2 ";
    }



}
?>

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
        <input type="text" name="textarea">
        <input type="submit" value="Submit">
    </form>
</body>

</html>