<?php


class Stopwatch
{
    private $startTime;
    private $endTime;


   public function __construct()
   {
       $this->startTime = microtime(false);
   }

    /**
     * @return mixed
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @return mixed
     */
    public function getStartTime()
    {
        return $this->startTime;
    }


    public function start()
    {
        $this->startTime = microtime(false);
    }

    public function end()
    {
        $this->endTime = microtime(false);
    }

    public function getElapsedTime()
    {
        return $this->endTime - $this->startTime;
    }
}