<?php require_once 'layouts/header.php' ?>

<main>
  <div class="container">
    <div class="row">
      <div class="col s12">
        <h2 class="section-title">Сообщения</h2>
        <div class="card">
          <table id="table-messages" class="dataTables-messages">
            <thead>
              <tr>
                <th>#</th>
                <th>Контакт</th>
                <th>Сообщение</th>
                <th>Имя</th>
              </tr>
            </thead>
            <tbody>
              <?php
                require_once 'php/connection.php';
                $mysql -> set_charset("utf8");
                $query = mysqli_query($mysql, "SELECT * FROM `messages`");
                while($row = mysqli_fetch_assoc($query)) {
              ?>

              <tr>
                <td class="id"><?= $row['id'] ?></td>
                <td class="contact"><?= $row['contact'] ?></td>
                <td class="message"><?= $row['message'] ?></td>
                <td class="name"><?= $row['name'] ?></td>
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
