<?php
  require_once 'connection.php';

  $mysql -> set_charset("utf8");

  $product_value = $_POST['product-value'];
  $product_id = intval($_POST['product-id']);
  $column_name = $_POST['column-name'];

  $error_fields = [];

  if ($product_value === '') {
      $error_fields[] = 'product-value';
  }

  if (!empty($error_fields)) {
      $response = [
          "status" => false,
          "type" => 1,
          "message" => "Проверьте правильность полей",
          "fields" => $error_fields
      ];

      echo json_encode($response);

      die();
  }

  $update_value = mysqli_query($mysql, "SELECT * FROM `catalog_product` WHERE `id` = '$product_id'");
  if (mysqli_num_rows($update_value) > 0) {
      mysqli_query($mysql, "UPDATE `catalog_product` SET `$column_name` = '$product_value' WHERE `id` = '$product_id'");
      $response = [
          "status" => true,
          "message" => $product_id. " " . $product_value . " " . $column_name . " " ."Данные успешно изменены!"
      ];

      echo json_encode($response);

  } else {
      $response = [
          "status" => false,
          "message" => "Непредвидимая ошибка"
      ];
      echo json_encode($response);
  }
