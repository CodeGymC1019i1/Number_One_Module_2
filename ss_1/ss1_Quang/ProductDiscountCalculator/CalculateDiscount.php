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
<table>
    <form method="post">
        <tr>
            <td>Product Description:</td>
            <td><input type="text" name="productDescription"><br></td>
        </tr>
        <tr>
            <td> List Price:</td>
            <td><input type="number" name="listPrice"><br></td>
        </tr>
        <tr>
            <td> Discount Percent:</td>
            <td><input type="number" name="discountPercent"><br></td>
        </tr>
        <tr>
            <td></td>
            <td><button>Calculate Discoun</button></td>
        </tr>
    </form>
</table>
<?php
if($_SERVER['REQUEST_METHOD']=="POST") {
    $productDescription = $_POST['productDescription'];
    $listPrice = $_POST['listPrice'];
    $discountPercent = $_POST['discountPercent'];
    $discountAmount = $listPrice * $discountPercent * 0.1;
    echo 'Chiết khấu của '.$productDescription.' là: '.$discountAmount ;
}
?>
</body>
</html>
