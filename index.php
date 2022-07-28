<?php

require_once __DIR__ . '/ProductTemplate.php';
require_once __DIR__ . '/UserAnonymous.php';
require_once __DIR__ . '/UserRegistered.php';


$Food_Reico_Dog = new ProductTemplate('Alimenti','Cani');
$Food_Reico_Dog->brand = 'Reico';
$Food_Reico_Dog->price = 49;

$Game_Trixie_Birds = new ProductTemplate('Giochi', 'Uccelli');
$Game_Trixie_Birds->brand = 'Trixie';
$Game_Trixie_Birds->price = 16;

$Kennel_Vounot_Cat = new ProductTemplate('Cucce', 'Gatti');
$Kennel_Vounot_Cat->brand = 'Vounot';
$Kennel_Vounot_Cat->price = 69;


$Registered = new UserRegistered('Giuseppe', 'Verdi', 'g.verdi@mail.it');
$Anonymous = new UserAnonymous('Mario', 'Rossi', 'm.rossi@mail.it');

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
        
            echo $Registered->sayHello();
        ?>
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