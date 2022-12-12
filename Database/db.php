<?php

require __DIR__ . '/../Models/Product.php';
require __DIR__ . '/../Models/Category.php';
require __DIR__ . '/../Models/Food.php';
require __DIR__ . '/../Models/Toy.php';
require __DIR__ . '/../Models/Accessory.php';

$food_products = [
  new Food(0001, 'Natural', 'Trainer', 34.99, 7, 'carne, yucca, spirulina', 'tacchino', new Category('Cane')),
  new Food(0002, 'Hypoallergenic', 'Exlcusion', 79.99, 12, 'patate, pesce, olio di girasole', 'pesce', new Category('Cane')),
  new Food(0003, 'Science Plan', 'Hill\'s', 51.99, 14, 'mais, frumento, farina di pollo, semi di lino', 'pollo', new Category('Cane')),
  new Food(0004, 'HFC', 'Almo Nature', 8.98, 1.2, 'pollo fresco, piselli, polpa di barbabietola ', 'pollo', new Category('Gatto')),
];

var_dump($food_products);

$toy_products = [
  new Toy(1001, 'Osso Grosso', 'PlayDog',  8.29, 'masticazione', 'M', new Category('Cane')),
  new Toy(1002, 'Elefantina', 'Elma', 4.99, 'masticazione', 'S', new Category('Cane') ),
  new Toy(1003, 'Osso', 'Limoen', 2.99, 'masticazione', 'M', new Category('Cane') ),
  new Toy(1004, 'Turning Feather', 'Trixie', 15.29, 'stimolazione', '/', new Category('Gatto') ),
];

var_dump($toy_products);

$accessory_products = [
  new Accessory(3001, 'Collare', 'Trixie', 9.99, 'nylon', 'S', new Category('Gatto') ),
  new Accessory(3001, 'Ciotola', 'Savic', 5.49, 'plastica', '200ml', new Category('Gatto') ),
  new Accessory(3001, 'Pettorina', 'Julius', 39.99, 'poliestere, cotone', 'M', new Category('Cane') ),
  new Accessory(3001, 'Cuscino Be Nordic', 'Trixie', 80.99, 'poliestere, cotone', '/', new Category('Cane') ),
];

var_dump($accessory_products);