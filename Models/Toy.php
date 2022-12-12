<?php

class Toy extends Product
{
  public $feature;
  public $size;

  public function __construct($_id, Category $_category, $_type, $_brand, $_name, $_cost, $_image, $_isAvailable, $_feature, $_size)
  {
    parent::__construct($_id, $_category, $_type, $_brand, $_name, $_cost, $_image, $_isAvailable);

    $this->feature = $_feature;
    $this->size = $_size;
  }
}
