<?php
class Application{
    private static $ins;
    public static function getIns(){
        if(self::$ins === null){
    self::$ins = new Application();
    }
    return self::$ins;
}
public function __toString(){
    return "giá trị:";
}
}
var_dump($app = Application::getIns());
var_dump($app1 = Application::getIns());