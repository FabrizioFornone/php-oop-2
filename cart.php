<?php

require_once './user.php';
require_once './creditCard.php';
require_once './cannedFood.php';
require_once './petToy.php';
require_once './kennel.php';

$user1 = new User('Fabrizio', 'Fornone', true, '198237645');

$totalPurchase = [
    new CannedFood(true, 9.29, 'Monge', 'Fresh Puppy', 'Meat'),
    new petToy(false, 14.29, 'West Paw', 'Chuckit!', 'Plastic'),
    new Kennel(true, 79.99, 'Pet Mate', 'Woody', 35.23, 'Huge'),
];


class Cart
{
    public float $finalValue;
    public array $purchaseValue;

    public function getPurchaseValue($array, $array2)
    {
        $array2 = [];
        foreach ($array as $item) {
            $this->array2[] = $item->getPrice();
        }
        return $array2;
    }
}
