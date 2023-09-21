<?php

require_once __DIR__."/Cuccia.php";
require_once __DIR__."/Gioco.php";
require_once __DIR__."/Cibo.php";

$data = [

    $cucciaCane = new Cuccia("./imgs/cuccia_cane.jpg", 
    "Kerbl Dog House", "Tetto bituminoso resistente alle intemperie.
    Parete esterna è vetrata con colore legno protettivo.", 
    116.44, 15.5, "Legno", "Marrone", "Lavabile con acqua", $categoria = new Cane(), 10, 2, 3),

    $cucciaGatto = new Cuccia("./imgs/cuccia_gatto.jpg", 
    "Yaheetech Tiragraffi Albero per Gatti con Posatoio", "Questo tiragraffi a più livelli 
    è completamente rivestito con un tessuto morbido e delicato sulla pelle, offrendo ai gatti il massimo comfort", 
    29.99, 6.5, "Tessuto felpato", "Grigio", "Lavabile con acqua", $categoria = new Gatto(), 21, 4, 53),

    $giocoCane = new Gioco("./imgs/gioco_cane.webp", 
    "Trixie 32652 Denta Fun, corda da gioco in puro cotone", "Con questo fra i denti Fido sarà felice!", 
    3.99, 0.12, "Corda", "Grigio", false, $categoria = new Cane(), 2, 14, 3),

    $giocoGatto = new Gioco("./imgs/gioco_gatto.jpg", 
    "Topino Rimbalzino Deluxe 3300", "Topo meccanico per fare giocare il gatto", 
    6.99, 0.05, "Cotone", "Bianco", false, $categoria = new Gatto(), 31, 5, 32),

    $ciboCane = new Cibo("./imgs/cibo_cane.jpg", 
    "Amanova Doggie Treats", "Amanova Cibo Secco per Cani Adulti di Taglia Media o Grande per palati esigenti Gusto Maiale", 
    12.80, 0,2, "Bianco", "InfoNutrizionaliVarie", $categoria = new Cane(), 3, 42, 23),

    $ciboGatto = new Cibo("./imgs/cibo_gatto.webp", 
    "Sheba Premium", "Sheba selezione in salsa con pollo e tacchino", 
    6.70, 0,15, "Nero", "InfoNutrizionaliVarie", $categoria = new Gatto(), 22, 3, 23),

];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>php-oop-2</title>
</head>
<body>

    <header class="py-3 bg-dark-subtle">

        <h1 class="py-3 text-danger text-center">IL RANDAGIO</h1>

        <h3 class="py-3 text-danger text-center" >TUTTO PER I TUOI PICCOLI AMICI</h3>

    </header>

    <main class="bg-secondary">

        <div class="container">

            <div class="row row-cols-3 g-4">

                    <?php foreach ($data as $item) { 
                    ?>

                    <div class="col">
                        <div class="card h-100">
                            <img src="<?php echo $item->getImgUrl() ?>" class="card-img-top" alt="<?php echo $item->getImgUrl() ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $item->getName() ?></h5>
                                <img id="icona" src="<?php echo $item->getNomeCategoria()->getIconUrl() ?>" alt="<?php echo $item->getNomeCategoria()->getIconUrl() ?>">
                                <p class="card-text"><?php echo $item->getDescription() ?></p>
                                <p class="card-text"><?php echo $item->getCost() ?></p>
                                <p class="card-text"><?php echo $item->getWeight() ?></p>
                                <p class="card-text"><?php echo $item->getMateriale() ?></p>
                                <p class="card-text"><?php echo $item->getColore() ?></p>
                                <p class="card-text"><?php echo $item->getAltezza() ?>, <?php echo $item->getLunghezza() ?>, <?php echo $item->getProfondita() ?></p>
                                <a href="#" class="btn btn-primary">Add to cart</a>
                            </div>
                        </div>
                    </div>

                    <?php
                    }
                    ?>

            </div>

        </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>