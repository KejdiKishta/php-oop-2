<?php

trait Packaging
{
    private string $package;

    public function setPackage($_package) {
        $this->package = $_package;
    }

    public function getPackage() {
        return $this->package;
    }
}
