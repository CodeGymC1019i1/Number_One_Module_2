<?php

class QuadraticEquation
{
    public $a;
    public $b;
    public $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function delta(){
        $delta=$this->b*$this->b-4*$this->a*$this->c;
        return $delta;
    }

    public function getRoot1(){
        $root1=(-$this->b+sqrt($this->b*$this->b-4*$this->a*$this->c))/2*$this->a;
        return $root1;
    }
    public function getRoot2(){
        $root2=(-$this->b-sqrt($this->b*$this->b-4*$this->a*$this->c))/2*$this->a;
        return $root2;
    }
    public function getRoot3(){
        $root3=-$this->b/2*$this->a;
        return $root3;
    }
}
function checkDelta(){
    $quadratic=new QuadraticEquation(1,2,3);
    if($quadratic->delta()>0){
        echo 'Nghiệm của phương trình là: '.$quadratic->getRoot1().'and'.$quadratic->getRoot2();
    }
    if($quadratic->delta()<0){
        echo 'Phương trình vô nghiệm';
    }
    if($quadratic->delta()==0){
        echo 'Nghiệm của phương trình là: '.$quadratic->getRoot3();
    }
}
checkDelta();
?>