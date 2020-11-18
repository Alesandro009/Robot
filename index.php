<?php
require_once 'class/FactoryRobot.php';
require_once 'class/MergedRobot.php';

$factory = new FactoryRobot();
$mergedRobot = new MergedRobot();


$firstTypeRobot= $factory->createRobot(2);// Creating robots 
$secondTypeRobot=$factory->createRobot(5,['type'=>'3']);
$thirdTypeRobot=$factory->createRobot(35,['type'=>3,'height'=>23,'weight'=>67,'speed'=>32]);

print_r($firstTypeRobot);//Printing rezult of adding

$fristMergedRobot=$mergedRobot->addRobots($firstTypeRobot); //Merged robots
$fristMergedRobot=$mergedRobot->addRobots($secondTypeRobot); //Merged robots
$fristMergedRobot=$fristMergedRobot->mergeRobot();
// Printing rezults
print_r($fristMergedRobot);
print_r($fristMergedRobot->getSpeed());
print_r($fristMergedRobot->getWeight());
