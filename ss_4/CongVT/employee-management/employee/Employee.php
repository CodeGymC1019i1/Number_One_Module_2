<?php

namespace employee;

class Employee
{
    public $name;
    public $surName;
    public $birthDay;
    public $address;
    public $position;
    //construction
    public function __construct($name, $surName, $birthDay, $address, $position)
    {
        $this->name = $name;
        $this->surName = $surName;
        $this->birthDay = $birthDay;
        $this->address = $address;
        $this->position = $position;
    }
}