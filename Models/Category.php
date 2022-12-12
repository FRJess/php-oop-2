<?php

class Category
{
  public $name;
  public $icon;

  public function __construct($_name)
  {
    $this->name = $_name;
    $this->setIcon();
  }
  public function setIcon()
  {
      if ($this->type === 'Cane') {
          $this->icon = 'https://cdn.icon-icons.com/icons2/2070/PNG/512/dog_icon_125586.png';
      } elseif ($this->type === 'Gatto') {
          $this->icon = 'https://cdn.icon-icons.com/icons2/2070/PNG/512/cat_icon_125794.png';
      }
  }
}
