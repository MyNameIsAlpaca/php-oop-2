<?php

require_once './Models/Product.php';

require_once './Models/Food.php';

require_once './Models/Toy.php';

require_once './Models/Kennels.php';

$purinaOne = new Food('Purina One', './img/purina.jpg', 'Cane', 20.12, ['maiale', 'latte', 'bacon'], '22/05/2024', 500);

$pallinaGialla = new Toy('Pallina Gialla', './img/pallinagialla.jpg', 'Cane', 19.99, 'Media', ['Morbida', 'Con suono']);

$cuccia_legno_1 = new Kennels('Cuccia in legno', './img/cuccia1.jpg', 'Cane', 69.99, 'Grande', 'Legno', 'Si');
