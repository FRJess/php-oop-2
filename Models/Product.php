<?php

require_once __DIR__ . '/Category.php';

class Product{
  public $id;
  public $name;
  public $brand;
  public $price;
  public $image;
  public $isAvailable;
  public $quantity;
  public $category;

  public function __construct($_id, String $_name, $_brand, Float $_price, String $_image, Category $_category, Bool $_isAvailable, Int $_quantity)
  {
    $this->id = $_id;
    $this->name = $_name;
    $this->brand = $_brand;
    $this->price = $_price;
    $this->image = $_image;
    $this->isAvailable = $_isAvailable;
    $this->quantity = $_quantity;
    $this->category = $_category;
    // $this->image = $_image;
    // $this->isAvailable = $_isAvailable;
  }

}