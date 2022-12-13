<?php
include __DIR__ .'/partials/head.php';

include_once __DIR__ . '/Models/Product.php';
include_once __DIR__ . '/Models/Category.php';
include_once __DIR__ . '/Models/Food.php';
include_once __DIR__ . '/Models/Games.php';
include_once __DIR__ . '/Models/Beds.php';


$banana = new Category('cane');
$banaa = new Category('gatto');

var_dump($banaa);


$prod = new Product('cicci', 'crr.jpj', 9.8, $banana);

var_dump($prod);


?>