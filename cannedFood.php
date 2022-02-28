<?php
require_once './product.php';

class CannedFood extends Product
{
    protected string $type;

    function __construct($_type)
    {
        $this->available = true;
        $this->price = 35.33;
        $this->brand = 'Monge';
        $this->name = 'Fresh Puppy';

        $this->setType($_type);
    }

    /**
     * Get the value of type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}

$meatCannedFood = new CannedFood('Meat');

var_dump($meatCannedFood);
