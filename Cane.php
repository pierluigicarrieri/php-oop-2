<?php

require_once __DIR__ . "/Categoria.php";

    class Cane extends Categoria {

        public function __construct() {
            parent::__construct("Cane", "/imgs/icona_cane");
        } 

    }

?>