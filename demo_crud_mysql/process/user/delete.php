<?php
include_once "../../database/DBconnect.php";
include_once "../../database/UserDB.php";
include_once "../../class/UserManager.php";
include_once "../../class/User.php";

$id = $_GET['id'];
$userManager = new UserManager();
$userManager->delete($id);
header("location: ../../index.php");