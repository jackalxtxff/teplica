<?php
  session_start();
  if ($_SESSION['user']['email'] != "admin@admin.com") {
      header('Location: /admin/auth');
  }
?>
<?php
  $url = $_SERVER["REQUEST_URI"];

  $url_products = "/admin/products";
  $url_addproducts = "/admin/addproducts";
  $url_messages =  "/admin/messages";
  $url_orders = "/admin/orders";

  $c_active = 'class="active"';
  $active = 'active';
?>


<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="assets\style\css\materialize.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="assets\style\css\style.css">
</head>

<body class="has-fixed-sidenav">
  <header>

    <div class="navbar-fixed">
      <nav class="navbar">
        <div class="nav-wrapper">
          <a href="#" data-target="slide-out" class="sidenav-trigger show-on-large"><i class="material-icons">menu</i></a>
          <div class="ticking-clock">
            <span>часы</span>
          </div>
          <ul id="nav-mobile" class="right">
            <!-- <li class="hide-on-med-and-down">
              <a href="#!" class="waves-effect"><i class="material-icons">notifications</i></a>
            </li> -->
            <li>
              <a href="#!" class='waves-effect dropdown-trigger' data-target='dropdown1'><i class="material-icons">settings</i></a>
              <ul id='dropdown1' class='dropdown-content'>
                <li><a href="#!" class="logout">Выход</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </div>

    <ul id="slide-out" class="sidenav">
      <li><a href="#" class="logo-container">Admin<i class="material-icons left">spa</i></a></li>
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li class="waves-effect <?php if ($url == $url_products || $url == $url_addproducts) {echo $active;} ?>">
            <a class="collapsible-header">Управление товарами<i class="material-icons chevron">chevron_left</i></a>
            <div class="collapsible-body">
              <ul>
                <li><a class="waves-effect <?php if ($url == $url_products) {echo $active;} ?>" href="<?php echo $url_products ?>"><i class="material-icons">tab</i>Товары</a></li>
                <li><a class="waves-effect <?php if ($url == $url_addproducts) {echo $active;} ?>" href="<?php echo $url_addproducts ?>"><i class="material-icons">add</i>Добавление товара</a></li>
              </ul>
            </div>
          </li>
          <li class="waves-effect <?php if ($url == $url_messages || $url == $url_orders) {echo $active;} ?>">
            <a class="collapsible-header">Заказы<i class="material-icons chevron">chevron_left</i></a>
            <div class="collapsible-body">
              <ul>
                <li><a class="waves-effect <?php if ($url == $url_messages) {echo $active;} ?>" href="<?php echo $url_messages ?>"><i class="material-icons">mail</i>Сообщения</a></li>
                <li><a class="waves-effect <?php if ($url == $url_orders) {echo $active;} ?>" href="<?php echo $url_orders ?>"><i class="material-icons">chrome_reader_mode</i>Заказы</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </li>
    </ul>



  </header>
