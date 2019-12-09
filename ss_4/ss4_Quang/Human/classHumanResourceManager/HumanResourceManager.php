<?php

namespace human;
class HumanResourceManager
{
    private $name;
    private $birthday;
    private $address;
    private $jobPosition;

    public function __construct($name, $birthday, $address, $jobPosition)
    {
        $this->name = $name;
        $this->address = $address;
        $this->birthday = $birthday;
        $this->jobPosition = $jobPosition;

    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
    public function setBirthday($birthday){
        $this->birthday=$birthday;
    }
    public function getBirthday(){
        return $this->birthday;
    }
    public function setAddress($address){
        $this->address=$address;
    }
    public function getAddress(){
        return $this->address;
    }
    public function setJobPosition($jobPosition){
        $this->jobPosition=$jobPosition;
    }
    public function getJobPosition(){
        return $this->jobPosition;
    }
}
?>