<?php

class Application
{
    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Application();
        }
        return self::$instance;
    }

    public function __toString()
    {
        return "hihi";
    }
}
