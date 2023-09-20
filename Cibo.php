<?php

require_once __DIR__."/Prodotto.php";
require_once __DIR__."/Cane.php";
require_once __DIR__."/Gatto.php";

class Cibo extends Prodotto {

    public function __construct(string $_name, string $_description, 
    float $_cost, float $_weight, string $_materiale, string $_colore, 
    string $_infoNutrizionali, $_categoria) {
        parent::__construct($_name, $_description, $_cost, $_weight, $_categoria);
        $this->setMateriale($_materiale);
        $this->setColore($_colore);
        $this->setInfoNutrizionali($_infoNutrizionali);
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
     * Get the value of infoNutrizionali
     */
    public function getInfoNutrizionali(): string {
        return $this->infoNutrizionali;
    }

    /**
     * Set the value of infoNutrizionali
     */
    public function setInfoNutrizionali(string $infoNutrizionali): self {
        $this->infoNutrizionali = $infoNutrizionali;
        return $this;
    }

    private string $materiale = "";
    private string $colore = "";
    private string $infoNutrizionali = "";
    
}

?>