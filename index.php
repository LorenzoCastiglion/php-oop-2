<?php
include __DIR__ . '/partials/head.php';



include_once __DIR__ . '/Models/Food.php';
include_once __DIR__ . '/Models/Games.php';
include_once __DIR__ . '/Models/Beds.php';



$dog = new Category('dogs', 'dog.png');
$cat = new Category('cats', 'cat.png');







$food = new Food('ciccioli', 'dogfood1.jpg', 34.89, $dog,  ['manzo', 'patate', 'maiale', 'pollo'], '2022-12-11');
$food->setWeight('50', 'kg');
$food1 = new Food('Miaonese', 'catfood.jpg', 12.99, $cat,  ['pesce', 'patate', 'riso', 'sale'], '2023-12-11');
$food1->setWeight('200', 'g');
$food2 = new Food('Crocche', 'dogfood2.png', 43.89, $dog,  ['carote', 'patate', 'riso', 'sale', 'broccoli'], '2023-10-21');
$food2->setWeight('10', 'kg');


$game = new Games('osso di corda', 'corda.jpg', 12.30, $dog, 'small', ['stoffa', 'plastica']);




$bed = new Beds('lettino', 'letto.jpg', 25.90, $dog, 'esterno', ['seta', 'cotone', 'impermeabile'], 'medium');




?>


