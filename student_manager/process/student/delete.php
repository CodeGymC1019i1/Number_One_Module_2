<?php
session_start();
if ($_SESSION['username'] !== "admin") {
    echo "<script>alert('you are not admin')</script>";
    echo "<script>window.location = '../../index.php'</script>";
} else {
    include_once "../../services/StudentManager.php";
    $path = "../../data/student.json";

    $index = $_GET['index'];
    $listStudent = new StudentManager($path);
    $listStudent->delete($index);

    header("location: ../../index.php");
}