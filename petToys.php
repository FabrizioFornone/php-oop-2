<?php
require_once './product.php';

class PetToys extends Product
{
    protected string $material;

    function __construct($_material)
    {
        $this->available = false;
        $this->price = 14.39;
        $this->brand = 'West Paw';
        $this->name = 'Chuckit!';

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
