<?php

require_once __DIR__ . '/ProductTemplate.php';
require_once __DIR__ . '/UserAnonymous.php';
require_once __DIR__ . '/UserRegistered.php';
require_once __DIR__ . '/PrepaidCard.php';

$Food_Reico_Dog = new ProductTemplate('Alimenti','Cani');
$Food_Reico_Dog->brand = 'Reico';
$Food_Reico_Dog->price = 49;

$Game_Trixie_Birds = new ProductTemplate('Giochi', 'Uccelli');
$Game_Trixie_Bird->brand = 'Trixie';
$Game_Trixie_Bird->price = 16;

$Kennel_Vounot_Cat = new ProductTemplate('Cucce', 'Gatti');
$Kennel_Vounot_Cat->brand = 'Vounot';
$Kennel_Vounot_Cat->price = 69;


$Giuseppe = new UserRegistered('Giuseppe', 'Verdi', 'g.verdi@mail.it');
$Giuseppe->prepaidcard = new PrepaidCard();
$Mario = new UserAnonymous('Mario', 'Rossi', 'm.rossi@mail.it');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
</head>
<body>

    <h1> 
        Il Mondo degli Animali
    </h1>

    <br>
    <br>

    <div>
        <?php
            echo $Giuseppe->sayHello();

            $Giuseppe->putProductInCart([$Food_Reico_Dog, $Game_Trixie_Bird]); /* Passare sempre un array di prodotti(vedi funzione "putProductIncart" */
        ?>
        <br>
        <br>
        Il totale del tuo ordine è pari a <?php echo $Giuseppe->doTheTotal();?> euro
        <br>
        <br>
        <?php echo $Giuseppe->doThePayment();?>
    </div>

    <br>
    <br>

    <div>

        Qui trovi una panoramica dei nostri prodotti più venduti: 
        <br>
        <br>

        <?php
        
            echo $Food_Reico_Dog->getInfo();
        ?>

        <br>

        <?php
        
            echo $Game_Trixie_Birds->getInfo();
        ?>

        <br>

        <?php
        
            echo $Kennel_Vounot_Cat->getInfo();
        ?>
    </div>
    


<?php


?>

    
</body>
</html>