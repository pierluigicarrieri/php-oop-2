<?php

require_once __DIR__."/Prodotto.php";
require_once __DIR__."/Cane.php";
require_once __DIR__."/Gatto.php";

class Cuccia extends Prodotto {

    public function __construct(string $_name, string $_description, 
    float $_cost, float $_weight, string $_materiale, string $_colore, 
    string $_infoLavaggio, $_categoria) {
        parent::__construct($_name, $_description, $_cost, $_weight, $_categoria);
        $this->setMateriale($_materiale);
        $this->setColore($_colore);
        $this->setInfoLavaggio($_infoLavaggio);
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
     * Get the value of infoLavaggio
     */
    public function getInfoLavaggio(): string {
        return $this->infoLavaggio;
    }

    /**
     * Set the value of infoLavaggio
     */
    public function setInfoLavaggio(string $infoLavaggio): self {
        $this->infoLavaggio = $infoLavaggio;
        return $this;
    }

    private string $materiale = "";
    private string $colore = "";
    private string $infoLavaggio = "";
    
}

?>