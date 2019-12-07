<?php


class Manager
{
    public $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function getData()
    {
        $data = $this->readData();
        $list = [];
        foreach ($data as $item) {
            $user = new User(
                $item['name'],
                $item['password']
            );
            array_push($list, $user);
        }
        return $list;
    }

    public function readData()
    {
        $dataJson = file_get_contents($this->path);
        return json_decode($dataJson, true);
    }

    public function saveData($object)
    {
        try {
            $dataJson = json_encode($object);
            file_put_contents($this->path, $dataJson);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}