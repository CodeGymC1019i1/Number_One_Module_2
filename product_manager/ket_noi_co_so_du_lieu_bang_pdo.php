<?php
include_once "database.php";
$cdn = "mysql:host=localhost;dbname=product_manager";
$username = "quangdong";
$password = "@Dong071094";
try {
    $db = new database($cdn, $username, $password);
    $conn = $db->connect();
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

