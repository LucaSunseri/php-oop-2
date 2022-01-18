<?php

class CreditCard
{
    private $number;
    private $holder;
    private $date;
    private $cvv;

    function __construct($_number,  $_holder, $_date, $_cvv)
    {
        $this->number = $_number;
        $this->holder = $_holder;
        $this->date = $_date;
        $this->cvv = $_cvv;
    }

    // Function SET 
    public function setNumber($_number)
    {
        $this->number = $_number;
    }

    public function setHolder($_holder)
    {
        $this->holder = $_holder;
    }

    public function setDate($_date)
    {
        $this->date = $_date;
    }

    public function setCvv($_cvv)
    {
        $this->cvv = $_cvv;
    }

    // Function GET 
    public function getNumber()
    {
        return $this->number;
    }

    public function getHolder()
    {
        return $this->holder;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getCvv()
    {
        return $this->cvv;
    }
}
