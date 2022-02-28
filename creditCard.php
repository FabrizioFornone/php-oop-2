<?php

class CreditCard
{
    protected string $ownerName;
    protected string $cardNumber;
    protected int $cvv;
    protected string $expiryDate;

    function __construct($_ownerName, $_cardNumber, $_cvv, $_expiryDate)
    {
        $this->setOwnerName($_ownerName);
        $this->setCardNumber($_cardNumber);
        $this->setCvv($_cvv);
        $this->setExpiryDate($_expiryDate);
    }


    /**
     * Get the value of ownerName
     */
    public function getOwnerName()
    {
        return $this->ownerName;
    }

    /**
     * Set the value of ownerName
     *
     * @return  self
     */
    public function setOwnerName($ownerName)
    {
        $this->ownerName = $ownerName;

        return $this;
    }

    /**
     * Get the value of cardNumber
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * Set the value of cardNumber
     *
     * @return  self
     */
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    /**
     * Get the value of cvv
     */
    public function getCvv()
    {
        return $this->cvv;
    }

    /**
     * Set the value of cvv
     *
     * @return  self
     */
    public function setCvv($cvv)
    {
        $this->cvv = $cvv;

        return $this;
    }

    /**
     * Get the value of expiryDate
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * Set the value of expiryDate
     *
     * @return  self
     */
    public function setExpiryDate($expiryDate)
    {
        $this->expiryDate = $expiryDate;

        return $this;
    }
}
