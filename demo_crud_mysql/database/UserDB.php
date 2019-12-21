<?php


class UserDB
{
    protected $conn;

    public function __construct($connect)
    {
        $this->conn = $connect;
    }

    public function getList()
    {
        $sql = "SELECT * FROM users";
        $stmt = $this->conn->query($sql);
        $result = $stmt->fetchALL();
        $arr = [];
        foreach ($result as $item) {
            $user = new User($item['id'], $item['name'], $item['age'], $item['address']);
            array_push($arr, $user);
        }
        return $arr;
    }

    public function create($user)
    {
        $id = $this->conn->lastInsertID();
        $name = $user->getName();
        $age = $user->getAge();
        $address = $user->getAddress();
        $sql = "INSERT INTO users (id, name, age, address) VALUE (?, ?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->bindParam(2, $name);
        $stmt->bindParam(3, $age);
        $stmt->bindParam(4, $address);
        $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM users WHERE id=$id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }

    public function edit($id)
    {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $address = $_POST['address'];

        $sql = "UPDATE users SET name = '$name', age = $age, address = '$address' WHERE id=$id";
        var_dump($sql);
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        header("location: ../../index.php");
    }

    public function getValueID($id)
    {
        $sql = "SELECT * FROM users WHERE id=$id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $user = new User($id, $result[0]['name'], $result[0]['age'], $result[0]['address']);
        return $user;
    }

}