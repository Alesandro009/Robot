<?php
require_once 'Robot.php';

use Robot;

class FactoryRobot
{
    private $typeRobot;

    function addType(Robot $robot)
    {
        $this->addType[] = $robot;
    }
    function createRobot($count,$paramsRobot)
    {
        $rez = [];
        for ($i = 0; $i < $count; $i++) {
            $rez[]=new Robot($paramsRobot);
        }
    }

    function mergeRobot(){
        
    }
}
