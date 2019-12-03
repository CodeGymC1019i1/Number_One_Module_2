<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product discount calculator</title>
</head>
<body>
<div id="content">
    <h1>Product Dicount Calculator</h1>
    <form action="display_discount.php" method="post">
        <div id="data">
            <label for="">Product description:</label>
            <input type="text" name="description">
            <br>
            <label for="">List price:</label>
            <input type="text" name="price">
            <br>
            <label for="">Discount percent:</label>
            <input type="text" name="discount_percent">
            (%)
            <br>
        </div>
        <div id="button">
            <label for=""> </label>
            <input type="submit" value="Calculate Discount">
        </div>
    </form>
</div>

</body>
</html>
