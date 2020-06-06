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
                  <input type="text" class="validate" name="product_name" placeholder="Название товара">
                </div>
                <div class="col s12 m6">
                  <input type="text" class="validate" name="material_type" placeholder="Тип материала">
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
                  <input type="text" class="validate" name="arcs" placeholder="Дуги">
                </div>
                <div class="col s12 m6">
                  <input type="text" class="validate" name="base" placeholder="Основание">
                </div>
                <div class="col s12 m6">
                  <input type="text" class="validate" name="durability" placeholder="Прочность">
                </div>
                <div class="col s12 m6">
                  <input type="text" class="validate" name="product_price" placeholder="Цена">
                </div>
                <div class="col s12 m6">
                  <input type="text" class="validate" name="discount_price" placeholder="Размер скидки">
                </div>
                <div class="col s12 m6">
                  <textarea class="materialize-textarea" name="description" placeholder="Описание"></textarea>
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
