<?php
include_once "ket_noi_co_so_du_lieu_bang_pdo.php";
// tạo bảng
$query = "CREATE TABLE member( member_id INT(10) NOT NULL auto_increment,
                                   name VARCHAR (50) NOT NULL,
                                   age INT(10) NULL,
                                   address VARCHAR(100) NULL, 
                                   CONSTRAINT member_pk PRIMARY KEY (member_id)
                                   )";
try {
    $conn->exec($query);
    echo "create success <br>";
} catch (PDOException $e) {
    echo $e->getMessage();
}

//thêm các bản ghi

$addMember = "INSERT INTO member (name, age, address) values 
                    ('Cong', 32, 'Hai Phong'), 
                    ('Cuong', 19, 'Ha Noi'), 
                    ('Quang', 22, 'Bac Giang'), 
                    ('Dong', 18, 'Ha Noi'), 
                    ('Dong', 25, 'Bac Ninh')";

try {
//    $conn->exec($addMember); chạy 1 lần thôi :v
    echo "create record success <br>";
} catch (PDOException $e) {
    echo $e->getMessage();
}

// lấy ra id bản ghi chuẩn bị insert

try {
    $lastID = $conn->lastInsertId();
    echo "$lastID <br>";
} catch (PDOException $e) {
    echo $e->getMessage();
}

//thực hiện nhiều query

try {
    $query1 = "CREATE TABLE products (
                product_id INT(10) NOT NULL auto_increment,
                product_name VARCHAR(50) NOT NULL,
                product_price INT(100) NULL,
                CONSTRAINT product_pk PRIMARY KEY (product_id)
                )";
    $query2 = "INSERT INTO product (product_name, product_price) VALUES
                    ('can', 32000), 
                    ('Co', 32000), 
                    ('Da', 32000) 
                    )";
    $query3 = "INSERT INTO product (product_name, product_price) VALUES
                    ('but', 12000), 
                    ('thuoc', 12000), 
                    ('sach', 12000) 
                    )";
    $conn->beginTransaction();
    $conn->exec($query1);
    $conn->exec($query2);
    $conn->exec($query3);
    $conn->commit();
    echo "multi query success";
} catch (PDOException $e) {
    $e->getMessage();
}




























