<?php require_once 'layouts/header.php' ?>

<main>
  <div class="container90">
    <div class="row">
      <div class="col s12">
        <h2 class="section-title">Товары</h2>
        <div class="card">
          <table id="table-product" class="dataTables-products">
            <thead>
              <tr>
                <th>#</th>
                <th>Статус</th>
                <th>Название товара</th>
                <th>Описание</th>
                <th>Материал</th>
                <th>Ширина</th>
                <th>Высота</th>
                <th>Длина</th>
                <th>Дуги</th>
                <th>Основание</th>
                <th>Прочность</th>
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
                <td class="material_type">
                  <span class="bd-text"><?= $row['material_type'] ?></span>
                  <div class="edit-box" style="display: none">
                    <div class="edit-box__title">
                      <p><?= $row['product_name'] ?></p>
                    </div>
                    <div class="edit-box__content input-field">
                      <div class="input-field col s12">
                       <select name="change-value" style="display: none;">
                         <option value="" disabled selected>Тип материала</option>
                         <?php
                           $query4 = mysqli_query($mysql, "SELECT * FROM `material_type`");
                           while($mat_type = mysqli_fetch_assoc($query4)) {
                         ?>
                         <option value="<?= $mat_type['material_type'] ?>"><?= $mat_type['material_type'] ?></option>
                         <?php } ?>
                       </select>
                      </div>
                    </div>
                    <div class="edit-box__footer">
                      <a href="#" class="close btn wafes-effect">Отменить</a>
                      <a href="#" class="save btn wafes-effect">Сохранить</a>
                    </div>
                  </div>
                </td>
                <td class="width">
                  <span class="bd-text"><?= $row['width'] ?></span>
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
                <td class="height">
                  <span class="bd-text"><?= $row['height'] ?></span>
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
                <td class="length">
                  <span class="bd-text"><?= $row['length'] ?></span>
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
                <td class="arcs">
                  <span class="bd-text"><?= $row['arcs'] ?></span>
                  <div class="edit-box" style="display: none">
                    <div class="edit-box__title">
                      <p><?= $row['product_name'] ?></p>
                    </div>
                    <div class="edit-box__content input-field">
                      <div class="input-field col s12">
                       <select name="change-value" style="display: none;">
                         <option value="" disabled selected>Дуги</option>
                         <?php
                           $query3 = mysqli_query($mysql, "SELECT * FROM `product_arcs`");
                           while($arcs = mysqli_fetch_assoc($query3)) {
                         ?>
                         <option value="<?= $arcs['arcs'] ?>"><?= $arcs['arcs'] ?></option>
                         <?php } ?>
                       </select>
                      </div>
                    </div>
                    <div class="edit-box__footer">
                      <a href="#" class="close btn wafes-effect">Отменить</a>
                      <a href="#" class="save btn wafes-effect">Сохранить</a>
                    </div>
                  </div>
                </td>
                <td class="base">
                  <span class="bd-text"><?= $row['base'] ?></span>
                  <div class="edit-box" style="display: none">
                    <div class="edit-box__title">
                      <p><?= $row['product_name'] ?></p>
                    </div>
                    <div class="edit-box__content input-field">
                      <div class="input-field col s12">
                       <select name="change-value" style="display: none;">
                         <option value="" disabled selected>Основание</option>
                         <?php
                           $query2 = mysqli_query($mysql, "SELECT * FROM `product_base`");
                           while($base = mysqli_fetch_assoc($query2)) {
                         ?>
                         <option value="<?= $base['base'] ?>"><?= $base['base'] ?></option>
                         <?php } ?>
                       </select>
                      </div>
                    </div>
                    <div class="edit-box__footer">
                      <a href="#" class="close btn wafes-effect">Отменить</a>
                      <a href="#" class="save btn wafes-effect">Сохранить</a>
                    </div>
                  </div>
                </td>
                <td class="durability">
                  <span class="bd-text"><?= $row['durability'] ?></span>
                  <div class="edit-box" style="display: none">
                    <div class="edit-box__title">
                      <p><?= $row['product_name'] ?></p>
                    </div>
                    <div class="edit-box__content input-field">
                      <div class="input-field col s12">
                       <select name="change-value" style="display: none;">
                         <option value="" disabled selected>Прочность</option>
                         <?php
                           $query3 = mysqli_query($mysql, "SELECT * FROM `product_durability` ORDER BY `product_durability`.`id` ASC");
                           while($durability = mysqli_fetch_assoc($query3)) {
                         ?>
                         <option value="<?= $durability['durability'] ?>"><?= $durability['durability'] ?></option>
                         <?php } ?>
                       </select>
                      </div>
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
