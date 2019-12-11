<?php


class Circle
{
    protected $name;
    protected $color;
    protected $radius;

    public function __construct($name, $color, $radius)
    {
        $this->name = $name;
        $this->color = $color;
        $this->radius = $radius;
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
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return pow($this->radius, 2) * pi();
    }
    //info
    public function toString(){
        return "Name: ".$this->getName()."<br>Color: ".$this->getColor()."<br>Radius: "."<br>Area: ".$this->calculateArea()."<br>";
    }
}