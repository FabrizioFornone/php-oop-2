<?php
require_once './product.php';

class PetToy extends Product
{
    protected string $material;

    function __construct($_available, $_price, $_brand, $_name, $_material)
    {
        $this->available = $_available;
        $this->price = $_price;
        $this->brand = $_brand;
        $this->name = $_name;

        $this->setMaterial($_material);
    }

    /**
     * Get the value of material
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Set the value of material
     *
     * @return  self
     */
    public function setMaterial($material)
    {
        $this->material = $material;

        return $this;
    }
}
