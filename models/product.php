<?php

class Product {
    private string $name;
    private string $image;
    private string $description;
    private int $price;
    private string $category;
    private array $acceptedCategories = ["Cani", "Gatti"];
    
    // essendo un ecommerce devo poter modificare tutti i dati di qualsiasi articolo quindi uso set e get
    
    // setter

    // name
    public function setName(string $_name) {
        $this->name = $_name;
    }

    // image
    public function setImage(string $_image) {
        $this->image = $_image;
    }

    // description
    public function setDescription(string $_description) {
        $this->description = $_description;
    }

    // price
    public function setPrice(int $_price) {
        $this->price = $_price;
    }

    // category
    public function setCategory(string $_category) {
        $flag = false;

        foreach ($this->acceptedCategories as $curCategory) {
            if ($curCategory === $_category) {
                $flag = true;
            }
        }

        if ($flag === true) {
            $this->category = $_category;
        } else {
            throw new Exception("Category is not accepted, look at the array 'acceptedCategories'!");
        }
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
