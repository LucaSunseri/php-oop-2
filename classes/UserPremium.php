<?php

require_once __DIR__ . "/User.php";

class UserPremium extends User
{

    function __construct($_name, $_surname)
    {
        parent::__construct($_name, $_surname);
        $this->sale = 20;
    }
}
