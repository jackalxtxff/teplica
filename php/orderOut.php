<?php
    require_once 'connection.php';

    $mysql -> set_charset("utf8");

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $adress = $_POST['adres'];
    $product_id = $_POST['product_id'];

    $error_fields = [];

    if ($fullname === '') {
        $error_fields[] = 'name';
    }

    if ($email === '') {
        $error_fields[] = 'email';
    }

    if ($number === '') {
        $error_fields[] = 'phone';
    }

    if ($adress === '') {
        $error_fields[] = 'adres';
    }

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
    } else {

      mysqli_query($mysql, "INSERT INTO `orders` (`id`, `name`, `email`, `number`, `adress`, `product_id`) VALUES
      (NULL, '$fullname', '$email', '$number', '$adress', '$product_id')");

      $response = [
          "status" => true,
          "message" => "Данные успешно загружены"
      ];
      echo json_encode($response);

    }


    $mysql -> close();

 ?>
