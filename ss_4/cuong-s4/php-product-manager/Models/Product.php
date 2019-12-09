<?php
namespace Models;
class Product
{
    private $name;
    private $prive;
    
    public function __construct($name = NULL,$prive = 0){
        $this->name = $name;
        $this->prive = $prive;
    }
    public function setName($name){
       $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getPrive($prive)
    {
        $this->prive = $prive;
    }
    public function setPrive()
    {
        return $this->prive;
    }
};