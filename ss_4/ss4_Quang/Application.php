<?php


class Application
{
    private static $instance;

    public static function getInstance()
    {
        if(self::$instance==null){
            self::$instance=new Application();
        }
        return self::$instance;
    }
    public function __toString()
    {
        // TODO: Implement __toString() method.
        return "hihi";
    }
}
//$app1=Application::getInstance();
$app2=Application::getInstance();
//var_dump($app1);
var_dump($app2);
