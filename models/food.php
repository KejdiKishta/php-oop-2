<?php
// importo product
require_once __DIR__ . "/product.php";

// copio la logica di product
class Food extends Product {
    // aggiungo degli attributi oltre a quelli presenti in product
    private string $flavor;
    private int $gWeight;

    // sovrascrivo il construct di product con quello aggiornato
    public function __construct(string $_name, float $_price, int $_gWeight) {
        // con parent prendo in riferimento il padre e dopo i :: seleziono di cosa ho bisogno
        parent::__construct($_name, $_price);

        // aggiungo il peso
        $this->gWeight = $_gWeight;
    }

    // setter
    public function setFlavor(string $_flavor) {
        $this->flavor = $_flavor;
    }

    // getter
    public function getFlavor() {
        return $this->flavor;
    }

    public function getWeight() {
        return $this->gWeight;
    }
}