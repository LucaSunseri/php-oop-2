<?php

class Product
{
    private $name;
    private $brand;
    private $price;

    function __construct($_name, $_price)
    {
        $this->name = $_name;
        $this->price = $_price;
    }

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
        $this->price = $_price;
    }

    public function getName($_name)
    {
        return $this->name;
    }

    public function getBrand($_brand)
    {
        return $this->brand;
    }

    public function getPrice($_price)
    {
        return $this->price;
    }
}
