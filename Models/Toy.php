<?php

class Toy extends Product
{

  public $size;
  public $hardness;

  function __construct(string $name, string $image, string $animal, float $price, array $hardness)
  {

    parent::__construct($name, $image, $animal, $price);

    $this->hardness = $hardness;
  }
}
