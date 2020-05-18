<?php
  $url = $_SERVER["REQUEST_URI"];

  $url_main = "/teplica";
  $url_shop = "/teplica/shop";
  $url_about = "/teplica/about";
  $url_answer = "/teplica/otvet";
  $url_contacts = "/teplica/contact";

  $c_active = 'class="active"';
  $active = 'active';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>shop</title>
	<link rel="stylesheet" href="assets\style\css\style.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
<header>
	<div class="logo">
		<a href="index.html"><img src="assets\img\logot.jpg" width="200" height="200" alt="logo"></a>
	</div>
	<nav>
		<div class="topnav" id="myTopnav">
			<a href="<?php echo $url_main ?>">Главная</a>
			<a href="<?php echo $url_shop ?>">Магазин</a>
			<a href="<?php echo $url_about ?>">О нас</a>
			<a href="<?php echo $url_answer ?>">Ответы</a>
			<a href="<?php echo $url_contact ?>">Контакты</a>
			<a class="korzina" href="#"><img src="assets\img\korzina.jpg" width="50" height="50"></a>

			<a id="menu" href="#" class="icon">&#9776;</a>
		</div>
	</nav>
</header>
