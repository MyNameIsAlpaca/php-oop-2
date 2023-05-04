<?php

class Kennels extends Product
{

  public $size;
  public $material;
  public $water_resistence;

  function __construct(string $name, string $image, string $animal, float $price, string $size, string $material, string $water_resistence)
  {

    parent::__construct($name, $image, $animal, $price);

    $this->size = $size;
    $this->material = $material;
    $this->water_resistence = $water_resistence;
  }
}
