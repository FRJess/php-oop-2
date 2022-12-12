<?php

class Product{
  public $id;
  public $category;
  public $type;
  public $brand;
  public $name;
  public $cost;
  public $image;
  public $isAvailable = true;

  public function __construct($_id, Category $_category, $_type, $_brand, $_name, $_cost, $_image, $_isAvailable)
  {
    $this->id = $_id;
    $this->category = $_category;
    $this->type = $_type;
    $this->brand = $_brand;
    $this->name = $_name;
    $this->cost = $_cost;
    $this->image = $_image;
    $this->isAvailable = $_isAvailable;
  }

}