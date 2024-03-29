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
          <button class="button-product modal-buy-trigger col s12 m8">ЗАКАЗАТЬ</button>
        </div>

      </div>
      <div class="row">
        <div class="product_about col s12 m6">
          <p class="title-about" style="font-weight:bold">О товаре</p>
          <div class="description">
            <div class="product_description">
              <p class="title"><span  style="font-weight:bold"></i> Описание:</span><span> <?= $product['description'] ?></span></p>
            </div>
            <div class="material_type">
              <p class="title"><span  style="font-weight:bold"></i> Тип материала:</span><span> <?= $product['material_type'] ?></span></p>
            </div>
            <div class="product_arcs">
              <p class="title"><span  style="font-weight:bold"></i> Дуги:</span><span> <?= $product['arcs'] ?></span></p>
            </div>
            <div class="product_base">
              <p class="title"><span  style="font-weight:bold"></i> Основание:</span><span> <?= $product['base'] ?></span></p>
            </div>
            <div class="product_durability">
              <p class="title"><span  style="font-weight:bold"></i> Прочность:</span><span> <?= $product['durability'] ?></span></p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="modal">
    <div class="modal-content">
      <div class="feedback">
        <form action="">
          <h4 style="display: inline-block;">Оставьте свои контакты, чтобы мы связались с вами</h4>
          <input type="text" class="form-field" name="name" placeholder="ФИО *">
          <input type="text" class="form-field" name="email" placeholder="Почта *">
          <input type="text" class="form-field" name="phone" placeholder="Номер телефона *">
          <input type="text" class="form-field" name="adres" placeholder="Адрес *">
        </form>
      </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="btn-flat order-button" product_id="<?= $product['id'] ?>">Заказать</a>
      <a href="#!" class="modal-close btn-flat">Отменить</a>
    </div>
  </div>
  <div class="success-modal">
    <div class="circle-loader">
      <div class="checkmark draw"></div>
    </div>
  </div>
  <div class="modal-overlay"></div>
</main>

<?php require_once 'layouts/footer.php' ?>
