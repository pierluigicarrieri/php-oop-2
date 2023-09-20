<?php

require_once __DIR__ . "/Categoria.php";

    class Gatto extends Categoria {

        public function __construct() {
            parent::__construct("Gatto", "./imgs/icona_gatto.jpg");
        } 

    }

?>