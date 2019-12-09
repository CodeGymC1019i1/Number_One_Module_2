<?php
namespace Controller;

class Employee
{
    public $they;
    public $name;
    public $birthday;
    public $address;
    public $position;
    public function __construct($they, $name, $birthday, $address, $position)
    {
        $this->they = $they;
        $this->name = $name;
        $this->birthday = $birthday;
        $this->address = $address;
        $this->position = $position;
    }
    public function getName(){
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setInfo()
    {
        return "They: ".$this->they."- Name: ".$this->name."- Address: " . $this->address;
    }
}