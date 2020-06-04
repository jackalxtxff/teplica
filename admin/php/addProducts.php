<?php
    require_once 'deburger.php';
    require_once 'connection.php';

    $mysql -> set_charset("utf8");

    $product_name = $_POST['product_name'];
    $vendor_code = $_POST['vendor_code'];
    $product_size = $_POST['product_size'];
    $material_type = $_POST['material_type'];
    $product_price = $_POST['product_price'];
    $discount_price = $_POST['discount_price'];
    $description = $_POST['description'];
    $image_path = $_FILES['image_path'];

    $error_fields = [];

    if ($product_name === '') {
        $error_fields[] = 'product_name';
    }

    if ($vendor_code === '') {
        $error_fields[] = 'vendor_code';
    }

    if ($product_size === '') {
        $error_fields[] = 'product_size';
    }

    if ($material_type === '') {
        $error_fields[] = 'material_type';
    }

    if ($product_price === '') {
        $error_fields[] = 'product_price';
    }

    if ($discount_price === '') {
        $error_fields[] = 'discount_price';
    }

    if ($description === '') {
        $error_fields[] = 'description';
    }

    if (!$_FILES['image_path']) {
        $error_fields[] = 'image_path';
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

    $check_vendor = mysqli_query($mysql, "SELECT * FROM `catalog_product` WHERE `vendor_code` = '$vendor_code'");
    if (mysqli_num_rows($check_vendor) > 0) {
        $response = [
            "status" => false,
            "type" => 3,
            "message" => "Товар с таким артикулом существует"
        ];

        echo json_encode($response);
        die();

    } else {

      $path = 'assets/uploads/' . time() . $_FILES['image_path']['name'];
      if (!move_uploaded_file($_FILES['image_path']['tmp_name'], '../../' . $path)) {
          $response = [
              "status" => false,
              "type" => 2,
              "message" => "Ошибка при загрузке фотографии"
          ];
          echo json_encode($response);

          die();
      }

      mysqli_query($mysql, "INSERT INTO `catalog_product` (`id`, `vendor_code`, `product_name`, `description`, `image_path`, `product_type`, `product_size`, `material_type`, `product_price`, `discount_price`, `available`) VALUES
      (NULL, '$vendor_code', '$product_name', '$description', '$path', NULL, '$product_size', '$material_type', '$product_price', '$discount_price', 1)");

      $response = [
          "status" => true,
          "message" => "Данные успешно загружены"
      ];
      echo json_encode($response);

    }

    $mysql -> close();

 ?>
