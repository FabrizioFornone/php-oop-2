<?php
require_once './cannedFood.php';
require_once './petToys.php';

$meatCannedFood = new CannedFood('Meat');

var_dump($meatCannedFood);

$petBall = new petToys('Plastic');

var_dump($petBall);
