<?php
class QuadraticEquation{
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c){
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    public function getDelta(){
        return $this->a." ".$this->b." ".$this->c;
    }
    public function getDiscriminant(){
        return pow($this->b,2) - 4*$this->a*$this->c;
    }
    public function getRoot1(){
        return (-$this->b+sqrt(pow($this->b,2) - 4*$this->a*$this->c))/2*$this->a;
    }
    public function getRoot2(){
        return (-$this->b-sqrt(pow($this->b,2) - 4*$this->a*$this->c))/2*$this->a;        
    }
    public function getRoot3(){
        return (-$this->b)/2*$this->a;
    }

}