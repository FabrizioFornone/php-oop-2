<?php

class User
{
    protected string $name;
    protected string $surname;
    protected bool $isRegistered = false;
    protected string $id;

    function __construct($_name, $_surname, $_isRegistered, $_id)
    {
        $this->setName($_name);
        $this->setSurname($_surname);
        $this->setIsRegistered($_isRegistered);
        $this->setId($_id);
    }


    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of surname
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set the value of surname
     *
     * @return  self
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }
    /**
     * Get the value of isRegistered
     */
    public function getIsRegistered()
    {
        return $this->isRegistered;
    }

    /**
     * Set the value of isRegistered
     *
     * @return  self
     */
    public function setIsRegistered($isRegistered)
    {
        $this->isRegistered = $isRegistered;

        return $this;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
