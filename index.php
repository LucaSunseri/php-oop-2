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
require_once __DIR__ . "/classes/CreditCard.php";
require_once __DIR__ . "/productsList.php";


$user1 = new User("Luca", "Sunseri");
$user1->setAge(18);
$user1->setEmail("luca.sunseri@gmail.com");
$user1->setFullAddress("Via Gangi", 18, 90019, "Trabia", "Italia");

$user_premium1 = new UserPremium("Giovanni", "Rossi");
$user_premium1->setAge(18);
$user_premium1->setEmail("giovanni.rossi@libero.it");
$user_premium1->setFullAddress("Via Roma", 312, 90121, "Palermo", "Italia");

var_dump($user_premium1);

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Shop</title>
</head>

<body>
    <h1 class="text-center">Shop &#128513; &#128722;</h1>

    <div class="container">
        <h2>Lista profotti presenti nello shop:</h2>
        <table class="table mb-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Prezzo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><?php echo $prodotto1->getName() ?></td>
                    <td><?php echo $prodotto1->getBrand() ?></td>
                    <td><?php echo $prodotto1->getPrice() ?>€</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td><?php echo $prodotto2->getName() ?></td>
                    <td><?php echo $prodotto2->getBrand() ?></td>
                    <td><?php echo $prodotto2->getPrice() ?>€</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td><?php echo $prodotto3->getName() ?></td>
                    <td><?php echo $prodotto3->getBrand() ?></td>
                    <td><?php echo $prodotto3->getPrice() ?>€</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td><?php echo $prodotto4->getName() ?></td>
                    <td><?php echo $prodotto4->getBrand() ?></td>
                    <td><?php echo $prodotto4->getPrice() ?>€</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td><?php echo $prodotto5->getName() ?></td>
                    <td><?php echo $prodotto5->getBrand() ?></td>
                    <td><?php echo $prodotto5->getPrice() ?>€</td>
                </tr>
            </tbody>
        </table>

        <div class="row mb-5">
            <div class="col">
                <h2>Utente Standard</h2>
                <h4><?php echo $user1->getName() ?> <?php echo $user1->getSurname() ?></h4>
                <p>Indirizzo di spedizione: <br> <?php echo $user1->getFullAddress() ?></p>
                <p>Email: <?php echo $user1->getEmail() ?></p>
                <p>Perchè ha <?php echo $user1->getAge() ?> anni ha diritto ad un sconto del <?php echo $user1->getSale() ?>%</p>
            </div>
            <div class="col">
                <h2>Utente Premium</h2>
                <h4><?php echo $user_premium1->getName() ?> <?php echo $user_premium1->getSurname() ?></h4>
                <p>Indirizzo di spedizione: <br> <?php echo $user_premium1->getFullAddress() ?></p>
                <p>Email: <?php echo $user_premium1->getEmail() ?></p>
                <p>Perchè ha <?php echo $user_premium1->getAge() ?> anni ed è un Utente Premium ha diritto ad un sconto del <?php echo $user_premium1->getSale() ?>%</p>
            </div>
        </div>
    </div>


</body>

</html>