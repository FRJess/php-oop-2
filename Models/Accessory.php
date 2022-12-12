<?php

class Accessory extends Product
{
  public $material;
  public $size;

  public function __construct($_id, Category $_category, $_type, $_brand, $_name, $_cost, $_image, $_isAvailable, $_material, $_size)
  {
    parent::__construct($_id, $_category, $_type, $_brand, $_name, $_cost, $_image, $_isAvailable);

    $this->material = $_material;
    $this->size = $_size;
  }
}
