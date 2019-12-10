<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 11/21/18
 * Time: 17:16
 */
include_once ('Rectangle.php');
include ('interface/ColorableInterface.php');

class Square extends Rectangle implements Colorable
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width);
    }

    public function howToColor()
    {
        // TODO: Implement howToColor() method.
        return "Color all four sides";
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
}