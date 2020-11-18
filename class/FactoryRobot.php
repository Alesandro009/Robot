<?php
require_once 'Robot.php';

class FactoryRobot
{

    private $Robots = [];
    function __construct()
    {
    }
  

    /** 
     * * param $count - counts of robots
     * param $paramsRobot - params of the robots(type,height,weigth,speed)
     */
    function createRobot($count = 1, $paramsRobot = [])
    {
        $paramsRobot['type'] = isset($paramsRobot['type']) ? $paramsRobot['type'] : rand(7, 34);
        for ($i = 0; $i < $count; $i++) {
            $this->Robots[] = new Robot($paramsRobot);
        }
        return $this->Robots;
    }
}
