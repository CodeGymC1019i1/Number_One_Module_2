<?php


class FileManager
{
    public $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function readData()
    {
        $dataJson = file_get_contents($this->path);
        return json_decode($dataJson, true);
    }

    public function saveData($object)
    {
        $data = json_encode($object);
        file_put_contents($this->path, $data);
    }

}