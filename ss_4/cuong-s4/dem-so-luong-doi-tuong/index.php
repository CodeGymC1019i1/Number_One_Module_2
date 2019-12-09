<?php
class Application{
    private $name;
    public static $count = 0;
    public function __construct($name){
        $this->name = $name;
        self::$count++;
    }
    public function __toString(){
        return "Application name:".$this->name." count:".self::$count."</br>";
    }
}
echo "Total objects count:".Application::$count."</br>";
echo $app1 = new Application("Cường");
echo $app2 = new Application("Quang");
?>
