<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
        <?php
        $customerlist = array(
            "1" => array("ten" => "Mai Văn Hoàn",
                         "ngaysinh" => "1983-08-20",
                         "diachi" => "Hà Nội",
                         "anh" => "img/img1.jpg"),
            "2" => array("ten" => "Nguyễn Văn Nam", 
                         "ngaysinh" => "1983-08-20", 
                         "diachi" => "Bắc Giang", 
                         "anh" => "images/img2.jpg"),
            "3" => array("ten" => "Nguyễn Thái Hòa", 
                         "ngaysinh" => "1983-08-21", 
                         "diachi" => "Nam Định", 
                         "anh" => "images/img3.jpg"),
            "4" => array("ten" => "Trần Đăng Khoa", 
                          "ngaysinh" => "1983-08-22", 
                          "diachi" => "Hà Tây", 
                          "anh" => "images/img4.jpg"),
            "5" => array("ten" => "Nguyễn Đình Thi", 
                          "ngaysinh" => "1983-08-17", 
                          "diachi" => "Hà Nội", 
                          "anh" => "images/img5.jpg")
        );
        ?>
        <table>
                <tr>
                    <th>Tên</th>
                    <th>Ngày sinh</th>
                    <th>Địa chỉ</th>
                    <th>Ảnh</th>
                </tr>
                <?php foreach($customerlist as $key => $values){ ?>
                 <tr>
                     <td><?php echo $key ?> </td>
                     <td><?php echo $values['ten'] ?></td>
                     <td><?php echo $values['ngaysinh'] ?></td>
                     <td><?php echo $values['diachi'] ?></td>
                     <td><image src ='<?php echo $values['anh'] ?>' width = '60px' height ='60px'/></td>
                <?php } ?>
                </tr>
            </table>
</body>
</html>