<?php


class Point2D
{
    private $x;
    private $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param mixed $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * @param mixed $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }

    public function setXY($x, $y)
    {
        $this->$x = $x;
        $this->$y = $y;
    }

    public function getXY()
    {
        $arr = [];
        array_push($arr, $this->getX());
        array_push($arr, $this->getY());
        return $arr;
    }

    public function __toString()
    {
        return "x : $this->x, y : $this->y";
    }
}