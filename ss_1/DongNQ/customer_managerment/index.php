<html>
<head>
    <meta charset="utf-8">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>


<?php
$customerList = array(
    "1" => array(
        "ten" => "Mai Van Hoan",
        "ngaysinh" => "1983-08-20",
        "diachi" => "Ha Noi",
        "anh" => "images/Hoan"
    ),
    "2" => array(
        "ten" => "Nguyen Van Nam",
        "ngaysinh" => "1983-08-20",
        "diachi" => "Bac Giang",
        "anh" => "images/Nam"
    ),
    "3" => array(
        "ten" => "Ngo Thai Hoa",
        "ngaysinh" => "1983-08-21",
        "diachi" => "Nam Dinh",
        "anh" => "images/Hoa"
    ),
    "4" => array(
        "ten" => "Tran Dang Khoa",
        "ngaysinh" => "1983-08-22",
        "diachi" => "Ha Tay",
        "anh" => "images/khoa"
    ),
    "5" => array(
        "ten" => "Nguyen Dinh Thi",
        "ngaysinh" => "1983-08-17",
        "diachi" => "Ha Noi",
        "anh" => "images/thi"
    )
);
foreach ($customerList as $key => $value) {
    echo "<tr>";
    echo "<td>$key</td>";
    echo "<td>" . $value['ten'] . "</td>";
    echo "<td>" . $value['ngaysinh'] . "</td>";
    echo "<td>" . $value['diachi'] . "</td>";
    echo "<td><img src=" . $value['anh'] . "></td>";
    echo "</tr>";
}
?>
</table>
</body>
</html>
