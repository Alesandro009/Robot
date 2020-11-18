<?php
class Robot
{
    public $height; //height of robot
    public $weight; //weight of robot
    public $speed; //speed of robot
    public $type; //type of robot


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

    /**
     * Get speed of the robot
     */
    function getSpeed(){
        return $this->speed;
    }

    /**
     * Getting weight of the robot
     */
    function getWeight(){
        return $this->weight;
    }
}
