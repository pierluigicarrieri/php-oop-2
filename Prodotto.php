<?php

    class Prodotto {

        public function __construct(string $_imgUrl, string $_name, string $_description, float $_cost, float $_weight, $_categoria) {
            $this->setImgUrl($_imgUrl);
            $this->setName($_name);
            $this->setDescription($_description);
            $this->setCost($_cost);
            $this->setWeight($_weight);
            $this->setNomeCategoria($_categoria);
        }

        /**
         * Get the value of imgUrl
         */
        public function getImgUrl(): string {
            return $this->imgUrl;
        }

        /**
         * Set the value of imgUrl
         */
        public function setImgUrl(string $imgUrl): self {
            $this->imgUrl = $imgUrl;
            return $this;
        }

        /**
         * Get the value of name
         */
        public function getName() {
            return $this->name;
        }

        /**
         * Set the value of name
         */
        public function setName($name): self {
            $this->name = $name;
            return $this;
        }

        /**
         * Get the value of description
         */
        public function getDescription() {
            return $this->description;
        }

        /**
         * Set the value of description
         */
        public function setDescription($description): self {
            $this->description = $description;
            return $this;
        }

        /**
         * Get the value of cost
         */
        public function getCost() {
            return $this->cost;
        }

        /**
         * Set the value of cost
         */
        public function setCost($cost): self {
            $this->cost = $cost;
            return $this;
        }

        /**
         * Get the value of weight
         */
        public function getWeight() {
            return $this->weight;
        }

        /**
         * Set the value of weight
         */
        public function setWeight($weight): self {
            $this->weight = $weight;
            return $this;
        }

        /**
         * Get the value of nomeCategoria
         */
        public function getNomeCategoria() {
            return $this->nomeCategoria;
        }

        /**
         * Set the value of nomeCategoria
         */
        public function setNomeCategoria($nomeCategoria): self {
            $this->nomeCategoria = $nomeCategoria;
            return $this;
        }

        private string $imgUrl = "";
        private string $name = "";
        private string $description = "";
        private float $cost = 0;
        private float $weight = 0;
        private $nomeCategoria;

    }

?>