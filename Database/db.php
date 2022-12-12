<?php

require __DIR__ . '/../Models/Product.php';
require __DIR__ . '/../Models/Category.php';
require __DIR__ . '/../Models/Food.php';
require __DIR__ . '/../Models/Toy.php';
require __DIR__ . '/../Models/Accessory.php';

$natural = new Food('1234', 'Natural', 'Trainer', 34.99, 7, 'carne, yucca, spirulina', 'tacchino', new Category('Cane'));
var_dump($natural);

$ossogrosso = new Toy('2222', 'Osso Grosso', 'PlayDog',  8, 'masticazione', 'M');
var_dump($ossogrosso);

$colcat = new Accessory('020202', 'ColCat', 'Trixie', 9.9, 'nylon', 'S', new Category('Gatto') );
var_dump($colcat);