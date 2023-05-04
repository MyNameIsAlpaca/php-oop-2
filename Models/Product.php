<?php

class Product
{
  public $name;
  public $image;
  public $animal;

  public function __construct(string $name, string $image, string $animal)
  {

    $this->name = $name;
    $this->image = $image;
    $this->animal = $animal;
  }
}
