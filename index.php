<?php

require_once  './cart.php';
require_once   './product.php';
require_once  './cannedFood.php';
require_once  './petToy.php';
require_once   './kennel.php';
require_once  './creditCard.php';

$user1 = new User('Fabrizio', 'Fornone', true, '198237645');

$creditCard1 = new CreditCard('FornoneFabrizio', '1234 5678 8123 4553', '745', '2023-08');


$totalPurchase = [
    new CannedFood(true, 9.29, 'Monge', 'Fresh Puppy', 'Meat'),
    new PetToy(false, 14.29, 'West Paw', 'Chuckit!', 'Plastic'),
    new Kennel(true, 79.99, 'Pet Mate', 'Woody', 35.23, 'Huge'),
];


$cart1 = new Cart($totalPurchase, $user1, $creditCard1);

var_dump($cart1);
