<?php

require_once __DIR__."/Cuccia.php";
require_once __DIR__."/Gioco.php";
require_once __DIR__."/Cibo.php";

$data = [
    $cuccia1 = new Cuccia("Billy", "Cuccia per cani molto carina", 10.00, 5, "cotone", "bianco", "30", $categoria1 = new Cane("cane", "bubu"))
];

var_dump($cuccia1);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

            <div class="row row-cols-3">

                <div class="col">

                    

                </div>

            </div>

        </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>