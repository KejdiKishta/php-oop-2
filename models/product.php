<?php

class Product {
    private string $name;
    private string $image;
    private string $description;
    private int $price;
    private string $category;
    
    // essendo un ecommerce devo poter modificare tutti i dati di qualsiasi articolo quindi uso set e get
    
    // setter
    public function setName(string $_name) {
        $this->name = $_name;
    }
    public function setImage(string $_image) {
        $this->image = $_image;
    }
    public function setDescription(string $_description) {
        $this->description = $_description;
    }
    public function setPrice(int $_price) {
        $this->price = $_price;
    }
    public function setCategory(string $_category) {
        $this->category = $_category;
    }

    // getter
    public function getName() {
        return $this->name;  
    }
    public function getImage() {
        return $this->image;
    }
    public function getDescription() {
        return $this->description;
    }
    public function getPrice() {
        return $this->price;
    }
    public function getCategory() {
        return $this->category;
    }

}
