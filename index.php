<?php
include __DIR__ .'/partials/head.php';

include_once __DIR__ . '/Models/Product.php';
include_once __DIR__ . '/Models/Category.php';
include_once __DIR__ . '/Models/Food.php';
include_once __DIR__ . '/Models/Games.php';
include_once __DIR__ . '/Models/Beds.php';


$dog = new Category('cane');
$cat = new Category('gatto');




$prod = new Product('cicci', 'crr.jpj', 9.8, $dog);


$food = new Food('cicci', 'crr.jpj', 9.8, $dog, '10/11?2023', 4, ['carne', 'patate', 'banane']);
var_dump($food);

echo "<br>";
$game = new Games('osso', 'osso.jps', 12.30, $cat, 'small', ['stoffa', 'plastica']);
var_dump($game);
?>