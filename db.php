<?php

require_once './Models/Product.php';

require_once './Models/Food.php';

require_once './Models/Toy.php';

require_once './Models/Kennels.php';

$purinaOne = new Food('Purina One', './img/purina.jpg', 'Cane', 20.12, ['maiale', 'latte', 'bacon'], '22/05/2024', 500, 'Mini/Adult');

$pallinaGialla = new Toy('Pallina Gialla', './img/pallina_gialla.jpg', 'Cane', 19.99, 'Media', ['Morbida', 'Con suono']);

$cuccia_legno_1 = new Kennels('Cuccia in legno', './img/cuccia_legno_1.jpg', 'Cane', 69.99, 'Grande', 'Legno', 'Si');

$cuccia_morbida_1 = new Kennels('Cuccia di lana', './img/cuccia2.jpg', 'Gatto', 29.99, 'Media', 'Lana', 'No');


$allProduct = array($purinaOne, $pallinaGialla, $cuccia_legno_1);
