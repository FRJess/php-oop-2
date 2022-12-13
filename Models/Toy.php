<?php

require_once __DIR__ . '/Product.php';

class Toy extends Product
{
  public $feature;
  public $size;


  public function __construct($_id, String $_name, $_brand, Float $_price, String $_image, Category $_category, Bool $_isAvailable, Int $_quantity, String $_feature, String $_size)
  {
    parent::__construct($_id, $_name, $_brand, $_price, $_image, $_category, $_isAvailable, $_quantity);

    $this->feature = $_feature;
    $this->size = $_size;
  }
}
