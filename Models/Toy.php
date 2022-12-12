<?php

class Toy extends Product
{
  public $feature;
  public $size;
  public $category;

  public function __construct($_id, $_name, $_brand, $_price, $_feature, $_size, Category $_category)
  {
    parent::__construct($_id, $_name, $_brand, $_price);

    $this->feature = $_feature;
    $this->size = $_size;
    $this->category = $_category;
  }
}
