<?php
class Patient
{
    public $name;
    public $code;
    public $arr;


    public function __construct($name, $code) {
    $this->name = $name;
    $this->code = $name;
    $this->arr = [];
    }
    public function enqueue()
    {
        $data =[
            'name' => $this->name,
            'code' => $this->code
        ];
        array_push($this->arr, $data);
        return $this->arr;
    }
    public function __toString()
    {
        return implode($this->arr)."";
    }
}