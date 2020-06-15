<?php
  require_once 'layouts/header.php';
  require_once 'php/connection.php';
  $mysql -> set_charset("utf8");
?>

<main class="transition-fade" id="swup">
  <h1>Каталог</h1>
  <div class="container">
    <!-- <div class="collapsible row">
      <button class="collapsible-header button-product col s12">
        Нажать
      </button>
      <div class="collapsible-body col s12" style="display: none;">
        <form class="form-selection">
          <div class="row">
            <div class="input-b col s12 m4">
							<div class="label">
								Ширина
							</div>
							<select name="width">
								<option value="2">2 метра</option>
								<option value="2.5">2.5 метра</option>
								<option value="3">3 метра</option>
							</select>
            </div>
            <div class="input-b col s12 m4">
							<div class="label">
								Высота
							</div>
							<select name="height">
								<option value="2">2 метра</option>
								<option value="3">3 метра</option>
							</select>
            </div>
            <div class="input-b col s12 m4">
							<div class="label">
								Длина
							</div>
							<select name="length">
								<option value="4">4 метра</option>
								<option value="6">6 метров</option>
								<option value="8">8 метров</option>
								<option value="10">10 метров</option>
								<option value="12">12 метров</option>
							</select>
            </div>
            <div class="input-b col s12 m4">
							<div class="label">
								Дуги
							</div>
							<select name="arcs">
                <?php
                  $query = mysqli_query($mysql, "SELECT * FROM `product_arcs`");
                  while($row = mysqli_fetch_assoc($query)) {
                ?>
								<option value="<?= $row['arcs'] ?>"><?= $row['arcs'] ?></option>
                <?php } ?>
							</select>
            </div>
            <div class="input-b col s12 m4">
							<div class="label">
								Основание
							</div>
							<select name="base">
                <?php
                  $query = mysqli_query($mysql, "SELECT * FROM `product_base`");
                  while($row = mysqli_fetch_assoc($query)) {
                ?>
                <option value="<?= $row['base'] ?>"><?= $row['base'] ?></option>
                <?php } ?>
							</select>
            </div>
          </div>
          <div class="row">
            <div class="col s12 m4 offset-m4">
              <button class="button-product selection-btn">Подобрать</button>
            </div>
          </div>
        </form>
      </div>
    </div> -->
    <div class="sorting collapsible row">
      <div class="input-b col s10 m4">
        <select name="sorting">
          <option value="product_price">По цене</option>
          <option value="width">По ширине</option>
          <option value="length">По длине</option>
        </select>
      </div>
      <i class="queue-sort fas fa-sort-amount-down-alt col s1 m1" sorting="ASC"></i>
      <i class="queue-sort fas fa-sort-amount-up-alt col s1 m1" sorting="DESC"></i>
      <button class="collapsible-header button-sorting col s12 m7">
        Фильтры
      </button>
      <div class="collapsible-body col s12" style="display: none;">
        <form class="form-selection">
          <div class="row">
            <div class="input-b col s12 m4">
							<div class="label">
								Ширина
							</div>
							<select class="select" name="width">
                <option value="" selected>Выбрать</option>
								<option value="2">2 метра</option>
								<option value="2.5">2.5 метра</option>
								<option value="3">3 метра</option>
							</select>
            </div>
            <div class="input-b col s12 m4">
							<div class="label">
								Высота
							</div>
							<select class="select" name="height">
                <option value="" selected>Выбрать</option>
								<option value="2">2 метра</option>
								<option value="3">3 метра</option>
							</select>
            </div>
            <div class="input-b col s12 m4">
							<div class="label">
								Длина
							</div>
							<select class="select" name="length">
                <option value="" selected>Выбрать</option>
								<option value="4">4 метра</option>
								<option value="6">6 метров</option>
								<option value="8">8 метров</option>
								<option value="10">10 метров</option>
								<option value="12">12 метров</option>
							</select>
            </div>
            <div class="input-b col s12 m4">
							<div class="label">
								Дуги
							</div>
							<select class="select" name="arcs">
                <option value="" selected>Выбрать</option>
                <?php
                  $query = mysqli_query($mysql, "SELECT * FROM `product_arcs`");
                  while($row = mysqli_fetch_assoc($query)) {
                ?>
								<option value="<?= $row['arcs'] ?>"><?= $row['arcs'] ?></option>
                <?php } ?>
							</select>
            </div>
            <div class="input-b col s12 m4">
							<div class="label">
								Основание
							</div>
							<select class="select" name="base">
                <option value="" selected>Выбрать</option>
                <?php
                  $query = mysqli_query($mysql, "SELECT * FROM `product_base`");
                  while($row = mysqli_fetch_assoc($query)) {
                ?>
                <option value="<?= $row['base'] ?>"><?= $row['base'] ?></option>
                <?php } ?>
							</select>
            </div>
          </div>
          <div class="row">
            <div class="col s12 m4 offset-m4">
              <button class="button-product selection-btn">Показать</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="catalog_wrapper row">
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
