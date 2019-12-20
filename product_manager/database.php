<?php


class database
{
    public $cdn;
    public $username;
    public $password;

    public function __construct($cdn, $username, $password)
    {
        $this->cdn = $cdn;
        $this->username = $username;
        $this->password = $password;
    }

    public function connect()
    {
        return new PDO($this->cdn, $this->username, $this->password);
    }
}