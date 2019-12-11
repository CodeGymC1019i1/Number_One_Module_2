<?php
namespace Controller;

class UserManager extends Manager
{
    public function add($user)
    {
    $listUser = $this->readData();
        $data = [
            'username' => $user->username,
            'password' => $user->password,
            'email' => $user->email,
            'level' => $user->level
        ];
        array_push($listUser, $data);
        $this->saveData($listUser);
    }
//     public function getList()
//         {
//             $data = $this->readFile();
            
//             $arr = [];
//             foreach ($data as $item) {
//                 $user = new User(
//                 $item['username'],
//                 $item['password'],
//                 $item['email'],
//                 $item['level']
//                                     );
//                                     array_push($arr, $user);
//                                 }
//                                 return $arr;
//                             }
 }