<?php
  require_once 'connection.php';

  $product = [];
  $query = mysqli_query($mysql, "SELECT * FROM `catalog_product` WHERE `available` = 1");
  while($row = mysqli_fetch_assoc($query)) {
    include '../layouts/card.php';
  }


  $mysql -> close();
