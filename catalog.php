<?php require_once 'layouts/header.php' ?>

<main class="transition-fade" id="swup">
  <h1>Каталог</h1>
  <div class="container">
    <div class="catalog_wrapper row">
      <?php
        require_once 'php/connection.php';
        $mysql -> set_charset("utf8");
        $query = mysqli_query($mysql, "SELECT * FROM `catalog_product` WHERE `available` = 1");
        while($row = mysqli_fetch_assoc($query)) {
      ?>
      <div class="product-item col s12 m4 l3" product-id="<?= $row['id'] ?>">
        <div class="product-item_hover" style="display: none;">
          <div class="row center">
            <a href="/product?id=<?= $row['id'] ?>"><div class="view-btn col s12">Просмотр</div></a>
            <div class="buy-btn modal-buy-trigger col s12">Заказать</div>
          </div>
        </div>
        <div class="item-content">
          <div class="product-item_image">
            <a href="/product?id=<?= $row['id'] ?>"><img src="<?= $row['image_path'] ?>" class="img-responsive"></a>
          </div>
          <div class="product-item_name">
            <h3><?= $row['product_name'] ?></h3>
          </div>
          <div class="product-item_price">
            <h5>Цена: <?= $row['product_price'] ?> руб</h5>
          </div>
          <div class="product-item_description">
            <p class="product-item_size">Размеры: ширина <?= $row['width'] ?> м, высота <?= $row['height'] ?> м, длина <?= $row['length'] ?> м</p>
            <p class="description"><?= $row['description'] ?><p>
          </div>
          <div class="product-time_btn">
            <button class="button-product modal-buy-trigger">ЗАКАЗАТЬ</button>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>


  </div>
  <div class="modal">
    <div class="modal-content">
      <div class="product row">
        <img src="assets/img/glavnaya.jpg" class="img-responsive col s12 m6">
        <div class="product_elem col s12 m6">
          <h4 class="product_name">Имя</h4>
          <p class="product_price">Цена</p>
          <p class="size">Размеры</p>
          <p class="material_type">Материал</p>
          <p class="arcs">Дуги</p>
          <p class="base">Основание</p>
          <p class="durability">Прочность</p>
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
