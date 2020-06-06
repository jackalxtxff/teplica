<?php require_once 'layouts/header.php' ?>

<main class="transition-fade" id="swup">
  <h1>Каталог</h1>
  <div class="wrapper">
    <!-- <div class="block_shop">
      <div class="img-responsive">
        <img src="assets/img/glavnaya.jpg">
      </div>
      <hr>
      <h3>Название</h3>
      <hr>
      <p>Описание<p>
          <hr>
          <h5>Цена</h5>
          <div class="hidden">
            <input type="checkbox" id="modal">
            <label for="modal" class="button">ЗАКАЗАТЬ</label>

            <form class="modal_content" id="form" name="form">
              <input type="text" class="form-field" name="name" placeholder="ФИО">
              <input type="text" class="form-field" name="email" placeholder="Почта">
              <input type="text" class="form-field" name="phone" placeholder="Номер телефона">
              <input type="text" class="form-field" name="adres" placeholder="Адрес">
              <button class="button-form"><span class="text-button">Отправить заявку</span></button>
            </form>
          </div>

    </div> -->
    <?php
      require_once 'php/connection.php';
      $mysql -> set_charset("utf8");
      $query = mysqli_query($mysql, "SELECT * FROM `catalog_product` WHERE `available` = 1");
      while($row = mysqli_fetch_assoc($query)) {
    ?>
    <div class="block_shop" product-id="<?= $row['id'] ?>">
      <div class="img-responsive">
        <a href="/product?id=<?= $row['id'] ?>"><img src="<?= $row['image_path'] ?>"></a>
      </div>
      <hr>
      <h3 class="product_name"><?= $row['product_name'] ?></h3>
      <hr>
      <p class="description"><?= $row['description'] ?><p>
          <hr>
          <h5 class="product_price"><?= $row['product_price'] ?></h5>
          <div>
            <button class="button-product">ЗАКАЗАТЬ</button>

            </form>

          </div>
    </div>
  <?php } ?>


  </div>
  <div class="modal">
    <div class="modal-content">
      <div class="product row">
        <img src="assets/img/glavnaya.jpg" class="img-responsive col s12 m6">
        <div class="product_elem col s12 m6">
          <h4 class="product_name">Имя</h4>
          <p class="product_price">Цена</p>
          <p class="description">Описание</p>
        </div>
      </div>
      <div class="feedback">
        <form action="">
          <h4 style="display: inline-block;">Оставьте свои контакты, чтобы мы связались с вами</h4>
          <input type="text" class="form-field" name="name" placeholder="ФИО">
          <input type="text" class="form-field" name="email" placeholder="Почта">
          <input type="text" class="form-field" name="phone" placeholder="Номер телефона">
          <input type="text" class="form-field" name="adres" placeholder="Адрес">
        </form>
      </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close btn-flat order-button" product_id="">Заказать</a>
      <a href="#!" class="modal-close btn-flat">Отменить</a>
    </div>
  </div>
  <div class="modal-overlay"></div>

</main>

<?php require_once 'layouts/footer.php' ?>
