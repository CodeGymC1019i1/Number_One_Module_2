<?php

class person {
    public $name;
    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
}

$hoang = new person();
$hoang->set_name("hoàng");
echo $hoang->get_name();
var_dump($hoang);