<body>


    <!-- header -->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Robe da Cani</a>
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

    <!-- cibo -->
    <div class="container wrapper">
        <h1>Food</h1>
        <div class="row">
            <div class="">
                <div class="card-group">
                    <div class="card">
                        <div class="text-center p-3">

                            <img src="./img/<?php echo $food->getImage() ?>" class="card-img-top prodotto" alt="...">

                        </div>
                        <div class="card-body">
                            <div class="row">
                                <h5 class="card-title col-6 fw-bold text-uppercase"> <?php echo $food->getTitle() ?></h5>
                                <div class="col-6 d-flex align-content-center align-items-center justify-content-end">
                                    <p class="m-0 me-2"><?php echo $food->category->getSpecies()  ?></p>
                                    <img src="./img/<?php echo $food->category->getIcon() ?>" class="icona" alt="...">
                                    
                                </div>
                            </div>

                            <p class="card-text fw-bold"><?php echo $food->getPrice() . '€' ?></p>
                            <p class="mb-0"><?php echo $food->getWeight()  ?></p>
                            
                            <p class="card-text"><span>Ingredients: <br></span><small class="text-muted"><?php foreach (($food->getIngredients()) as $ingredients) echo $ingredients . ' ' ?></small></p>
                            <p class="card-text small"> <span>Data di scadenza: <br></span> <?php echo $food->getExp_date()  ?></p>
                            <button type="button" class="btn btn-primary">Add to chart</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="text-center p-3">
                            <img src="./img/<?php echo $food1->getImage() ?>" class="card-img-top prodotto" alt="...">
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <h5 class="card-title col-6 fw-bold text-uppercase"> <?php echo $food1->getTitle() ?></h5>
                                <div class="col-6 d-flex align-content-center align-items-center justify-content-end">
                                    <p class="m-0 me-2"><?php echo $food1->category->getSpecies()  ?></p>
                                    <img src="./img/<?php echo $food1->category->getIcon() ?>" class="icona" alt="...">
                                </div>
                            </div>
                            <p class="card-text fw-bold"><?php echo $food1->getPrice() . '€' ?></p>
                            <p class="mb-0"><?php echo $food1->getWeight()  ?></p>
                            <p class="card-text"><span>Ingredients: <br></span><small class="text-muted"><?php foreach (($food1->getIngredients()) as $ingredients) echo $ingredients . ' ' ?></small></p>
                            <p class="card-text small"> <span>Data di scadenza: <br></span> <?php echo $food1->getExp_date()  ?></p>
                            <button type="button" class="btn btn-primary">Add to chart</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="text-center p-3">
                            <img src="./img/<?php echo $food2->getImage() ?>" class="card-img-top prodotto" alt="...">
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <h5 class="card-title col-6 fw-bold text-uppercase"> <?php echo $food2->getTitle() ?></h5>
                                <div class="col-6 d-flex align-content-center align-items-center justify-content-end">
                                    <p class="m-0 me-2"><?php echo $food2->category->getSpecies()  ?></p>
                                    <img src="./img/<?php echo $food2->category->getIcon() ?>" class="icona" alt="...">
                                </div>
                            </div>
                            <p class="card-text fw-bold"><?php echo $food2->getPrice() . '€' ?></p>
                            <p class="mb-0"><?php echo $food2->getWeight()  ?></p>
                            <p class="card-text"><span>Ingredients: <br></span><small class="text-muted"><?php foreach (($food2->getIngredients()) as $ingredients) echo $ingredients . ' ' ?></small></p>
                            <p class="card-text small"> <span>Data di scadenza: <br></span> <?php echo $food2->getExp_date()  ?></p>
                            <button type="button" class="btn btn-primary">Add to chart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Games -->
    <div class="container wrapper">
        <h1>Games</h1>
        <div class="row">
            <div class="">
                <div class="card-group">
                    <div class="card">
                        <div class="text-center p-3">
                            <img src="./img/<?php echo $game->getImage() ?>" class="card-img-top prodotto" alt="...">
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <h5 class="card-title col-6 fw-bold text-uppercase"> <?php echo $game->getTitle() ?></h5>
                                <div class="col-6 d-flex align-content-center align-items-center justify-content-end">
                                    <p class="m-0 me-2"><?php echo $game->category->getSpecies()  ?></p>
                                    <img src="./img/<?php echo $game->category->getIcon() ?>" class="icona" alt="...">
                                </div>
                            </div>
                            <p class="card-text fw-bold"><?php echo $game->getPrice() . '€' ?></p>
                            <p class="card-text"><span>Ingredients: <br></span><small class="text-muted"><?php foreach (($game->getMaterial()) as $materials) echo $materials . ' ' ?></small></p>
                            <button type="button" class="btn btn-primary">Add to chart</button>
                        </div>
                    </div>
                   
                    <div class="card">
                        <div class="text-center p-3">
                            <img src="./img/<?php echo $game->getImage() ?>" class="card-img-top prodotto" alt="...">
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <h5 class="card-title col-6 fw-bold text-uppercase"> <?php echo $game->getTitle() ?></h5>
                                <div class="col-6 d-flex align-content-center align-items-center justify-content-end">
                                    <p class="m-0 me-2"><?php echo $game->category->getSpecies()  ?></p>
                                    <img src="./img/<?php echo $game->category->getIcon() ?>" class="icona" alt="...">
                                </div>
                            </div>
                            <p class="card-text fw-bold"><?php echo $game->getPrice() . '€' ?></p>
                            <p class="card-text"><span>Ingredients: <br></span><small class="text-muted"><?php foreach (($game->getMaterial()) as $materials) echo $materials . ' ' ?></small></p>
                            <button type="button" class="btn btn-primary">Add to chart</button>
                        </div>
                    </div>

                    <div class="card">
                        <div class="text-center p-3">
                            <img src="./img/<?php echo $game->getImage() ?>" class="card-img-top prodotto" alt="...">
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <h5 class="card-title col-6 fw-bold text-uppercase"> <?php echo $game->getTitle() ?></h5>
                                <div class="col-6 d-flex align-content-center align-items-center justify-content-end">
                                    <p class="m-0 me-2"><?php echo $game->category->getSpecies()  ?></p>
                                    <img src="./img/<?php echo $game->category->getIcon() ?>" class="icona" alt="...">
                                </div>
                            </div>
                            <p class="card-text fw-bold"><?php echo $game->getPrice() . '€' ?></p>
                            <p class="card-text"><span>Ingredients: <br></span><small class="text-muted"><?php foreach (($game->getMaterial()) as $materials) echo $materials . ' ' ?></small></p>
                            <button type="button" class="btn btn-primary">Add to chart</button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

    </div>

    <!-- footer -->



</body>