<?php
class Robot
{
    private $height; //height of robot
    private $weight; //weight of robot
    private $speed; //speed of robot
    private $type; //type of robot


    /*
    $paramsRobot  - array with params of the robot(
        type,height,weight,speed
    )
    */
    function __construct($paramsRobot = array())
    {
        $this->height = isset($paramsRobot['height']) ? $paramsRobot['height'] : rand(3, 56);
        $this->weight = isset($paramsRobot['weight']) ? $paramsRobot['weight'] : rand(2, 45);
        $this->speed = isset($paramsRobot['speed']) ? $paramsRobot['speed'] : rand(7, 34);
        $this->type = isset($paramsRobot['type']) ? $paramsRobot['type'] : rand(7, 34);
    }
}
