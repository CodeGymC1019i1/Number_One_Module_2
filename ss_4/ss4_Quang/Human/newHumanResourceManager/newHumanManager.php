<?php

namespace newHuman;
class newHumanManager
{
    private $humanResources;

    public function __construct()
    {
        $this->humanResources=[];
    }
    public function add($humanResourceManger){
        $data=[
            'name'=>$this->name

        ];
    }
    public function getHuman(){
        return $this->humanResources;
    }
}
?>