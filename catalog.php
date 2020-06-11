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
      <section class="product row">
        <div class="product-image col s12 m6">
          <img src="" alt="">
        </div>
        <div class="product-feature col s12 m6">
          <div class="product_name">
          </div>
          <div class="vendor_code">
            <p>Артикул: <span class="vendor_code"></span></p>
          </div>
          <div class="product_price">
            <p><span class="product_price"></span> руб</p>
          </div>

        </div>
        <div class="row">
          <div class="product_about col s12">
            <p class="title-about">О товаре</p>
            <div class="description">
              <div class="product_size">
                <p>Размеры: <span class="product_size"></span></p>
              </div>
              <div class="material_type">
                <p>Материал: </p><span class="material_type"></span>
              </div>
              <div class="product_arcs">
                <p>Дуги: <span class="product_arcs"></span></p>
              </div>
              <div class="product_base">
                <p>Основание: <span class="product_base"></span></p>
              </div>
              <div class="product_durability">
                <p>Прочность: <span class="product_durability"></span></p>
              </div>
              <div class="product_description">
                <p>Описание: <span class="product_description"></span></p>
              </div>
            </div>
          </div>
        </div>
      </section>
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
