<?php
    require_once 'deburger.php';
    require_once 'connection.php';

    $mysql -> set_charset("utf8");

    $product_name = $_POST['product_name'];
    $material_type = $_POST['material_type'];
    $product_price = $_POST['product_price'];
    $discount_price = $_POST['discount_price'];
    $width = $_POST['width'];
    $height = $_POST['height'];
    $length = $_POST['length'];
    $arcs = $_POST['arcs'];
    $base = $_POST['base'];
    $durability = $_POST['durability'];
    $description = $_POST['description'];
    $image_path = $_FILES['image_path'];

    $error_fields = [];

    if ($product_name === '') {
        $error_fields[] = 'product_name';
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

    if ($width === '') {
        $error_fields[] = 'width';
    }

    if ($height === '') {
        $error_fields[] = 'height';
    }

    if ($length === '') {
        $error_fields[] = 'length';
    }

    if ($arcs === '') {
        $error_fields[] = 'arcs';
    }

    if ($base === '') {
        $error_fields[] = 'base';
    }

    if ($durability === '') {
        $error_fields[] = 'durability';
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

    $path = 'assets/uploads/' . time() . $_FILES['image_path']['name'];
    if (!move_uploaded_file($_FILES['image_path']['tmp_name'], '../../' . $path)) {
        $response = [
            "status" => false,
            "type" => 2,
            "message" => "Ошибка при загрузке фотографии"
        ];
        echo json_encode($response);

        die();
    } else {
      mysqli_query($mysql, "INSERT INTO `catalog_product` (`id`, `product_name`, `material_type`, `product_price`, `discount_price`, `width`, `height`, `length`, `arcs`, `base`, `durability`, `description`, `image_path`, `available`) VALUES
      (NULL, '$product_name', '$material_type', '$product_price', '$discount_price', '$width', '$height', '$length', '$arcs', '$base', '$durability', '$description', '$path', 1)");

      $response = [
          "status" => true,
          "message" => "Данные успешно загружены"
      ];
      echo json_encode($response);

    }


    $mysql -> close();

 ?>
