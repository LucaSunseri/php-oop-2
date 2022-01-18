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
}
