<?php require_once 'layouts/header.php' ?>

<main class="transition-fade" id="swup">
	<section class="contacts">
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

</main>

<?php require_once 'layouts/footer.php' ?>
