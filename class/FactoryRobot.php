<?php
require_once 'Robot.php';

class FactoryRobot
{
    public $Robots;

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
        return $this;
    }

    /**
     * Merged to robots
     * return Object Robot
     * 
     */
    function mergeRobot()
    {
        if (!empty($this->Robots)) {
            $tmpRobot = [];
            $minArray = [];
            foreach ($this->Robots as $robot) {
                $tmpRobot['height'] += $robot->height;
                $tmpRobot['weight'] += $robot->weight;
                $minArray[] = $robot->speed;
                $tmpRobot['type'] = $robot->type;
            }
            $tmpRobot['speed'] = min($minArray);
            return new Robot($tmpRobot);
        }
    }
}
