<?php

require_once __DIR__ . '/../Traits/Sizes.php';

class Kennels extends Product
{

  use Sizes;

  public $size;
  public $material;
  public $water_resistence;

  function __construct(string $name, string $image, string $animal, float $price, array $material, string $water_resistence)
  {

    parent::__construct($name, $image, $animal, $price);

    $this->material = $material;
    $this->water_resistence = $water_resistence;
  }
}
