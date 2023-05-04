<?php

class Product
{
  public $name;
  public $image;
  public $animal;
  public $price;

  public function __construct(string $name, string $image, string $animal, float $price)
  {

    $this->name = $name;
    $this->image = $image;
    $this->animal = $animal;
    $this->price = $price;
  }
}
