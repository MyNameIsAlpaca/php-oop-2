<?php

class Food extends Product
{

  public $ingredients;
  public $exp_date;
  public $grams;

  function __construct(string $name, string $image, string $animal, float $price, array $ingredients, string $exp_date, int $grams)
  {

    parent::__construct($name, $image, $animal, $price);

    $this->ingredients = $ingredients;
    $this->exp_date = $exp_date;
    $this->grams = $grams;
  }
}
