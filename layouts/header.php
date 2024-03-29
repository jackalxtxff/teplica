<?php
  $url = $_SERVER["REQUEST_URI"];

  $url_main = "/";
  $url_about =  "/about";
  $url_index = "/index";
  $url_catalog = "/catalog";
  $url_contacts = "/contacts";
  $url_answers = "/answers";

  $c_active = 'class="active"';
  $active = 'active';
?>



<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>shop</title>
	<link rel="stylesheet" href="assets/style/css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
	<header>
    <div class="logo">
  		<a href="<?php echo $url_index; ?>">
  			<img class="logo-img" src="assets/img/logotype.png" width="240" height="240" alt="logo">
  			<h2 class="logo-text">Теплицы</h2>
  		</a>
  	</div>
		<nav>
			<div class="topnav" id="myTopnav">
				<a <?php if ($url == $url_main || $url == $url_index) {echo $c_active;} ?> href="<?php echo $url_index; ?>">Главная</a>
				<a <?php if ($url == $url_catalog) {echo $c_active;} ?>  href="<?php echo $url_catalog; ?>">Каталог</a>
				<a <?php if ($url == $url_about) {echo $c_active;} ?>  href="<?php echo $url_about; ?>">О нас</a>
				<a <?php if ($url == $url_answers) {echo $c_active;} ?>  href="<?php echo $url_answers; ?>">Ответы</a>
				<a <?php if ($url == $url_contacts) {echo $c_active;} ?>  href="<?php echo $url_contacts; ?>">Контакты</a>

				<a id="menu" href="#" class="icon" onclick="openNav()">&#9776;</a>
			</div>
      <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="<?php echo $url_index; ?>">Главная</a>
        <a href="<?php echo $url_catalog; ?>">Каталог</a>
        <a href="<?php echo $url_about; ?>">О нас</a>
        <a href="<?php echo $url_answers; ?>">Ответы</a>
        <a href="<?php echo $url_contacts; ?>">Контакты</a>
      </div>
		</nav>
	</header>
