<?php

class Product
{
    private $name;
    private $brand;
    private $price;

    function __construct($_name, $_brand,  $_price)
    {
        $this->name = $_name;
        $this->brand = $_brand;
        $this->price = $this->formatPrice($_price);
    }

    // Function SET 
    public function setName($_name)
    {
        $this->name = $_name;
    }

    public function setBrand($_brand)
    {
        $this->brand = $_brand;
    }

    public function setPrice($_price)
    {
        $this->price = $this->formatPrice($_price);
    }

    // Function GET 
    public function getName()
    {
        return $this->name;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function getPrice()
    {
        return $this->price;
    }

    // Function PRIVATE
    private function formatPrice($_price)
    {
        return number_format($_price, 2, ",", ".");
    }
}
