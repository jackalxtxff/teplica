<?php require_once 'layouts/header.php' ?>

<main class="transition-fade" id="swup">
	<section class="contacts">
  <h2 class="contacts-title">Обратная связь</h2>
      <div class="container4">

        <form class="contacts-form" method="post">
          <table>
            <tr>
              <td class="title">
                <label for="fullname">ФИО:</label>
              </td>
              <td class="field">
                <input type="text" id="fullname" name="fullname" placeholder="Представьтесь, пожалуйста">
              </td>
            </tr>
            <tr>
              <td class="title">Пол:</td>
              <td class="field">
                <label><input type="radio" id="man" name="sex" value="man" checked> Мужской</label>
                <label><input type="radio" id="woman" name="sex" value="woman"> Женский</label>
              </td>
            </tr>
            <tr>
              <td class="title">
                <label for="message">Доп.текст:</label>
              </td>
              <td class="field">
                <textarea id="message" name="message" placeholder="Сообщите все, что считаете нужным"></textarea>
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
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, </p>
				<p class="contacts-alert"><strong>Внимание!</strong> Все поля обязательны для заполнения.</p>
			</div>
		</div>
	</section>

</main>

<?php require_once 'layouts/footer.php' ?>
