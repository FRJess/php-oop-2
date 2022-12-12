<?php

class Food extends Product
{
  public $weight;
  public $ingredients;
  public $taste;

  public function __construct($_id, Category $_category, $_type, $_brand, $_name, $_cost, $_image, $_isAvailable, $_weight, $_ingredients, $_taste)
  {
    parent::__construct($_id, $_category, $_type, $_brand, $_name, $_cost, $_image, $_isAvailable);

    $this->weight = $_weight;
    $this->ingredients = $_ingredients;
    $this->taste = $_taste;
  }
}
