<?php
$viettel = [];
$vinaphone = [];
$mobiphone = [];
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $textarea = $_POST['textarea'];
    $arr = explode(", ", $textarea);
    foreach ($arr as $arrNumber) {
        if (substr($arrNumber, 0, 3) == "093") {
            array_push($mobiphone, $arrNumber);
        }
        if (substr($arrNumber, 0, 3) == "097") {
            array_push($viettel, $arrNumber);
        }
        if (substr($arrNumber, 0, 3) == "094") {
            array_push($vinaphone, $arrNumber);
        }
    }
    echo "mobiphone: ";
    print_r($mobiphone);
    echo "<br>viettel: ";
    print_r($viettel);
    echo "<br>vinaphone: ";
    print_r($vinaphone);
}

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
    <textarea name="textarea" rows="10" cols="30"></textarea>
    <input type="submit" value="enter">
</form>
</body>
</html>