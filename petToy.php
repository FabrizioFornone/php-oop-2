<?php
require_once './product.php';

class PetToy extends Product
{
    protected string $material;

    function __construct(bool $_available, float $_price, string $_brand, string $_name, string $_material)
    {
        parent::__construct($_available, $_price, $_brand, $_name);

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
