<?php

trait Sizes
{

  public $size;

  public function setSize(int $size)
  {
    if ($size >= 1 && $size <= 4) {
      switch ($size) {

        case 1:
          $this->size =  "S";
          break;

        case 2:
          $this->size =  "M";
          break;

        case 3:
          $this->size =  "L";
          break;

        case 4:
          $this->size =  "XL";
          break;
      }
    } else {
      throw new Exception("La dimensione non è valida");
    }
  }
}
