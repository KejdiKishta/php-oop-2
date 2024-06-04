<?php

class Category {
    private string $name;
    private string $icon;

    public function __construct(string $_name) {
        $this->name = $_name;
    }

    // set dell'icona
    public function setIcon(string $_icon) {
        $this->icon = $_icon;
    }

    // get degli attributi
    public function getName() {
        return $this->name;
    }

    public function getIcon() {
        return $this->icon;
    }
    
}