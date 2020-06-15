<?php
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  require_once 'connection.php';

  $sort = $_POST['sort'];
  $queue = $_POST['queue'];
  $load = $_POST['load'];
  $sorting_query = 'ORDER BY `product_price`';
  if (!$queue) $queue = 'ASC';

  if ($load == "") {
    $load = "SELECT * FROM `catalog_product` WHERE `available` = 1 ";
  }

  switch ($sort) {
    case 'product_price':
      $sorting_query = 'ORDER BY `product_price`';
      break;

    case 'width':
      $sorting_query = 'ORDER BY `width`';
      break;

    case 'length':
      $sorting_query = 'ORDER BY `length`';
      break;
  }

  // if ($sort === 'product_price') $sorting_query = 'ORDER BY `product_price` DESC';
  // else if ($sort === 'width') $sorting_query = 'ORDER BY `width` DESC';
  // else $sorting_query = 'ORDER BY `length` DESC';

  $query = mysqli_query($mysql, "$load $sorting_query $queue");
  while($row = mysqli_fetch_assoc($query)) {
    include '../layouts/card.php';
  }


  $mysql -> close();
