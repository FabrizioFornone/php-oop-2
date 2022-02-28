<?php
require_once './product.php';

class CannedFood extends Product
{
    protected string $type;

    function __construct(bool $_available, float $_price, string $_brand, string $_name, string $_type)
    {
       parent::__construct($_available, $_price, $_brand, $_name);

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
