<?php
class Rectangle{
    public $width;
    public $height;
    function __construct($width,$height){
        $this->width=$width;
        $this->height=$height;
    }
    public function getArea(){
        $area=$this->width*$this->height;
        return $area;
    }
    public function getPerimeter(){
        $perimeter=2*($this->width+$this->height);
        return $perimeter;
    }
    public function Display(){
        return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
    }
}
$rectangle=new Rectangle(10,20);
echo "Diện tích là: ".$rectangle->getArea().'</br>';
echo "Chu vi là: ".$rectangle->getPerimeter().'</br>';
echo "Your ".$rectangle->Display();
?>
