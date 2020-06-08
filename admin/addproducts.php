<?php require_once 'layouts/header.php' ?>

<main>
  <div class="container">
    <div class="row">
      <div class="col s12">
        <h2 class="section-title">Добавление товара</h2>
        <div class="card white darken-1">
          <div class="card-content">
            <form class="addproduct">
              <div class="row">
                <div class="col s12 m6">
                  <input type="text" class="validate" name="product_name" placeholder="Название товара" data-length="10">
                </div>
                <div class="input-field col s12 m6">
                 <select name="material_type" style="display: none;">
                   <option value="" disabled selected>Тип материала</option>
                   <?php
                     require_once 'php/connection.php';
                     $mysql -> set_charset("utf8");
                     $query = mysqli_query($mysql, "SELECT * FROM `material_type`");
                     while($row = mysqli_fetch_assoc($query)) {
                   ?>
                   <option value="<?= $row['material_type'] ?>"><?= $row['material_type'] ?></option>
                   <?php } ?>
                 </select>
                </div>
                <div class="input-field col s12 m6">
                 <select name="arcs" style="display: none;">
                   <option value="" disabled selected>Дуга</option>
                   <?php
                     $query = mysqli_query($mysql, "SELECT * FROM `product_arcs`");
                     while($row = mysqli_fetch_assoc($query)) {
                   ?>
                   <option value="<?= $row['arcs'] ?>"><?= $row['arcs'] ?></option>
                 <?php } ?>
                 </select>
                </div>
                <div class="input-field col s12 m6">
                 <select name="base" style="display: none;">
                   <option value="" disabled selected>Основание</option>
                   <?php
                     $query = mysqli_query($mysql, "SELECT * FROM `product_base`");
                     while($row = mysqli_fetch_assoc($query)) {
                   ?>
                   <option value="<?= $row['base'] ?>"><?= $row['base'] ?></option>
                   <?php } ?>
                 </select>
                </div>
                <div class="input-field col s12 m6">
                 <select name="durability" style="display: none;">
                   <option value="" disabled selected>Прочность</option>
                   <?php
                     $query = mysqli_query($mysql, "SELECT * FROM `product_durability` ORDER BY `product_durability`.`id` ASC");
                     while($row = mysqli_fetch_assoc($query)) {
                   ?>
                   <option value="<?= $row['durability'] ?>"><?= $row['durability'] ?></option>
                   <?php } ?>
                 </select>
                </div>
                <div class="col s12 m6">
                  <input type="text" class="validate" name="width" placeholder="Ширина">
                </div>
                <div class="col s12 m6">
                  <input type="text" class="validate" name="height" placeholder="Высота">
                </div>
                <div class="col s12 m6">
                  <input type="text" class="validate" name="length" placeholder="Длина">
                </div>
                <div class="col s12 m6">
                  <input type="text" class="validate" name="product_price" placeholder="Цена">
                </div>
                <div class="col s12 m6">
                  <input type="text" class="validate" name="discount_price" placeholder="Размер скидки">
                </div>
                <div class="col s12 m6">
                  <textarea class="materialize-textarea validate" name="description" placeholder="Описание"></textarea>
                </div>
                <div class="col s12 m6">
                  <div class="file-field input-field">
                    <div class="btn">
                      <span>File</span>
                      <input type="file" name="image_path">
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" type="text" placeholder="Загрузите фотографию">
                    </div>
                  </div>
                </div>
                <div class="col s12">
                  <div class="row">
                    <div class="col s12 m6 offset-m3">
                      <a class="access-button waves-effect waves-light btn-large">Подтвердить</a>
                    </div>
                  </div>
                </div>

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php require_once 'layouts/footer.php' ?>
