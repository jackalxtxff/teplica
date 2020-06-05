<?php
  require_once 'php/connection.php';
  $get_id = $_GET['id'];
  $mysql -> set_charset("utf8");
  $query = mysqli_query($mysql, "SELECT * FROM `catalog_product` WHERE `id` = '$get_id' AND `available` = 1");
  $product = mysqli_fetch_assoc($query);

?>

<?php require_once 'layouts/header.php' ?>

<main class="transition-fade" id="swup">
	<div class="container">
    <div class="breadcrumbs">
        <p><a href="/catalog">Каталог</a> / <a><?= $product['product_name'] ?></a></p>
    </div>
  </div>
</main>

<?php require_once 'layouts/footer.php' ?>
