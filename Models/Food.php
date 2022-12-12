<?php

class Food extends Product
{
  public $weight;
  public $ingredients;
  public $taste;
  public $category;

  public function __construct($_id, $_name, $_brand, $_price, $_weight, $_ingredients, $_taste, Category $_category)
  {
    parent::__construct($_id, $_name, $_brand, $_price);

    $this->weight = $_weight;
    $this->ingredients = $_ingredients;
    $this->taste = $_taste;
    $this->category = $_category;
  }
}
