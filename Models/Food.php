<?php

class Food extends Product
{

  public $ingredients;
  public $exp_date;
  public $grams;
  public $size;

  function __construct(string $name, string $image, string $animal, float $price, array $ingredients, string $exp_date, int $grams, string $size)
  {

    parent::__construct($name, $image, $animal, $price);

    $this->ingredients = $ingredients;
    $this->exp_date = $exp_date;
    $this->grams = $grams;
    $this->size = $size;
  }
}
