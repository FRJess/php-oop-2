<?php

class Product{
  public $id;
  public $name;
  public $brand;
  public $price;
  public $image;
  public $isAvailable = true;

  public function __construct($_id, $_name, $_brand, $_price)
  {
    $this->id = $_id;
    $this->name = $_name;
    $this->brand = $_brand;
    $this->price = $_price;
    // $this->image = $_image;
    // $this->isAvailable = $_isAvailable;
  }

}