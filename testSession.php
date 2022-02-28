<?php
require_once './cannedFood.php';
require_once './petToy.php';
require_once './kennel.php';

$meatCannedFood = new CannedFood(true, 9.29, 'Monge', 'Fresh Puppy', 'Meat');

var_dump($meatCannedFood);

$petBall = new petToy(false, 14.29, 'West Paw', 'Chuckit!', 'Plastic');

var_dump($petBall);

$midWestKennel = new Kennel(true, 79.99, 'Pet Mate', 'Woody', 35.23, 'Huge');

var_dump($midWestKennel);
