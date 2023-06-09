<?php

require_once './db.php'

?>
<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ZooShop</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="container">
    <h1>ZooShop</h1>
    <h2 class="section-title">Sezione Cani</h2>
    <div class="card-container">
      <?php
      foreach ($allDogProduct as $product) {
      ?>
        <div class="card">
          <div class="immagine-container">
            <img class="type-icon" src="<?php if (get_class($product) == 'Food') {
                                          echo 'img/food-icon.png';
                                        } else if (get_class($product) == 'Kennels') {
                                          echo 'img/kennels-icon.jpg';
                                        } else if (get_class($product) == 'Toy') {
                                          echo 'img/toy-icon.png';
                                        } ?>" alt="">
            <img class="section-icon" src="
            <?php
            if ($product->animal == 'Cane') {
              echo  'img/dogicon.jpg';
            } ?>" alt="icona cane">
            <img class="product_img" src="<?php echo $product->image ?>" alt="cuccia di legno">
          </div>
          <div class="info-section">
            <div class="title"><?php echo $product->name ?></div>
            <div class="price"><?php echo $product->price ?>€</div>
            <?php if (get_class($product) == 'Food') {
            ?>
              <div class="ingredients">Ingredienti: <?php foreach ($product->ingredients as $ingredients) {
                                                      echo $ingredients . ' ';
                                                    } ?></div>
            <?php
            } ?>
            <?php if (get_class($product) == 'Kennels') {
            ?>
              <div class="materials">Materiali: <?php foreach ($product->material as $material) {
                                                  echo $material . ' ';
                                                } ?></div>
              <div class="size">Dimensioni: <?php echo $product->size ?></div>
            <?php
            } ?>
            <?php if (get_class($product) == 'Toy') {
            ?>
              <div class="ingredients">Caratteristiche: <?php foreach ($product->hardness as $hardness) {
                                                          echo $hardness . ' ';
                                                        } ?></div>
            <?php
            } ?>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
    <h2 class="section-title">Sezione Gatti</h2>
    <div class="card-container">
      <?php
      foreach ($allCatProduct as $product) {
      ?>
        <div class="card">
          <div class="immagine-container">
            <img class="type-icon" src="<?php if (get_class($product) == 'Food') {
                                          echo 'img/food-icon.png';
                                        } else if (get_class($product) == 'Kennels') {
                                          echo 'img/kennels-icon.jpg';
                                        } else if (get_class($product) == 'Toy') {
                                          echo 'img/toy-icon.png';
                                        } ?>" alt="">
            <img class="section-icon" src="
            <?php
            if ($product->animal == 'Gatto') {
              echo  'img/catIcon.jpg';
            } ?>" alt="icona cane">
            <img class="product_img" src="<?php echo $product->image ?>" alt="cuccia di legno">
          </div>
          <div class="info-section">
            <div class="title"><?php echo $product->name ?></div>
            <div class="price"><?php echo $product->price ?>€</div>
            <?php if (get_class($product) == 'Food') {
            ?>
              <div class="ingredients">Ingredienti: <?php foreach ($product->ingredients as $ingredients) {
                                                      echo $ingredients . ' ';
                                                    } ?></div>
            <?php
            } ?>
            <?php if (get_class($product) == 'Kennels') {
            ?>
              <div class="ingredients">Materiali: <?php foreach ($product->material as $material) {
                                                    echo $material . ' ';
                                                  } ?></div>
              <div class="size">Dimensioni: <?php echo $product->size ?></div>
            <?php
            } ?>
            <?php if (get_class($product) == 'Toy') {
            ?>
              <div class="ingredients">Caratteristiche: <?php foreach ($product->hardness as $hardness) {
                                                          echo $hardness . ' ';
                                                        } ?></div>
            <?php
            } ?>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>

</body>

</html>