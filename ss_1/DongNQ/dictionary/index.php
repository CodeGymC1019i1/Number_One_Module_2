<html>
<head>
    <meta charset="utf-8"/>
    <style>
        input[type=text] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }

        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
</head>
<body>
<h2>Từ Điển Anh - Việt</h2>
<form method="post">
    <input type="text" name="search" placeholder="Nhập từ cần tìm kiếm" value="<?php echo $_POST['search']; ?>">
    <input type="submit" id="submit" value="Tìm">
</form>
<?php
$dictionary = array(
    "hello" => "xin chao",
    "how" => "the nao",
    "book" => "quyen vo",
    "computer" => "may tinh"
);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchWord = $_POST["search"];
    $flag = 0;
    foreach ($dictionary as $word => $description) {
        if ($word == $searchWord) {
            echo "Tu: " . $word . "<br> Co nghia la: " . $description;
            $flag = 1;
        }
    }
    if ($flag == 0) {
        echo "khong tim thay tu can tra";
    }
}

?>
</body>
</html>