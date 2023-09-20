<?php

    class Prodotto {

        public function __construct(string $_name, string $_description, float $_cost, float $_weight) {
            $this->setName($_name);
            $this->setDescription($_description);
            $this->setCost($_cost);
            $this->setWeight($_weight);
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

        private string $name = "";
        private string $description = "";
        private float $cost = 0;
        private float $weight = 0;

    }

?>