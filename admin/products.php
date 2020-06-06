<?php require_once 'layouts/header.php' ?>

<main>
  <div class="container">
    <div class="row">
      <div class="col s12">
        <h2 class="section-title">Товары</h2>
        <div class="card">
          <table id="table-product" class="dataTables-products">
            <thead>
              <tr>
                <th>#</th>
                <th>Статус</th>
                <th>Артикул</th>
                <th>Название товара</th>
                <th>Описание</th>
                <th>Тип</th>
                <th>Размер</th>
                <th>Материал</th>
                <th>Цена</th>
                <th>Скидка</th>
                <th>Изображение</th>
                <th>Действие</th>
              </tr>
            </thead>
            <tbody>
              <?php
                require_once 'php/connection.php';
                $mysql -> set_charset("utf8");
                $query = mysqli_query($mysql, "SELECT * FROM `catalog_product`");
                while($row = mysqli_fetch_assoc($query)) {
              ?>

              <tr>
                <td class="id"><?= $row['id'] ?></td>
                <td class="available"><?php if ($row['available'] == 1) {echo "Виден";} else {echo "Скрыт";} ?></td>
                <td class="vendor_code">
                  <span class="bd-text"><?= $row['vendor_code'] ?></span>
                  <div class="edit-box" style="display: none">
                    <div class="edit-box__title">
                      <p><?= $row['product_name'] ?></p>
                    </div>
                    <div class="edit-box__content input-field">
                      <input type="text" name="change-value" value="">
                    </div>
                    <div class="edit-box__footer">
                      <a href="#" class="close btn wafes-effect">Отменить</a>
                      <a href="#" class="save btn wafes-effect">Сохранить</a>
                    </div>
                  </div>
                </td>
                <td class="product_name">
                  <span class="bd-text"><?= $row['product_name'] ?></span>
                  <div class="edit-box" style="display: none">
                    <div class="edit-box__title">
                      <p><?= $row['product_name'] ?></p>
                    </div>
                    <div class="edit-box__content input-field">
                      <input type="text" name="change-value" value="">
                    </div>
                    <div class="edit-box__footer">
                      <a href="#" class="close btn wafes-effect">Отменить</a>
                      <a href="#" class="save btn wafes-effect">Сохранить</a>
                    </div>
                  </div>
                </td>
                <td class="description">
                  <span class="bd-text"><?= $row['description'] ?></span>
                  <div class="edit-box" style="display: none">
                    <div class="edit-box__title">
                      <p><?= $row['product_name'] ?></p>
                    </div>
                    <div class="edit-box__content input-field">
                      <input type="text" name="change-value" value="">
                    </div>
                    <div class="edit-box__footer">
                      <a href="#" class="close btn wafes-effect">Отменить</a>
                      <a href="#" class="save btn wafes-effect">Сохранить</a>
                    </div>
                  </div>
                </td>
                <td class="product_type">
                  <span class="bd-text"><?= $row['product_type'] ?></span>
                  <div class="edit-box" style="display: none">
                    <div class="edit-box__title">
                      <p><?= $row['product_name'] ?></p>
                    </div>
                    <div class="edit-box__content input-field">
                      <input type="text" name="change-value" value="">
                    </div>
                    <div class="edit-box__footer">
                      <a href="#" class="close btn wafes-effect">Отменить</a>
                      <a href="#" class="save btn wafes-effect">Сохранить</a>
                    </div>
                  </div>
                </td>
                <td class="product_size">
                  <span class="bd-text"><?= $row['product_size'] ?></span>
                  <div class="edit-box" style="display: none">
                    <div class="edit-box__title">
                      <p><?= $row['product_name'] ?></p>
                    </div>
                    <div class="edit-box__content input-field">
                      <input type="text" name="change-value" value="">
                    </div>
                    <div class="edit-box__footer">
                      <a href="#" class="close btn wafes-effect">Отменить</a>
                      <a href="#" class="save btn wafes-effect">Сохранить</a>
                    </div>
                  </div>
                </td>
                <td class="material_type">
                  <span class="bd-text"><?= $row['material_type'] ?></span>
                  <div class="edit-box" style="display: none">
                    <div class="edit-box__title">
                      <p><?= $row['product_name'] ?></p>
                    </div>
                    <div class="edit-box__content input-field">
                      <input type="text" name="change-value" value="">
                    </div>
                    <div class="edit-box__footer">
                      <a href="#" class="close btn wafes-effect">Отменить</a>
                      <a href="#" class="save btn wafes-effect">Сохранить</a>
                    </div>
                  </div>
                </td>
                <td class="product_price">
                  <span class="bd-text"><?= $row['product_price'] ?></span>
                  <div class="edit-box" style="display: none">
                    <div class="edit-box__title">
                      <p><?= $row['product_name'] ?></p>
                    </div>
                    <div class="edit-box__content input-field">
                      <input type="text" name="change-value" value="">
                    </div>
                    <div class="edit-box__footer">
                      <a href="#" class="close btn wafes-effect">Отменить</a>
                      <a href="#" class="save btn wafes-effect">Сохранить</a>
                    </div>
                  </div>
                </td>
                <td class="discount_price">
                  <span class="bd-text"><?= $row['discount_price'] ?></span>
                  <div class="edit-box" style="display: none">
                    <div class="edit-box__title">
                      <p><?= $row['product_name'] ?></p>
                    </div>
                    <div class="edit-box__content input-field">
                      <input type="text" name="change-value" value="">
                    </div>
                    <div class="edit-box__footer">
                      <a href="#" class="close btn wafes-effect">Отменить</a>
                      <a href="#" class="save btn wafes-effect">Сохранить</a>
                    </div>
                  </div>
                </td>
                <td class="image_path"><?= $row['image_path'] ?></td>
                <td class="action">
                  <!-- Dropdown Trigger -->
                  <a class="waves-effect waves-light btn action-btn"><?php if ($row['available'] == 1) {echo "Скрыть";} else {echo "Показать";} ?></a>

                  <!-- Dropdown Structure -->

                </td>
              </tr>

              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</main>

<?php require_once 'layouts/footer.php' ?>
