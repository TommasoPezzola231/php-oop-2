<?php 
    require __DIR__ . "/models/category.php";
    require __DIR__ . "/models/product.php";
    require __DIR__ . "/models/cuccia.php";
    require __DIR__ . "/models/food.php";
    require __DIR__ . "/models/game.php";
    
    $cane = new Category ("Per cani");
    $gatto = new Category("Per gatti");
    $biscotti = new Food ("Biscotti per cani", 20, "https://arcaplanet.vtexassets.com/arquivos/ids/273530-1800-1800/pedigree-biscrock-gravy-bones.jpg?v=1773755651&quality=1&width=1800&height=1800", $cane, "Cibo");
    //var_dump($biscotti);

    $cucciaXL = new Cuccia("Cuccia XL per cani di taglia grande", 150, "https://arcaplanet.vtexassets.com/arquivos/ids/261682-1800-1800/ferplast-baita-cuccia-in-legno-cane.jpg?v=1773706606&quality=1&width=1800&height=1800", $cane, "Cuccia");
    //var_dump($cucciaXL);

    $spazzola = new Product("Spazzola per gatti a pelo corto", 35, "https://arcaplanet.vtexassets.com/arquivos/ids/253072-1800-1800/furminator-deshedding-gatti-piccoli-pelo-corto-600x600.jpg?v=1773741295&quality=1&width=1800&height=1800", $gatto);

    $pallina = new Game("Pallina con sonaglio", 1.30, "https://arcaplanet.vtexassets.com/arquivos/ids/269847-1800-1800/yes-pallina-con-sonaglio-4.5cm.jpg?v=1773698733&quality=1&width=1800&height=1800", $gatto, "Gioco");

    $products = [ $cucciaXL, $biscotti, $pallina, $spazzola, $cucciaXL, $biscotti ]
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>E-commerce</title>
</head>
<body>
    <header>

        <h1 class="text-center">BooleanPlanet</h1>

    </header>

    <main>
    
        <div class="conainer d-flex flex-wrap justify-content-between">

            <?php foreach( $products as $product ) { ?>
            
            
            <div class="card col-3 m-5">
                <img src="<?= $product->img ?>" class="card-img-top" alt="<?= $product->name ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $product->name ?></h5>
                    <p class="card-text">
                        <div><?= $product->price ?>€</div>
                        <div>Categoria: <?= $product->category->name ?> </div>
                        
                        <?php  if ($product->type) { ?>
                                <div>Tipo: <?= $product->type ?></div>
                        <?php } ?>
                            
                        
                    </p>
                    <a href="" class="btn btn-primary">Acquista</a>
                </div>
            </div>
            
            <?php } ?>
        
        </div>
    
    </main>
</body>
</html>