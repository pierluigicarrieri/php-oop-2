<?php

trait Dimensioni {

    private float $altezza = 0;
    private float $lunghezza = 0;
    private float $profondita = 0;


    /**
     * Get the value of altezza
     */
    public function getAltezza(): float {
        return $this->altezza;
    }

    /**
     * Set the value of altezza
     */
    public function setAltezza(float $altezza): self {
        $this->altezza = $altezza;
        return $this;
    }

    /**
     * Get the value of lunghezza
     */
    public function getLunghezza(): float {
        return $this->lunghezza;
    }

    /**
     * Set the value of lunghezza
     */
    public function setLunghezza(float $lunghezza): self {
        $this->lunghezza = $lunghezza;
        return $this;
    }

    /**
     * Get the value of profondita
     */
    public function getProfondita(): float {
        return $this->profondita;
    }

    /**
     * Set the value of profondita
     */
    public function setProfondita(float $profondita): self {
        $this->profondita = $profondita;
        return $this;
    }
}

?>