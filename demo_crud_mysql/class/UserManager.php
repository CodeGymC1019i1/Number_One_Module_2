<?php


class UserManager
{
    protected $userDB;

    public function __construct()
    {
        $dbname = "mysql:host=localhost;dbname=product_manager;charset=utf8";
        $username = "quangdong";
        $password = "@Dong071094";
        $db = new DBconnect($dbname, $username, $password);
        $this->userDB = new UserDB($db->connect());
    }

    public function getList()
    {
        return $this->userDB->getList();
    }

    public function add($user)
    {
        $this->userDB->create($user);
    }

    public function delete($id)
    {
        $this->userDB->delete($id);
    }

    public function edit($id, $name, $age, $address, $avatar)
    {
        $this->userDB->edit($id, $name, $age, $address, $avatar);
    }

    public function getUserID($id)
    {
      return $this->userDB->getValueID($id);
    }
}