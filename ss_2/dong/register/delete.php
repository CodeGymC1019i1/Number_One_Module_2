<?php
include_once "function.php";
$id = (int)$_GET['id'];
$path = 'data.json';
delete($path, $id);