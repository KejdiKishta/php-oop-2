<?php 
// Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
//  - L'e-commerce vende **prodotti** per animali. I prodotti sono categorizzati, le **categorie** sono Cani o Gatti.
//  - I prodotti saranno oltre al **cibo**, anche **giochi**, **cucce**, etc.
// Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).

require_once __DIR__ . "/models/category.php";
require_once __DIR__ . "/models/food.php";
require_once __DIR__ . "/models/toy.php";
// essendo ereditata dal tipo di prodotto, product non serve nell'index
// require_once __DIR__ . "/models/product.php";

// categorie presenti
$catCategory = new Category("Cat");
$catCategory->setIcon("fa-solid fa-cat");

$dogCategory = new Category("Dog");
$dogCategory->setIcon("fa-solid fa-dog");

$birdCategory = new Category("Bird");
$birdCategory->setIcon("fa-solid fa-crow");

// prodotto esempio (obsoleto perchè non usiamo piu product ma gli ereditari)
// $product1 = new Product("Croccantini per cani", 24.99);
// $product1->setImage("https://picsum.photos/seed/picsum/200/300");
// $product1->setDescription("Il tuo cane sarà felice come te al gol di grosso in italia-germania del 2006");
// $product1->category = $dogCategory;

$product1 = new Food("Croccantini Boolean", 24.99, 1000);
$product1->setImage("https://picsum.photos/seed/picsum/200/300");
$product1->setDescription("Il tuo cane sarà felice come te al gol di grosso in italia-germania del 2006");
$product1->setFlavor("Chocolate");
$product1->category = $dogCategory;

var_dump($product1);