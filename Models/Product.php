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
  protected $discount = 0;

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
  }

  public function setDiscount(Int $_discount){
    if($_discount < 1 && $_discount > 99){
      //gestiremo l'errore
      $this->discount = 0;
    }else{
      $this->discount = $_discount;
    }
  }

  public function getDiscount(){
    return $this->discount;
  }

  public function getFinalPrice(){
    return $this->price *= (1 - ($this->discount/100));
  }

  public function getFinalPriceFormat(){
    $final_price = $this->price *= (1 - ($this->discount/100));

    return number_format($final_price, 2, ',', '.');
  }

}