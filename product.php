<?php
  require_once 'php/connection.php';
  $get_id = $_GET['id'];
  $mysql -> set_charset("utf8");
  $query = mysqli_query($mysql, "SELECT * FROM `catalog_product` WHERE `id` = '$get_id' AND `available` = 1");
  $product = mysqli_fetch_assoc($query);

?>

<?php require_once 'layouts/header.php' ?>

<main class="transition-fade" id="swup">
	<div class="container">
    <div class="breadcrumbs">
        <p><a href="/catalog" style="color: green;">Каталог</a> / <a style="color: #59A857;"><?= $product['product_name'] ?></a></p>
    </div>
    <section class="product row">
      <div class="product-image col s12 m6">
        <img src="<?= $product['image_path'] ?>" alt="">
      </div>
      <div class="product-feature col s12 m6">
        <div class="product_name">
          <?= $product['product_name'] ?>
        </div>
        <div class="vendor_code">
          Артикул: <?= $product['id'] ?>
        </div>
        <div class="product_price">
          <?= $product['product_price'] ?> руб
        </div>
        <div class="row">
          <button class="button-product col s12 m8">ЗАКАЗАТЬ</button>
        </div>

      </div>
      <div class="row">
        <div class="product_about col s12 m6">
          <p class="title-about">О товаре</p>
          <div class="description">
            <div class="product_description">
              <p class="title">Описание:</p><?= $product['description'] ?>
            </div>
            <div class="material_type">
              <p class="title">Тип материала:</p> <?= $product['material_type'] ?>
            </div>
            <div class="product_size">
              <p class="title">Размеры:</p> ширина <?= $product['width'] ?> м, высота <?= $product['height'] ?> м, длина <?= $product['length'] ?> м
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</main>

<?php require_once 'layouts/footer.php' ?>
