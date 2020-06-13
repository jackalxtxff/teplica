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
