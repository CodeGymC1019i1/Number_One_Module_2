<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $description = $_POST['description'];
    $price = $_POST['price'];
    $discountPercent = $_POST['discount_percent'];
    $discountAmount = $price * $discountPercent / 100;
    $discountPrice = $price - $discountAmount;
    echo "<div id='content'>";
    echo "<h1>Product Discount Calculator</h1>";
    echo "<label>Product Description: </label>";
    echo "<span>$description</span>";
    echo "<br>";
    echo "<label>Price:</label>";
    echo "<span> $price $</span>";
    echo "<br>";
    echo "<label>Discount Percent:</label>";
    echo "<span> $discountPercent %</span>";
    echo "<br>";
    echo "<label>Discount Amount:</label>";
    echo "<span>$discountAmount $</span>";
    echo "<br>";
    echo "<label>Discount Price:</label>";
    echo "<span> $discountPrice $</span>";
    echo "</div>";

}
?>
</body>
</html>
