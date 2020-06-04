<?php
    session_start();
    require_once 'connection.php';

    $mysql -> set_charset("utf8");

    $email = $_POST['email'];
    $password = $_POST['password'];

    $error_fields = [];

    if ($email === '') {
        $error_fields[] = 'email';
    }

    if ($password === '') {
        $error_fields[] = 'password';
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



    $password = $password;

    $check_user = mysqli_query($mysql, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {

      $user = mysqli_fetch_assoc($check_user);

      $_SESSION['user'] = [
          "id" => $user['id'],
          "email" => $user['email']
      ];

      $response = [
          "status" => true
      ];

      echo json_encode($response);

    } else {

      $response = [
          "status" => false,
          "message" => 'Не верный логин или пароль'
      ];

      echo json_encode($response);
    }




    $mysql -> close();
 ?>
