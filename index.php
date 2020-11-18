<?php
require_once 'class/FactoryRobot.php';

$factory = new FactoryRobot();

$firstTypeRobot= $factory->createRobot(2);// Creating robots 
$secondTypeRobot=$factory->createRobot(5,['type'=>'3']);
$thirdTypeRobot=$factory->createRobot(35,['type'=>3,'height'=>23,'weight'=>67,'speed'=>32]);

print_r($firstTypeRobot);//Printing rezult of adding

$mergedRobot=$factory->mergeRobot(); //Merged robots

// Printing rezults
print_r($mergedRobot);
print_r($mergedRobot->getSpeed());
print_r($mergedRobot->getWeight());
