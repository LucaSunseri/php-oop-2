<?php

trait Address
{
    private $route;
    private $number;
    private $zipCode;
    private $town;
    private $country;

    // Function SET 
    public function setFullAddress($_route, $_number, $_zipCode, $_town, $_country)
    {
        $this->route = $_route;
        $this->number = $_number;
        $this->zipCode = $_zipCode;
        $this->town = $_town;
        $this->country = $_country;
    }

    // Function GET
    public function getRoute()
    {
        return $this->route;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function getZipCode()
    {
        return $this->zipCode;
    }

    public function getTown()
    {
        return $this->town;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function getFullAddress()
    {
        return "$this->route, $this->number, $this->zipCode, $this->town, $this->country";
    }
}
