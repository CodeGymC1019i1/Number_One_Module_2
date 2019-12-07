<?php


class UserManager
{
    private $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function readData()
    {
        $dataJson = file_get_contents($this->path);
        return json_decode($dataJson, true);
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

    public function saveData($user)
    {
        try {
            $dataJson = json_encode($user);
            file_put_contents($this->path, $dataJson);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function add($user)
    {
        $listUser = $this->readData();
        $data = [
            'name' => $user->username,
            'password' => $user->password
        ];
        array_push($listUser, $data);
        $this->saveData($listUser);
    }

    public function checkLogin($username, $password)
    {
        $listUser = $this->readData();
        foreach ($listUser as $user) {
            if ($user['name'] == $username && $user['password'] == $password) {
//                echo "<script type='text/javascript'>confirm('welcome to employee manager website');</script>";
                header("location: index.php");

            }
        }
    }
}