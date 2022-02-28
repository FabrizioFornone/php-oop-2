<?php

require_once './user.php';
require_once './creditCard.php';

class Cart
{
    protected $shoppingCart = [];
    protected $overall;

    public function __construct($_array, $_user, $_creditCard)
    {
        $this->shoppingCart = $_array;

        foreach ($_array as $item) {
            $this->overall += $item->getPrice();
        };

        if ($_user->getIsRegistered()) {
            $this->overall = $this->overall * 0.8;
        }

        $expiryDate = strtotime($_creditCard->getExpiryDate());

        if ($expiryDate < strtotime(date('Y-m'))) {
            var_dump('è scaduta');
            exit();
        }
    }
}
