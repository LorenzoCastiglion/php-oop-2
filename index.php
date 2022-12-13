<?php
include __DIR__ .'/partials/head.php';



include_once __DIR__ . '/Models/Food.php';
include_once __DIR__ . '/Models/Games.php';
include_once __DIR__ . '/Models/Beds.php';



$dog = new Category('cane', 'dog.png');
$cat = new Category('gatto', 'cat.png');







$food = new Food('ciccioli', 'crr.jpj', 9.8, $dog, -3, ['carne', 'patate', 'banane'], '2022-12-11');



$game = new Games('osso', 'osso.jps', 12.30, $cat, 'small', ['stoffa', 'plastica']);




$bed = new Beds('lettino', 'letto.jpg', 25.90, $dog, 'esterno', ['seta', 'cotone', 'impermeabile'], 'medium');




?>


<body>


<!-- header -->
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>



<!-- main -->
    <div class="container">
        <div class="row">
            <div class="">
            <div class="card-group">
  <div class="card">
    <img src="./img/<?php echo $food->category->getIcon()   ?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"> <?php echo $food->getTitle()  ?></h5>
      <p class="card-text"><?php  echo $food->getPrice() . '€' ?></p>
      <p class="card-text"><small class="text-muted"><?php foreach( ($food->getIngredients())as $ingredients) echo $ingredients . ' ' ?></small></p>
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


    <!-- footer -->


    
</body>