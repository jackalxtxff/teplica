<?php
    require_once 'connection.php';

    $mysql -> set_charset("utf8");

    $product_id = $_POST['product-id'];

    $error_fields = [];

    if ($product_id === '') {
        $error_fields[] = 'product_id';
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

    $query = mysqli_query($mysql, "SELECT * FROM `catalog_product` WHERE `id` = '$product_id'");
    if (mysqli_num_rows($query) > 0) {


        $product = mysqli_fetch_assoc($query);

        $product_list = [
          "id" => $product['id'],
          "product_name" => $product['product_name'],
          "description" => $product['description'],
          "image_path" => $product['image_path'],
          "material_type" => $product['material_type'],
          "product_price" => $product['product_price'],
          "discount_price" => $product['discount_price'],
          "height" => $product['height'],
          "width" => $product['width'],
          "length" => $product['length'],
          "arcs" => $product['arcs'],
          "base" => $product['base'],
          "durability" => $product['durability']
        ];

        $response = [
            "status" => true,
            "message" => "Данные успешно выведены",
            "product" => $product_list
        ];

        echo json_encode($response);

    } else {
        $response = [
            "status" => false,
            "message" => "Непонятная ошибка"
        ];
        echo json_encode($response);
    }

    // $mysql -> query("INSERT INTO users(first_name, last_name, tel_number, date_birth, email, password) VALUES('$first_name', '$last_name', '$tel_number', '$date_birth', '$email', '$password')") or die("Ошибка " . mysqli_error($link));
    // header('Location: ../register.html');


    $mysql -> close();
?>
