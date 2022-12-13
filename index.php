<?php
include __DIR__ .'/partials/head.php';



include_once __DIR__ . '/Models/Food.php';
include_once __DIR__ . '/Models/Games.php';
include_once __DIR__ . '/Models/Beds.php';



$dog = new Category('cane');
$cat = new Category('gatto');




$prod = new Product('cicci', 'crr.jpj', 9.8, $dog);


$food = new Food('cicci', 'crr.jpj', 9.8, $dog, 4, ['carne', 'patate', 'banane'], '2022-12-11');
var_dump($food);

echo "<br>";
$game = new Games('osso', 'osso.jps', 12.30, $cat, 'small', ['stoffa', 'plastica']);
var_dump($game);

echo "<br>";

$bed = new Beds('lettino', 'letto.jpg', 25.90, $dog, 'esterno', ['seta', 'cotone', 'impermeabile'], 'medium');

var_dump($bed);


?>


<body>
    
</body>