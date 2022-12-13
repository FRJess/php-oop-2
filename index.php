<?php

require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Accessory.php';
require_once __DIR__ . '/Models/Toy.php';

require __DIR__ . '/Database/db.php';


$food = array_filter($products, fn ($product) => get_class($product) == 'Food' && $product->isAvailable);
$toy = array_filter($products, fn ($product) => get_class($product) == 'Toy' && $product->isAvailable);
$accessory = array_filter($products, fn ($product) => get_class($product) == 'Accessory' && $product->isAvailable);

include __DIR__ . '/Views/layout/head.php';
include __DIR__ . '/Views/layout/header.php';
include __DIR__ . '/Views/partials/shop.php';
include __DIR__ . '/Views/layout/footer.php';