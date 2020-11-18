<?php
require_once 'Robot.php';
class MergedRobot
{
    private $Robots = [];

    function __construct($robots = [])
    {
        $this->Robots = $robots;
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

    function addRobots($robots = [])
    {
        $this->Robots += $robots;
        return $this;
    }
}
