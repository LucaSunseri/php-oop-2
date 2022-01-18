<!-- 
    Esercizio di oggi
    nome repo: php-oop-2
    Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
    Strutturare le classi gestendo l’ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
    Provate a far interagire tra di loro gli oggetti: ad esempio, l’utente dello shop inserisce una carta di credito...
    $c = new CreditCard(..);
    $user->insertCreditCard($c);
    BONUS:
    Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta). 
-->

<?php

require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/UserPremium.php";
require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/CreditCard.php";

$product1 = new Product("Latte", 12);
$product1->setBrand("Mellin");

var_dump($product1);

$user1 = new User("Luca", "Sunseri");
$user1->setAge(18);

var_dump($user1);

$user2 = new UserPremium("Giovanni", "Rossi");
$user2->setAge(18);

var_dump($user2);

$card = new CreditCard("12346487651584", "Luca Sunseri", "10-10-2022", 455);

var_dump($card);

$user1->setCreditCard($card);

var_dump($user1);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>