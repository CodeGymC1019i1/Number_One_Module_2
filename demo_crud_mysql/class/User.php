<?php


class User
{
    protected $id;
    protected $name;
    protected $age;
    protected $address;

    public function __construct($id, $name, $age, $address)
    {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
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
    public function getAge()
    {
        return $this->age;
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
    public function getId()
    {
        return $this->id;
    }

}