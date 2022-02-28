<?php
require_once './cannedFood.php';
require_once './petToys.php';

$meatCannedFood = new CannedFood('Meat', true, 9.29, 'Monge', 'Fresh Puppy');

var_dump($meatCannedFood);

$petBall = new petToys('Plastic', false, 14.29, 'West Paw', 'Chuckit!');

var_dump($petBall);
