<?php
include_once "PatientManager.php";

class Patient
{
    public $code;
    public $name;
    public $listPatient;

    public function __construct($name, $code)
    {
        $this->name = $name;
        $this->code = $code;

    }


    public function __toString()
    {
        return "name: ".$this->name." code: ".$this->code."<br>";
    }
}