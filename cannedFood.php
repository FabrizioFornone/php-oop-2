<?php
require_once './product.php';

class CannedFood extends Product
{
    protected string $type;

    function __construct($_type, $_available, $_price, $_brand, $_name)
    {
        $this->available = $_available;
        $this->price = $_price;
        $this->brand = $_brand;
        $this->name = $_name;

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

