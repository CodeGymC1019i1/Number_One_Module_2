<?php
    $fieldsOfNumbers = $_POST['phoneNumberField'];
    $arrayOfPhoneNumbers = explode(" ",$fieldsOfNumbers);
    $vinaphoneNumbers = [];
    $mobiphoneNumbers = [];
    $viettelNumbers= [];

    foreach ($arrayOfPhoneNumbers as $phoneNumber){
        if($phoneNumber[2] == "7"){
            array_push($viettelNumbers, $phoneNumber);
        } elseif ($phoneNumber[2] == "4"){
            array_push($vinaphoneNumbers, $phoneNumber);
        } else array_push($mobiphoneNumbers, $phoneNumber);
    }
    print_r( $vinaphoneNumbers);
    echo "<br>";
    print_r( $mobiphoneNumbers);
echo "<br>";

print_r( $viettelNumbers);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phone number classification</title>
</head>
<body>
<form action="" method="post">
    <textarea rows="4" cols="50" name="phoneNumberField" placeholder="Input phone numbers here to classification"></textarea> <br>
    <input type="submit" value="Classification">

</form>
</body>
</html>
