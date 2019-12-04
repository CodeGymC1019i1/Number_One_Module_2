<!doctype html>
<html lang="en">
<head>
    <style>
        .error {
            color: red;
        }
        table{
            border-collapse: collapse;
            width: 100%;
        }
        td, th{
            border: solid 1px #ccc;
        }
        form{
            width: 450px;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Register</title>
</head>
<body>

<?php
function loadRegistration($filename){
    $jsonData = file_get_contents($filename);
    $arr_Data = json_decode($jsonData, true);
    return $arr_Data;
}



function saveDataJSON($filename, $userName, $email, $phoneNumber){
    $contact = array(
        'userName' => $userName,
        'email' => $email,
        'phoneNumber' => $phoneNumber
    );
    //convert json data into array:
    $arr_Data = loadRegistration($filename);
    //push user data to array
    array_push($arr_Data, $contact);
    //convert updated array to JSON
    $jsonData = json_encode($arr_Data, JSON_PRETTY_PRINT);
    //write json data into data.json file
    file_put_contents($filename, $jsonData);
    if(file_put_contents($filename, $jsonData)){
        echo "Data saved successful!";
    }
}

$nameErr = NULL;
$emailErr = NULL;
$phoneErr = NULL;
$userName = NULL;
$email = NULL;
$phoneNumber= NULL;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $has_error = false;

    if (empty($userName)) {
        $nameErr = "Name cannot be empty";
    }
    if (empty($email)) {
        $emailErr = "Email cannot be empty";
        $has_error = true;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Email is not valid(XXX@XXX.XXX)";
        $has_error = true;
    }
    if (empty($phoneNumber)){
        $phoneErr = "Phone number cannot be empty";
        $has_error = true;
    }
    if ($has_error === false){
        saveDataJSON("user.json", $userName, $email, $phoneNumber);
        $userName = NULL;
        $email = NULL;
        $phoneNumber = NULL;
    }
}
?>

<div style="border: 1px solid darkred; width: 400px">
    <h1>Registration Form</h1>
    <form action="" method="post">
        <legend>Details</legend>
        <label>User name: </label>
        <input type="text" name="userName" value="<?php echo $userName; ?>">
        <span class="error">* <?php echo $nameErr; ?></span>
        <br>
        <label>Email: </label>
        <input type="text" name="email" value="<?php echo $email; ?>">
        <span class="error">* <?php echo $emailErr; ?></span>
        <br>
        <br>
        <label>Phone number: </label>
        <input type="text" name="phoneNumber" value="<?php echo $phoneNumber; ?>" >
        <span class="error">* <?php echo $phoneErr; ?></span>
        <br>
        <input type="submit">
    </form>

</div>

<?php
    $registered =  loadRegistration('user.json');
?>
<h2>Registration List</h2>
<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Delete</th>
    </tr>
    <?php foreach ($registered as $registered):?>
        <tr>
            <td><?= $registered['userName']; ?></td>
            <td><?= $registered['email']; ?></td>
            <td><?= $registered['phoneNumber']; ?></td>
            <td><button>Delete</button></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>

