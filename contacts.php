<?php require_once 'layouts/header.php' ?>

<main class="transition-fade" id="swup">
	<!-- <section class="contacts">
  <h1 class="contacts-title">Обратная связь</h1>
      <div class="container4">

        <form class="contacts-form" method="post">
          <table>
            <tr>
              <td class="title">
                <label for="fullname">ФИО:</label>
              </td>
              <td class="field">
                <input type="text" name="fullname" placeholder="Представьтесь, пожалуйста">
              </td>
            </tr>
						<tr>
              <td class="title">
                <label for="fullname">Эл.почта:</label>
              </td>
              <td class="field">
                <input type="email" name="email" placeholder="Укажите электронную почту">
              </td>
            </tr>
            <tr>
              <td class="title">Пол:</td>
              <td class="field">
                <label><input type="radio" name="sex" value="man"> Мужской</label>
                <label><input type="radio" name="sex" value="woman"> Женский</label>
              </td>
            </tr>
            <tr>
              <td class="title">
                <label for="message">Доп.текст:</label>
              </td>
              <td class="field">
                <textarea name="message" placeholder="Сообщите все, что считаете нужным"></textarea>
              </td>
            </tr>
            <tr>
              <td class="title"></td>
              <td class="field">
                <input type="submit" class="btn btn-green message-button" value="Отправить">
              </td>
            </tr>
          </table>
        </form>

				<div class="contacts-adress">
				<h3>Наш Адресс</h3>
				<p>П. Ува ул.Максима Горького 48</p>
				<p class="contacts-alert"><strong>Внимание!</strong> Все поля обязательны для заполнения.</p>
			</div>
		</div>
	</section>
	<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A414776937dadefb558d4f55bd3abc54b70d26d786021d68d93ba9d7c8f3ead0d&amp;width=100%25&amp;height=402&amp;lang=ru_RU&amp;scroll=true"></script> -->

	<div class="container">
		<h1 class="page-title">Контакты</h1>
		<div class="row">
			<div class="contacts col s12 m5 push-m7">
				<div class="contact">
					<div class="contact__item">
						<div class="contact__label"><i class="fas fa-igloo"></i> Уважаемые теплицы</div>
					</div>
					<div class="contact__item">
						<div class="contact__label"><i class="fas fa-map-marker-alt"></i> Наш адрес:</div>
						<div class="contact__value">П. Ува, ул. Максима Горького</div>
					</div>
					<div class="contact__item">
						<div class="contact__label"><i class="fas fa-phone-alt"></i> Телефон организации:</div>
						<div class="contact__value"><a href="tel:+78005553535">+78000555353</a></div>
					</div>
					<div class="contact__item">
						<div class="contact__label"><i class="fas fa-envelope"></i> Электронная почта:</div>
						<div class="contact__value"><a href="mailto:teplica@teplica.com">teplica@teplica.com</a></div>
					</div>
				</div>
				<div class="write">
					<div class="write__label">Напишите нам</div>
					<div class="write__form">
						<form class="feedback">
							<div class="form__group">
                <label class="form__label">Ваше имя</label>
                <div class="form__field">
                   <input type="text" class="form__control" name="fullname">
                </div>
	            </div>
							<div class="form__group">
                <label class="form__label">Ваш телефон или e-mail *</label>
                <div class="form__field">
                  <input type="text" class="form__control" name="contact">
                </div>
            	</div>
							<div class="form__group">
                <label class="form__label">Сообщение</label>
                <div class="form__field">
                  <input type="text" class="form__control" name="message">
                </div>
            	</div>
							<div class="form__group">
								<button class="button-product message-button">Отправить</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="map col s12 m7 pull-m5">
				<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Af16a966948ae6fef7834d77eb11a695479ddfa195896116b1eb26f8871e965ea&amp;source=constructor" width="100%" height="100%" frameborder="0"></iframe>
			</div>
		</div>
		<div class="success-modal">
			<div class="circle-loader">
			  <div class="checkmark draw"></div>
			</div>
		</div>
		<div class="modal-overlay"></div>
	</div>
</main>

<?php require_once 'layouts/footer.php' ?>
