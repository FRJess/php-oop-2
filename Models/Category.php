<?php

class Category
{
  public $name;
  public $icon;

  public function __construct(String $_name, String $_icon)
  {
    $this->name = $_name;
    $this->icon = $_icon;
  }
  // public function setIcon()
  // {
  //     if ($this->name === 'Cane') {
  //         $this->icon = 'https://cdn.icon-icons.com/icons2/2070/PNG/512/dog_icon_125586.png';
  //     } elseif ($this->name === 'Gatto') {
  //         $this->icon = 'https://cdn.icon-icons.com/icons2/2070/PNG/512/cat_icon_125794.png';
  //     }
  // }
}
