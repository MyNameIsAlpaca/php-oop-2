<?php

require_once './Models/Product.php';

require_once './Models/Food.php';

require_once './Models/Toy.php';

require_once './Models/Kennels.php';

$purinaOne = new Food('Purina One', './img/purina.jpg', 'Cane', 19.99, ['maiale', 'latte', 'bacon'], '22/05/2024', 500, 'Mini/Adult');

$pallinaGialla = new Toy('Pallina Gialla', './img/pallina_gialla.jpg', 'Cane', 19.99, ['Morbida', 'Con suono']);

$corda = new Toy('Corda multicolor', './img/corda.jpg', 'Cane', 9.99, ['Dura']);

$topo = new Toy('Topo automatico', './img/topo.jpg', 'Gatto', 19.99, ['Morbido']);

$scatoletta = new Food('Cesar Scatoletta', './img/scatoletta.jpg', 'Cane', 0.99, ['maiale', 'latte', 'bacon'], '22/05/2024', 100, 'Mini/Adult');

$cuccia_legno_1 = new Kennels('Cuccia in legno', './img/cuccia_legno_1.jpg', 'Cane', 69.99, ['Legno', 'plastica'], 'Si');

$cuccia_morbida_1 = new Kennels('Cuccia di lana', './img/cuccia2.jpg', 'Gatto', 29.99, ['Lana', 'cotone'], 'No');

$cuccia_morbida_2 = new Kennels('Cuccia di lana', './img/cuccia3.jpg', 'Cane', 19.99, ['Lana', 'cotone'], 'No');

$purinaOne_cat = new Food('Purina One Delicate', './img/purinacat.jpg', 'Gatto', 19.99, ['maiale', 'pollo', 'anatra'], '12/05/2024', 800, 'Delicate');

$purinaOne_steril = new Food('Purina One Sterilized', './img/purinaone_steril.jpg', 'Gatto', 39.99, ['maiale', 'latte', 'bacon'], '22/05/2024', 300, 'Sterilized');

$purina_junior = new Food('Purina One Junior', './img/purinaone_junior.jpg', 'Gatto', 29.99, ['maiale', 'latte', 'bacon'], '22/05/2024', 800, 'Junior');

try {
  $cuccia_legno_1->setSize(4);
} catch (Exception $e) {
  echo $e->getMessage();
}
try {
  $cuccia_morbida_1->setSize(1);
} catch (Exception $e) {
  echo $e->getMessage();
}
try {
  $cuccia_morbida_2->setSize(1);
} catch (Exception $e) {
  echo $e->getMessage();
}



$allDogProduct = array($purinaOne, $pallinaGialla, $cuccia_legno_1, $corda, $scatoletta, $cuccia_morbida_2);

$allCatProduct = array($cuccia_morbida_1, $purinaOne_cat, $purinaOne_steril, $purina_junior, $topo);
