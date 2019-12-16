<?php
include_once "FileManager.php";

class UserManager extends FileManager
{

    public function add($user)
    {
        $listUser = $this->readData();
        $data = [
            'username' => $user->username,
            'password' => $user->password,
            'email' => $user->email
        ];
        array_push($listUser, $data);
        $this->saveData($listUser);
    }


    public function checkLogin($username, $password)
    {
        $listUser = $this->readData();
        foreach ($listUser as $user) {
            if ($user['username'] == $username) {
                if ($user['password'] == $password) {
                    header("location: ../../index.php");
                }
            }
        }
    }
}