<?php

require_once './user.php';

class Cart
{
    protected $items = [];
    protected $amount;

    public function __construct($_array, $_user)
    {
        $this->items = $_array;

        foreach ($_array as $item) {
            $this->amount += $item->getPrice();
        };

        if ($_user->getIsRegistered()) {
            $this->amount = $this->amount * 0.8;
        }
    }
}
