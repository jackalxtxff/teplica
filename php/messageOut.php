<?php
    require_once 'connection.php';

    $mysql -> set_charset("utf8");

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $sex = $_POST['sex'];
    $message = $_POST['message'];

    $error_fields = [];

    if ($fullname === '') {
        $error_fields[] = 'fullname';
    }

    if ($email === '') {
        $error_fields[] = 'email';
    }

    if ($sex === '') {
        $error_fields[] = 'sex';
    }

    if ($message === '') {
        $error_fields[] = 'message';
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

      mysqli_query($mysql, "INSERT INTO `questions` (`id`, `name`, `email`, `gender`, `message`) VALUES
      (NULL, '$fullname', '$email', '$sex', '$message')");

      $response = [
          "status" => true,
          "message" => "Данные успешно загружены"
      ];
      echo json_encode($response);

    }


    $mysql -> close();

 ?>
