<html>
<head>
    <meta charset="utf-8">
    <style>
        form {
            border: 3px solid #8E9CB2;
            width: 500px;
            height: 200px;
            padding: 30px;
        }

        h2 {
            text-align: center;
            color: blue;
        }

        label {
            width: 150px;
            padding-right: 40px;
            float: left;
            margin-bottom: 10px;
        }

        input[type=text] {
            width: 300px;
            float: left;
            margin-bottom: 10px;
        }

    </style>
</head>
<body>
<form method="post">
    <h2> Product Discount Calculator</h2>
    <div>
        <label>Product Description: </label>
        <input type="text" name="description" value="<?php echo $_POST["description"] ?>"> <br>
        <label>List Price: </label>
        <input type="text" name="price" value="<?php echo $_POST["price"] ?>"><br>
        <label>Discount Percent </label>
        <input type="text" name="discount" placeholder="%" value="<?php echo $_POST["discount"] ?>">  <br>
    </div>
    <input type="submit" value="Calculate Discount">
</form>

<?php
    $product = $_POST["description"];
    $price = $_POST["price"];
    $discount = $_POST["discount"];
    $discountAmount  = $price - ($price * $discount * 0.01);

    echo "giá của sản phẩm ".$product." sau khi giảm giá là: ".$discountAmount;
?>
</body>
</html>
