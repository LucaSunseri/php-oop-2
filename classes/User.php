<?php

require_once __DIR__ . "/Address.php";

class User
{
    private $name;
    private $surname;
    private $email;
    private $age;
    protected $sale = 0;
    private $creditCard = [];

    use Address;

    function __construct($_name, $_surname)
    {
        $this->name = $_name;
        $this->surname = $_surname;
    }

    // Function SET 
    public function setName($_name)
    {
        $this->name = $_name;
    }

    public function setSurname($_surname)
    {
        $this->surname = $_surname;
    }

    public function setEmail($_email)
    {
        $this->email = $_email;
    }

    public function setAge($_age)
    {
        if (is_int($_age) and $_age >= 16) {
            $this->age = $_age;
            if ($this->age >= 18 and $this->age <= 28) {
                $this->sale += 10;
            } elseif ($this->age >= 65) {
                $this->sale += 15;
            }
        }
    }

    public function setCreditCard($_creditCard)
    {
        $this->creditCard[] = $_creditCard;
    }

    // Function GET 
    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getSale()
    {
        return $this->sale;
    }

    public function getCreditCard()
    {
        return $this->creditCard;
    }
}
