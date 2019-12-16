<?php
session_start();

include_once "../../services/GroupManager.php";

if ($_SESSION['username'] !== "admin") {
    echo "<script>alert('you are not admin')</script>";
    echo "<script>window.location = '../../index.php'</script>";
} else {

    $path = "../../data/group.json";

    $index = $_GET['index'];
    $listGroup = new StudentManager($path);
    $listGroup->delete($index);

    header("location: index.php");
}