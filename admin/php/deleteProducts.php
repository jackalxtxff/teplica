<?php
  require_once 'connection.php';

  $mysql -> set_charset("utf8");

  $product_id = intval($_POST['product-id']);


  $delete = mysqli_query($mysql, "SELECT * FROM `catalog_product` WHERE `id` = '$product_id'");
  if (mysqli_num_rows($delete) > 0) {
      mysqli_query($mysql, "UPDATE `catalog_product` SET `available` = '0' WHERE `id` = '$product_id'");
      $response = [
          "status" => true,
          "message" => "Элемент успешно удален!"
      ];

      echo json_encode($response);

  } else {
      $response = [
          "status" => false,
          "message" => "Непредвидимая ошибка"
      ];
      echo json_encode($response);
  }
