<?php

require_once './Models/Product.php';

require_once './Models/Food.php';

require_once './Models/Toy.php';

require_once './Models/Kennels.php';

$purinaOne = new Food('Purina One', './img/purina.jpg', 'Cane', 19.99, ['maiale', 'latte', 'bacon'], '22/05/2024', 500, 'Mini/Adult');

$pallinaGialla = new Toy('Pallina Gialla', './img/pallina_gialla.jpg', 'Cane', 19.99, 'Media', ['Morbida', 'Con suono']);

$corda = new Toy('Corda multicolor', './img/corda.jpg', 'Cane', 9.99, 'Media', ['Dura']);

$topo = new Toy('Topo automatico', './img/topo.jpg', 'Gatto', 19.99, 'piccolo', ['Morbido']);

$scatoletta = new Food('Cesar Scatoletta', './img/scatoletta.jpg', 'Cane', 0.99, ['maiale', 'latte', 'bacon'], '22/05/2024', 100, 'Mini/Adult');

$cuccia_legno_1 = new Kennels('Cuccia in legno', './img/cuccia_legno_1.jpg', 'Cane', 69.99, 'Grande', 'Legno', 'Si');

$cuccia_morbida_1 = new Kennels('Cuccia di lana', './img/cuccia2.jpg', 'Gatto', 29.99, 'Media', 'Lana', 'No');

$purinaOne_cat = new Food('Purina One', './img/purinacat.jpg', 'Gatto', 19.99, ['maiale', 'pollo', 'anatra'], '12/05/2024', 500, 'Delicate');

$purinaOne_steril = new Food('Purina One', './img/purinaone_steril.jpg', 'Gatto', 39.99, ['maiale', 'latte', 'bacon'], '22/05/2024', 500, 'Sterilized');

$purina_junior = new Food('Purina One', './img/purinaone_junior.jpg', 'Gatto', 29.99, ['maiale', 'latte', 'bacon'], '22/05/2024', 500, 'Junior');



$allDogProduct = array($purinaOne, $pallinaGialla, $cuccia_legno_1, $corda, $scatoletta);

$allCatProduct = array($cuccia_morbida_1, $purinaOne_cat, $purinaOne_steril, $purina_junior, $topo);
