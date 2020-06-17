<?php
    require_once 'connection.php';

    $mysql -> set_charset("utf8");

    $fullname = $_POST['fullname'];
    $contact = $_POST['contact'];
    $message = $_POST['message'];

    $error_fields = [];

    if ($contact === '') {
        $error_fields[] = 'contact';
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

      mysqli_query($mysql, "INSERT INTO `questions` (`id`, `name`, `contact`, `message`) VALUES
      (NULL, '$fullname', '$contact', '$message')");

      $response = [
          "status" => true,
          "message" => "Данные успешно загружены"
      ];
      echo json_encode($response);

    }


    $mysql -> close();

 ?>
