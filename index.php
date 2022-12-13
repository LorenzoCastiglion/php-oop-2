<?php
include __DIR__ .'/partials/head.php';



include_once __DIR__ . '/Models/Food.php';
include_once __DIR__ . '/Models/Games.php';
include_once __DIR__ . '/Models/Beds.php';



$dog = new Category('cane', 'dog.jpg');
$cat = new Category('gatto', 'cat.jpg');







$food = new Food('ciccioli', 'crr.jpj', 9.8, $dog, -3, ['carne', 'patate', 'banane'], '2022-12-11');



$game = new Games('osso', 'osso.jps', 12.30, $cat, 'small', ['stoffa', 'plastica']);




$bed = new Beds('lettino', 'letto.jpg', 25.90, $dog, 'esterno', ['seta', 'cotone', 'impermeabile'], 'medium');




?>


<body>
    <div class="container">
        <div class="row">
            <div class="">
            <div class="card-group">
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
            </div>
        </div>

    </div>


    
</body>