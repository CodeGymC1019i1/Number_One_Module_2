<?php

function readJson($path)
{
    $dataJson = file_get_contents($path);
    return json_decode($dataJson, true);
}

function saveData($path, $data)
{
    $data = json_encode($data);
    file_put_contents($path, $data);
}

function delete($path, $id)
{
    $arr = readJson($path);
    array_splice($arr, $id, 1);
    saveData($path, $arr);
    header("location: index.php");
}