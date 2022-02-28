<?php
require_once './product.php';

class Kennel extends Product
{
    protected float $weight;
    protected string $dimensions;

    function __construct(bool $_available, float $_price, string $_brand, string $_name, float $_weight, string $_dimensions)
    {
        parent::__construct($_available, $_price, $_brand, $_name);

        $this->setWeight($_weight);
        $this->setDimensions($_dimensions);
    }

    /**
     * Get the value of weight
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set the value of weight
     *
     * @return  self
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get the value of dimensions
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }

    /**
     * Set the value of dimensions
     *
     * @return  self
     */
    public function setDimensions($dimensions)
    {
        $this->dimensions = $dimensions;

        return $this;
    }
}
