<?php
require_once './product.php';

class CannedFood extends Product
{
    protected string $type;

    function __construct($_type)
    {
        $this->available = true;
        $this->price = 34.63;
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

