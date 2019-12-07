<?php


class Employee
{
    public $name;
    public $dateOfBirth;
    public $address;
    public $job;

    public function __construct($name, $dateOfBirth, $address, $job)
    {
        $this->name = $name;
        $this->dateOfBirth = $dateOfBirth;
        $this->address = $address;
        $this->job = $job;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $date_of_birth
     */
    public function setDateOfBirth($date_of_birth)
    {
        $this->date_of_birth = $date_of_birth;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @param mixed $job
     */
    public function setJob($job)
    {
        $this->job = $job;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getDateOfBirth()
    {
        return $this->date_of_birth;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return mixed
     */
    public function getJob()
    {
        return $this->job;
    }

    public function getInfo()
    {
        return "name: ".$this->name."- date of birth: ".$this->date_of_birth."- address: ".$this->address."- job: ".$this->job;
    }
}