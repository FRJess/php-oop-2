<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
- L’e-commerce vende **prodotti** per animali.
- I prodotti sono categorizzati, le **categorie** sono Cani o Gatti.
- I prodotti saranno oltre al **cibo**, anche **giochi**, **cucce**, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->


<?php

require __DIR__ . '/Models/Product.php';
require __DIR__ . '/Models/Category.php';
require __DIR__ . '/Models/Food.php';
require __DIR__ . '/Models/Toy.php';
require __DIR__ . '/Models/Accessory.php';

$natural = new Product('1234', new Category('cani'), 'cibo', 'Trainer', 'Natural', 20, 'null', true);
var_dump($natural);

$ossogrosso = new Product('2222', new Category('cani'), 'gioccatolo', 'PlayDog', 'Osso Grosso', 8, 'null', true);
var_dump($ossogrosso);

$colcat = new Product('020202', new Category('gatti'), 'collare', 'Trixie', 'ColCat', 9.9, 'null', true);
var_dump($colcat);