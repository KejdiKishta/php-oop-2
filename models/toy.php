<?php
// importo product
require_once __DIR__ . "/product.php";

// copio la logica di product
class Toy extends Product {
    // aggiungo degli attributi oltre a quelli presenti in product
    private string $material;
    private int $gWeight;

    // sovrascrivo il construct di product con quello aggiornato
    public function __construct(string $_name, float $_price, int $_gWeight) {
        // con parent prendo in riferimento il padre e dopo i :: seleziono di cosa ho bisogno
        parent::__construct($_name, $_price);

        // aggiungo il peso
        $this->gWeight = $_gWeight;
    }

    // setter
    public function setMaterial(string $_material) {
        $this->material = $_material;
    }

    // getter
    public function getMaterial() {
        return $this->material;
    }

    public function getWeight() {
        return $this->gWeight;
    }

}