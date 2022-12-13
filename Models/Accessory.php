<?php

require_once __DIR__ . '/Product.php';

class Accessory extends Product
{
  public $material;
  public $size;

  public function __construct($_id, String $_name, $_brand, Float $_price, String $_image, Category $_category, Bool $_isAvailable, Int $_quantity, String $_material, String $_size)
  {
    parent::__construct($_id, $_name, $_brand, $_price, $_image, $_category, $_isAvailable, $_quantity);

    $this->material = $_material;
    $this->size = $_size;
  }
}
