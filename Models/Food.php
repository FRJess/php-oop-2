<?php

require_once __DIR__ . '/Product.php';

class Food extends Product
{
  public $weight;
  public $ingredients;
  public $taste;

  public function __construct($_id, String $_name, $_brand, Float $_price, String $_image, Category $_category, Bool $_isAvailable, Int $_quantity, Int $_weight, Array $_ingredients, String $_taste)
  {
    parent::__construct($_id, $_name, $_brand, $_price, $_image, $_category, $_isAvailable, $_quantity);

    $this->weight = $_weight;
    $this->ingredients = $_ingredients;
    $this->taste = $_taste;
  }
}
