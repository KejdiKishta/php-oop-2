<?php 
// Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
//  - L'e-commerce vende **prodotti** per animali. I prodotti sono categorizzati, le **categorie** sono Cani o Gatti.
//  - I prodotti saranno oltre al **cibo**, anche **giochi**, **cucce**, etc.
// Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).

require_once __DIR__ . "/models/product.php";

$product1 = new Product;
$product1->setName("Croccantini per cani");
$product1->setImage("https://picsum.photos/seed/picsum/200/300");
$product1->setDescription("Il tuo cane sarà felice come il padrone al gol di grosso in italia-germania del 2006");
$product1->setPrice(19);
$product1->setCategory("Gatti");

echo $product1->getName() . "<br>";
echo $product1->getImage() . "<br>";
echo $product1->getDescription() . "<br>";
echo $product1->getPrice() . "<br>";
echo $product1->getCategory() . "<br>";