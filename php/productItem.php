<?php
  require_once 'connection.php';

  $sort = $_POST['sort'];
  $sorting_query = '';

  switch ($sort) {
    case 'product_price':
      $sorting_query = 'ORDER BY `product_price` DESC';
      break;

    case 'width':
      $sorting_query = 'ORDER BY `width` DESC';
      break;

    case 'length':
      $sorting_query = 'ORDER BY `length` DESC';
      break;
  }

  // if ($sort === 'product_price') $sorting_query = 'ORDER BY `product_price` DESC';
  // else if ($sort === 'width') $sorting_query = 'ORDER BY `width` DESC';
  // else $sorting_query = 'ORDER BY `length` DESC';

  $query = mysqli_query($mysql, "SELECT * FROM `catalog_product` WHERE `available` = 1 $sorting_query");
  while($row = mysqli_fetch_assoc($query)) {
    include '../layouts/card.php';
  }


  $mysql -> close();
