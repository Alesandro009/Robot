<?php
class Robot
{
    private $height; //height of robot
    private $weight; //weight of robot
    private $speed; //speed of robot

    function __construct()
    {
        $this->height = rand(3, 56);
        $this->weight = rand(2, 45);
        $this->speed = rand(7, 34);
    }
}
