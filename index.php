<?php

require_once __DIR__ . '/ProductTemplate.php';

$Food_Reico_Dog = new ProductTemplate('Alimenti', 'Cani');
$Food_Reico_Dog->brand = 'Reico';
$Food_Reico_Dog->price = 49;

$Game_Trixie_Birds = new ProductTemplate('Giochi', 'Uccelli');
$Game_Trixie_Birds->brand = 'Trixie';
$Game_Trixie_Birds->price = 16;

$Kennel_Vounot_Cat = new ProductTemplate('Cucce', 'Gatti');
$Kennel_Vounot_Cat->brand = 'Vounot';
$Kennel_Vounot_Cat->price = 69;

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

<?php

echo $Food_Reico_Dog->getInfo();

?>

    
</body>
</html>