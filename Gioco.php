<?php

require_once __DIR__."/Prodotto.php";
require_once __DIR__."/Cane.php";
require_once __DIR__."/Gatto.php";

class Gioco extends Prodotto {

    public function __construct(string $_imgUrl, string $_name, string $_description, 
    float $_cost, float $_weight, string $_materiale, string $_colore, 
    bool $_presidioMedico, $_categoria, $_altezza, $_lunghezza, $_profondità) {
        parent::__construct($_imgUrl, $_name, $_description, $_cost, $_weight, $_categoria, $_altezza, $_lunghezza, $_profondità);
        $this->setMateriale($_materiale);
        $this->setColore($_colore);
        $this->setPresidioMedico($_presidioMedico);
    } 

    /**
     * Get the value of materiale
     */
    public function getMateriale(): string {
        return $this->materiale;
    }

    /**
     * Set the value of materiale
     */
    public function setMateriale(string $materiale): self {
        $this->materiale = $materiale;
        return $this;
    }

    /**
     * Get the value of colore
     */
    public function getColore(): string {
        return $this->colore;
    }

    /**
     * Set the value of colore
     */
    public function setColore(string $colore): self {
        $this->colore = $colore;
        return $this;
    }

    /**
     * Get the value of presidioMedico
     */
    public function getPresidioMedico(): bool {
        return $this->presidioMedico;
    }

    /**
     * Set the value of presidioMedico
     */
    public function setPresidioMedico(bool $presidioMedico): self {
        $this->presidioMedico = $presidioMedico;
        return $this;
    }

    private string $materiale = "";
    private string $colore = "";
    private bool $presidioMedico = false;
    
}

?>